<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __constract()
	{  
	  parent:: __constract();
	  $this->load->helper('url');
	  $this->load->model('Database_Model');

	  
	}
	

	public function index()
	{
		$query=$this->db->query("SELECT * FROM kategoriler ORDER By adi");
		$data['kategoriler']=$query->result();
		$query=$this->db->query("SELECT COUNT(Id) AS say FROM favori");
		$data['favori']=$query->result();
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
	public function hakkimizda()
	{
		$query=$this->db->query("SELECT * FROM kategoriler ORDER By adi");
		$data['kategoriler']=$query->result();
		$query=$this->db->query("SELECT * FROM ayarlar");
		$data['veri']=$query->result();
		$data["sayfa"]="Hakkımızda ||";
		$data["menu"]="hakkimizda";

		$this->load->model("Database_Model");

	    $this->load->view('_header',$data);
		$this->load->view('hakkimizda');
		$this->load->view('_footer');
		
	}
	public function iletisim()
	{
		$query=$this->db->query("SELECT * FROM kategoriler ORDER By adi");
		$data['kategoriler']=$query->result();
		$query=$this->db->query("SELECT * FROM ayarlar");
		$data['veri']=$query->result();
		$data["sayfa"]="İletişim ||";
		$data["menu"]="iletisim";
		$this->load->model("Database_Model");

	    $this->load->view('_header',$data);
		$this->load->view('iletisim');
		$this->load->view('_footer');
		
	}
	public function bize_yazin()
	{
		$query=$this->db->query("SELECT * FROM kategoriler ORDER By adi");
		$data['kategoriler']=$query->result();
		$query=$this->db->query("SELECT * FROM ayarlar");
		$data['veri']=$query->result();
		$data["sayfa"]="Bize_Yazin ||";
		$data["menu"]="bize_yazin";
		$this->load->model("Database_Model");

	    $this->load->view('_header',$data);
		$this->load->view('bize_yazin');
		$this->load->view('_footer');
		
	}
	public function mesaj_kaydet()
	{
		//form verileri alınıyor
		$data=array(
	      'adsoy'=>$this->input->post('adsoy'),
	      'email'=>$this->input->post('email'), 
	      'tel'=>$this->input->post('tel'),
	      'mesaj'=>$this->input->post('mesaj'),
	      'IP'=>$_SERVER['REMOTE_ADDR']
	      

		);

		$this->db->insert("mesajlar", $data);
		$this->session->set_flashdata("mesaj", "Mesajınız gönderilmiştir sizinle iletişime geçilecektir");
		redirect(base_url().'home/bize_yazin');
		$data["sayfa"]="Mesaj_Kaydet ||";
		
	}
		public function film_detay($id)
	{

		$query=$this->db->query("SELECT * FROM bekleyen where filmId=".$id." and onay=1");
		$data['yorumlar']=$query->result();

		$query=$this->db->query("SELECT * FROM kategoriler ORDER By adi");
		$data['kategoriler']=$query->result();
		

		$this->load->model("Database_Model");
		$data["id"]=$id;
		$data["veri"]=$this->Database_Model->get_film($id);
		$query=$this->db->query("SELECT * FROM film_resim WHERE urun_id=$id");
		$data['resimler']=$query->result();
		$data["sayfa"]="Detaylar";
     
		$this->load->model("Database_Model");
	    $this->load->view('_header',$data);
		$this->load->view('film_detay',$data);
		$this->load->view('_footer');
		
	}

	   public function login_ol()
	{
		$query=$this->db->query("SELECT * FROM ayarlar");
		$data['veri']=$query->result();
		$data["sayfa"]="Login_ol ||";
		$data["menu"]="uye";

		$this->load->model("Database_Model");

	    $this->load->view('_header');
		$this->load->view('login_ol',$data);
		$this->load->view('_footer');
		
	}


	public function login()
	{
		$email=$this->input->post("email");
		$sifre=$this->input->post("sifre");

		echo $email=$this->security->xss_clean("$email");
		echo $sifre=$this->security->xss_clean("$sifre");
		$this->load->model("Database_Model");
		$result=$this->Database_Model->login('uyeler', $email, $sifre);
		

		$this->load->view('_header');
		$this->load->view('login_ol');
		$this->load->view('_footer');
		
		if($result)
		{
			$sess_array= array(
             'id'=> $result[0]->Id,
             'email'=> $result[0]->email,
             'Name'=> $result[0]->Name,
             'resim'=> $result[0]->resim,
			);
			//session değişkenine atama
			
			$this->session->set_userdata("uye_session",$sess_array);
			
			redirect(base_url().'home/uye_bilgi');
		}
		else
		{
			$this->session->set_flashdata("mesaj", "Hatalı kullanıcı adı ya da şifre"); 
			
			redirect(base_url().'home/login_ol');

		}	
	
	   
	}

	   public function uye_bilgi()
	{
		{
		$query=$this->db->query("SELECT *FROM ayarlar");
		$data["veri1"]= $query->result();
		$data["menu"]= "bilgi";
		$data["sayfa"]= "Bilgi";
		//$query=$this->db->get("ayarlar");
		//$data["veri"]=$query->result();
		//$data["sayfa"]="İletişim";
		$id=$this->session->uye_session["id"];
		$query=$this->db->query("SELECT *FROM uyeler WHERE id=".$id." LIMIT 1");
		$data["veri"]=$query->result()[0];
		$query=$this->db->query("SELECT * FROM kategoriler ORDER BY adi");
		$data["kategoriler"]=$query->result();

		$this->load->view('_header',$data);
		$this->load->view('uye_bilgi', $data);
		
		$this->load->view('_footer');
	}
	}





	public function uye_guncelle($Id)
	{
		//form verileri alınıyor
		$data=array(
	      'name'=>$this->input->post('name'),
	      'email'=>$this->input->post('email'),
	      'sifre'=>$this->input->post('sifre'),
	      'tel'=>$this->input->post('tel'),
	      'sehir'=>$this->input->post('sehir'),

		);

		$this->load->model("Database_Model");
		$this->Database_Model->update_data("uyeler", $data, $Id);
		redirect(base_url().'home/uye_bilgi');
		
	}
	public function yorum_ekle($id)
	{
		if($this->session->uye_session["name"]==null)
			$ad = "Anonim";
		else
			$ad = $this->session->uye_session["name"];
		//form verileri alınıyor
		$data=array(
	      'adi'=>$ad,
	      'filmId'=>$id,
	      'yorum'=>$this->input->post('treply1'),
	      'ip'=>$_SERVER['REMOTE_ADDR']
	
		);
		$this->load->model("Database_Model");

		$this->db->insert("bekleyen", $data);
		$this->session->set_flashdata("mesaj", "Yorumunuz eklendi");

	    redirect(base_url().'home/film_detay/'.$id);

		
	}
	public function kategori_detay($id)
	{

		$this->load->model("Database_Model");
		$data["id"]=$id;
		$data["veri"]=$this->Database_Model->get_film($id);
		$data["sayfa"]="Detaylar";
    	 $query=$this->db->query("SELECT * FROM filmler WHERE Kategori=$id ORDER By Ad");
		$data['filmler']=$query->result();
		
		$this->load->model("Database_Model");
	    $this->load->view('_header',$data);
		$this->load->view('kategori',$data);
		$this->load->view('_footer');
		
	}

}
