<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Filmler extends CI_Controller {

	 public function __construct()
    {
    	parent::__construct();
    	$this->load->helper('url');
    	$this->load->model('Database_Model');
    }
    
	public function index()
	{	//Temizlemek için alttaki satırı açıp yenileyip tekrar kapatınız.
		//$this->session->unset_userdata("admin_session");$this->load->helper('url');
		if(!$this->session->userdata("admin_session"))
	    	redirect(base_url().'admin/login');



        //$query=$this->db->query("SELECT * FROM filmler ORDER BY Ad");
        //$data["veriler"]=$query->result();
        $data["veriler"]=$this->Database_Model->get_filmler();
		$this->load->view('admin/filmler_liste', $data);
			
	}

	public function ekle()
	{

		$this->load->view('admin/filmler_ekle');
		
	}
	public function ekle_kaydet()
	{
		//form verileri alınıyor
		$data=array(
	      'Ad'=>$this->input->post('Ad'),
	      'Kategori'=>$this->input->post('Kategori'),
	      'Puan'=>$this->input->post('Puan'),
	      'Resim'=>$this->input->post('Resim'),
	      'Tarih'=>$this->input->post('Tarih'),	   
	      'Yonetmen'=>$this->input->post('Yonetmen'),
	      'Yapim'=>$this->input->post('Yapim'),
		);

		$this->db->insert("filmler", $data);
		$this->session->set_flashdata("mesaj", "Film Kaydı Gerçekleştirildi");
		redirect(base_url().'admin/filmler');
		
	}
	public function duzenle($Id)
	{
		$query=$this->db->query("SELECT * FROM kategoriler");
        $data["veriler"]=$query->result();
        
        $data["veri"]=$this->Database_Model->get_film($Id);
		$this->load->view('admin/filmler_duzenle_formu', $data);


	}
	public function guncelle($Id)
	{
		//form verileri alınıyor
		$data=array(
	      'Ad'=>$this->input->post('Ad'),
	      'Kategori'=>$this->input->post('Kategori'),
	      'Puan'=>$this->input->post('Puan'),
	      'Resim'=>$this->input->post('Resim'),
	      'Tarih'=>$this->input->post('Tarih'),
	      'Yonetmen'=>$this->input->post('Yonetmen'),
	      'Yapim'=>$this->input->post('Yapim'),
		);

		$this->load->model("Database_Model");
		$this->Database_Model->update_data("filmler", $data, $Id);
		redirect(base_url().'admin/filmler');
		
	}
	public function sil($Id)
	{
		$this->db->query("DELETE FROM filmler WHERE Id=$Id");
		redirect(base_url().'admin/filmler');
        


	}
	public function resim_yukle($Id)
	{
		$query=$this->db->query("SELECT * FROM filmler WHERE Id= $Id");
        $data["veri"]=$query->result();

		$data["Id"]=$Id;
		$this->load->view('admin/resim_yukle', $data);
		
	}
	public function resim_kaydet($Id)
	{
		$data["Id"]=$Id;
		//upload edilecek dosyaya ait ayarlar ve limitler 
		
		    $config['upload_path']          = './uploads/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 1000;
            $config['max_width']            = 1024;
            $config['max_height']           = 1024;

		//Ayarlar ile kütüphaneyi çağır
		$this->load->library('upload', $config);

		if( ! $this->upload->do_upload('Resim')) //Hata varsa yükle
		{
			$error= $this->upload->display_errors();
			$this->session->set_flashdata("mesaj", "Yüklemede Hata Oluştu :" .$error ); 
			$this->load->view('admin/resim_yukle', $data);

		}
		else{   //Hata yoksa
			$upload_data= $this->upload->data();
			
		}
		$data=array(
		  'resim'=> $upload_data["file_name"]
	     );

		$this->load->model('Database_Model');
		$this->Database_Model->update_data("filmler", $data, $Id);
		redirect(base_url().'admin/filmler');

    }


	public function galeri_yukle($Id)
	{
		$query=$this->db->query("SELECT * FROM film_resim WHERE urun_id= $Id");
        $data["veriler"]=$query->result();

		$data["Id"]=$Id;
		$this->load->view('admin/galeri_yukle', $data);
		
	}
	public function galeri_kaydet($Id)
	{
		$data["Id"]=$Id;
		//upload edilecek dosyaya ait ayarlar ve limitler 
		
		    $config['upload_path']          = './uploads/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 1000;
            $config['max_width']            = 1024;
            $config['max_height']           = 1024;

		//Ayarlar ile kütüphaneyi çağır
		$this->load->library('upload', $config);

		if( ! $this->upload->do_upload('Resim')) //Hata varsa yükle
		{
			$error= $this->upload->display_errors();
			$this->session->set_flashdata("mesaj", "Yüklemede Hata Oluştu :" .$error ); 
			redirect(base_url().'admin/filmler/galeri_yukle/'.$Id);

		}
		else{   //Hata yoksa

			//>>>Veritabanına kayıt<<<

			$upload_data= $this->upload->data();
					
		   $data=array(
		   'urun_id'=> $Id,
	       'resim'=> $upload_data["file_name"]
	      
		);

		$this->db->insert("film_resim", $data);

        //>>>Veritabanına Kayıt<<<
        $this->session->set_flashdata("mesaj", "Resim Galeriye Yüklendi");
		redirect(base_url().'admin/filmler/galeri_yukle/'.$Id);
		
		}
	}
	public function galeri_sil($urunid,$resimId)
	{
		$this->db->query("DELETE FROM film_resim WHERE Id= $resimId");
		$this->session->set_flashdata("mesaj", "Resim Galeriden Silindi");
		redirect(base_url().'admin/filmler/galeri_yukle/'.$urunid);
        


	}
	
}
