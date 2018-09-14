<?php

class Database_Model extends CI_Model{

    
    public function __construct()
    {
    	parent::__construct();
        //$this->load->database();

    }

    public function login($tablo,$email,$sifre){

    	$this->db->select('*');
        $this->db->from($tablo);
    	$this->db->where('email', $email);
    	$this->db->where('sifre', $sifre);
    	
    	$this->db->limit(1);
       
    	$query=$this->db->get(); //verileri getir
      
         if ($query->num_rows() == 1)
         {
            return $query->result();
         }
         else
         {
            return false;
         }
    }

    public function update_data($tablo,$data,$Id){
        //id si ve datası gönderilen verileri günceller
        $this->db->where('Id', $Id);
        $this->db->update($tablo, $data);
        return true;
    }

    function get_filmler()
    {
        $query = $this->db->query('SELECT filmler.*, kategoriler.adi as katadi
        FROM filmler
        INNER JOIN kategoriler ON filmler.Kategori=kategoriler.Id order by adi ' );
        return $query->result();
    }

    function favori_filmler($id)
    {

        $query=$this->db->query('SELECT favori.*,filmler.Id as filmId,filmler.Ad as filmadi
        FROM favori
        INNER JOIN filmler ON filmler.Id=favori.film_id
        WHERE favori.kul_id='.$id);  
        
        return $query->result();
    }

    function get_film($id)
    {
        $query = $this->db->query('SELECT filmler.*, kategoriler.adi as katadi
        FROM filmler
        INNER JOIN kategoriler ON filmler.Kategori=kategoriler.id 
        WHERE filmler.id='.$id );
        return $query->result();
    }
     function bekleyen()
    {

        $query=$this->db->query('SELECT bekleyen.adi as kullaniciadi,filmler.Ad as filmad,bekleyen.yorum as yorum
        FROM bekleyen
        INNER JOIN filmler ON filmler.Id=bekleyen.filmId
        WHERE onay=1 and bekleyen.adi="'.$this->session->uye_session["Name"].'"');  
        
        return $query->result();
    }
     function bekleyenOnaysiz()
    {

        $query=$this->db->query('SELECT bekleyen.adi as kullaniciadi,filmler.Ad as filmad,bekleyen.yorum as yorum
        FROM bekleyen
        INNER JOIN filmler ON filmler.Id=bekleyen.filmId
        WHERE onay=0 and bekleyen.adi="'.$this->session->uye_session["Name"].'"');  
        
        return $query->result();
    }

}
?>