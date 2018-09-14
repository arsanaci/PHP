<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Uyeler extends CI_Controller {

	 public function __construct()
    {
    	parent::__construct();
    	$this->load->helper('url');
    }
    
	
		

	public function index()
	{	//Temizlemek için alttaki satırı açıp yenileyip tekrar kapatınız.
		//$this->session->unset_userdata("admin_session");$this->load->helper('url');
		if(!$this->session->userdata("admin_session"))
	    	redirect(base_url().'admin/login');



        $query=$this->db->query("SELECT * FROM uyeler ORDER BY name");
        $data["veriler"]=$query->result();
		$this->load->view('admin/uyeler_liste', $data);
		
		
	}

	public function ekle()
	{

		$this->load->view('admin/uyeler_ekle');
		
	}
	public function ekle_kaydet()
	{
		//form verileri alınıyor
		$data=array(
	      'name'=>$this->input->post('name'),
	      'email'=>$this->input->post('email'),
	      'sifre'=>$this->input->post('sifre'),
	      
	      'tel'=>$this->input->post('tel'),
	      'sehir'=>$this->input->post('sehir'),
	      'yetki'=>$this->input->post('yetki'),
	      'durum'=>$this->input->post('durum'),
		);

		$this->db->insert("uyeler", $data);
		$this->session->set_flashdata("mesaj", "Üye Kaydı Gerçekleştirildi");
		redirect(base_url().'admin/uyeler');
		
	}
	public function duzenle($Id)
	{
		$query=$this->db->query("SELECT * FROM uyeler WHERE Id=$Id");
        $data["veri"]=$query->result();
		$this->load->view('admin/uyeler_duzenle_formu', $data);


	}
	public function guncelle($Id)
	{
		//form verileri alınıyor
		$data=array(
	      'name'=>$this->input->post('name'),
	      'email'=>$this->input->post('email'),
	      'sifre'=>$this->input->post('sifre'),
	      'tel'=>$this->input->post('tel'),
	      'sehir'=>$this->input->post('sehir'),
	      'yetki'=>$this->input->post('yetki'),
	      'durum'=>$this->input->post('durum'),
		);

		$this->load->model("Database_Model");
		$this->Database_Model->update_data("uyeler", $data, $Id);
		redirect(base_url().'admin/uyeler');
		
	}
	public function sil($Id)
	{
		$this->db->query("DELETE FROM uyeler WHERE Id=$Id");
		redirect(base_url().'admin/uyeler');
        


	}


	
}
