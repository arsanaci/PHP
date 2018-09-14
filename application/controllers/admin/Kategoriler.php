<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategoriler extends CI_Controller {

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



        $query=$this->db->query("SELECT * FROM kategoriler ORDER BY adi");
        $data["veriler"]=$query->result();
		$this->load->view('admin/kategoriler_liste', $data);
		
		
	}

	public function ekle()
	{

		$this->load->view('admin/kategoriler_ekle');
		
	}
	public function ekle_kaydet()
	{
		//form verileri alınıyor
		$data=array(
	      'ad'=>$this->input->post('ad'),
	      'parent_id'=>$this->input->post('parent_id'),

	     
		);

		$this->db->insert("kategoriler", $data);
		$this->session->set_flashdata("mesaj", "kategori Kaydı Gerçekleştirildi");
		redirect(base_url().'admin/kategoriler');
		
	}
	public function duzenle($Id)
	{
		$query=$this->db->query("SELECT * FROM kategoriler WHERE Id=$Id");
        $data["veri"]=$query->result();
		$this->load->view('admin/kategoriler_duzenle_formu', $data);


	}
	public function guncelle($Id)
	{
		//form verileri alınıyor
		$data=array(
	      'adi'=>$this->input->post('adi'),
	      'parent_id'=>$this->input->post('parent_id'),

		);

		$this->load->model("Database_Model");
		$this->Database_Model->update_data("kategoriler", $data, $Id);
		redirect(base_url().'admin/kategoriler');
		
	}
	public function sil($Id)
	{
		$this->db->query("DELETE FROM kategoriler WHERE Id=$Id");
		redirect(base_url().'admin/kategoriler');
        


	}


	
}
