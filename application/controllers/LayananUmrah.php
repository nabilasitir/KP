<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LayananUmrah extends CI_Controller {

	
	public function index()
	{
		$data=array(
		"content"=>'Tampil_Modal',
		"visi"=>$this->db->get('visi')->result(),
        "misi"=>$this->db->get('misi')->result(),
        "paket"=>$this->db->get('paket')->result(),
        "umrah"=>$this->db->get('paket')->result(),

        );
		$this->template->load('static','LayananUmrah',$data);
	}

	public function tampil($id){
		$data=array(
		"content"=>'Tampil_Modal',
		"visi"=>$this->db->get('visi')->result(),
        "misi"=>$this->db->get('misi')->result(),
        "paket"=>$this->db->get('paket')->result(),
        "umrah"=>$this->db->get('paket')->result(),

        );
		$this->template->load('static','LayananUmrah',$data);
	}
}
