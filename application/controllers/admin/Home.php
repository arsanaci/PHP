<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	 public function __construct()
        {
          parent::__construct();
         //Temizlemek için alttaki satırı açıp yenileyip tekrar kapatınız.
		//$this->session->unset_userdata("admin_session");
		  $this->load->helper('url');
		  if(!$this->session->userdata("admin_session"))
	      redirect(base_url().'admin/login');
	  $this->load->model('Database_Model');
        }
	
	public function index()
	{	
		$query=$this->db->query("SELECT * FROM bekleyen");
		$data['veri']=$query->result();
	    
		$this->load->view('admin/bekle',$data);
		
		
	}
	public function ayarlar(){
		
		$query=$this->db->query("SELECT * FROM ayarlar");
		$data['veri']=$query->result();
		$this->load->view('admin/ayarlar', $data);
	}
	public function ayarlar_guncelle($Id)
	{

		//form verileri alınıyor
		$data=array(
	      'adi'=>$this->input->post('adi'),
	      'description'=>$this->input->post('description'),
	      'keywords'=>$this->input->post('keywords'),
	      'adres'=>$this->input->post('adres'),
	      'tel'=>$this->input->post('tel'),	
	      	         
	      'hakkimizda'=>$this->input->post('hakkimizda'),
	      'iletisim'=>$this->input->post('iletisim'),
 
		);
		$this->load->model('Database_Model');

		$this->Database_Model->update_data("ayarlar", $data, $Id);
		redirect(base_url().'admin/home/ayarlar');

	}

	public function bekleyenler()
	{
		$id=$this->session->uye_session["id"];

		$query=$this->db->query("SELECT * FROM bekleyen");
		$data['veri']=$query->result();
		
		$this->load->model("Database_Model");
		$id=$this->session->uye_session["id"];
		$data['veriler']=$this->Database_Model->bekleyenOnaysiz();

		$this->load->view('admin/bekle',$data);

		
	}




		public function duzenle($Id)
	{
		$query=$this->db->query("SELECT * FROM bekleyen WHERE Id=$Id");
        $data["veri"]=$query->result();
		$this->load->view('admin/bekle_form', $data);


	}
	public function guncelle($Id)
	{
		

		//form verileri alınıyor
		$data=array(
	      'adi'=>$this->input->post('adi'),
	      'filmId'=>$this->input->post('filmId'),
	      'yorum'=>$this->input->post('yorum')
	   
	      
		);
		

		$this->load->model("Database_Model");
		$this->Database_Model->update_data("bekleyen", $data, $Id);
		redirect(base_url().'admin/home');
		
	}
}
