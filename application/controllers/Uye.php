<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Uye extends CI_Controller {

    public function __constract()
	{  
	  parent:: __constract();
	  $this->load->helper('url');
	  $this->load->model('Database_Model');

	  //eger otıurum açılmamaışsa kontrolu
	  if (!$this->session->userdata("uye_session"))
	  redirect(base_url().'home/login_ol');

	  
	}
	

	public function index()
	{
		$query=$this->db->query("SELECT * FROM kategoriler ORDER By adi");
		$data['kategoriler']=$query->result();
		$query=$this->db->query("SELECT * FROM ayarlar");
		$data['veri']=$query->result();
		$this->load->model("Database_Model");

		$query=$this->db->query("SELECT * FROM filmler ORDER By id DESC LIMIT 3");
		$data['yeni']=$query->result();

		$query=$this->db->query("SELECT * FROM filmler ORDER By RAND() LIMIT 3");
		$data['random']=$query->result();
		$data["sayfa"]="Film Forum";
		$data["menu"]="anasayfa";


	    $this->load->view('_header',$data);
		$this->load->view('_slider');
		$this->load->view('_sidebar');
		$this->load->view('_content');
		$this->load->view('_footer');
		
	}
	public function hesabim()
	{
		$query=$this->db->query("SELECT * FROM ayarlar");
		$data['veri']=$query->result();
		$query=$this->db->query("SELECT * FROM uyeler WHERE Id=".$this->session->uye_session["id"]);
		$data['veriler']=$query->result();

		$data["sayfa"]="Hesabım ||";
		$data["menu"]="hesabim";

		$this->load->model("Database_Model");

	    $this->load->view('_header',$data);
		$this->load->view('hesabim',$data);
		$this->load->view('_footer');
		
	}
	public function login_cik()
	{
		
		$this->session->unset_userdata("uye_session");
			redirect(base_url().'home');

	}

	public function uye_guncelle($Id)
	{
		//form verileri alınıyor
		$data=array(
	      'name'=>$this->input->post('Name'),
	      'email'=>$this->input->post('email'),
	      'sifre'=>$this->input->post('sifre'),
	      'tel'=>$this->input->post('tel'),
	      'sehir'=>$this->input->post('sehir'),

		);

		$this->load->model("Database_Model");
		$this->Database_Model->update_data("uyeler", $data, $Id);
		redirect(base_url().'home/uyeler');
		
	}
	public function favori_ekle($id)
	{

		$data=array(
	      'film_id'=>$id,
	      'adet'=>1,
	      'kul_id'=>$this->session->uye_session["id"],
		);
		
		$this->load->model("Database_Model");
		$this->db->insert("favori", $data);
		$this->session->set_flashdata("mesaj", "Favorilere Eklendi"); 

		redirect(base_url().'uye/favoriler/');

	}
	public function favoriler()
	{
		$id=$this->session->uye_session["id"];
		$query=$this->db->query("SELECT * FROM ayarlar");
		$data['veri']=$query->result();
		$this->load->model("Database_Model");
		$id=$this->session->uye_session["id"];
		$data['veriler']=$this->Database_Model->favori_filmler($id);
		
		


	    $this->load->view('_header',$data);
		$this->load->view('favori',$data);
		$this->load->view('_footer');
		
	}

	public function favori_sil()
	{
		$query=$this->db->query("DELETE FROM favori WHERE Id=$id");
		$this->session->set_flashdata("mesaj", "<b>Ürün favoriden silindi</b>");
		redirect(base_url().'uye/favoriler');

	    $this->load->view('_header',$data);
		$this->load->view('sepet',$data);
		$this->load->view('_footer');
		
	}
	public function yorumlar()
	{
		$id=$this->session->uye_session["id"];
		$query=$this->db->query("SELECT * FROM ayarlar");
		$data['veri']=$query->result();
		$this->load->model("Database_Model");
		$id=$this->session->uye_session["id"];
		$data['veriler']=$this->Database_Model->bekleyen();
		$this->load->view('_header',$data);
		$this->load->view('yorum',$data);
		$this->load->view('_footer');
		
	}
	public function bekleyen_yorumlar()
	{
		$id=$this->session->uye_session["id"];
		$query=$this->db->query("SELECT * FROM ayarlar");
		$data['veri']=$query->result();
		$this->load->model("Database_Model");
		$id=$this->session->uye_session["id"];
		$data['veriler']=$this->Database_Model->bekleyenOnaysiz();
		$this->load->view('_header',$data);
		$this->load->view('yorum',$data);
		$this->load->view('_footer');
		
	}
	public function ekle()
	{
		$data["sayfa"]="Login_ol ||";
	$this->load->view('_header');

	$this->load->view('kayit_ol');
	$this->load->view('_footer');
		
	}
	public function ekle_kaydet()
	{
		//form verileri alınıyor
		$data=array(
	      'Name'=>$this->input->post('name'),
	      'email'=>$this->input->post('email'),
	      'sifre'=>$this->input->post('sifre'),	      
	      'tel'=>$this->input->post('tel'),
	      'sehir'=>$this->input->post('sehir'),

		);

		$this->db->insert("uyeler", $data);
		$this->session->set_flashdata("mesaj", "Üye Kaydı Gerçekleştirildi");
		redirect(base_url().'home/login_ol');

		
	}

	
	 
}
