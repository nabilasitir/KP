<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TentangKami extends CI_Controller {

	
	public function index()
	{
		$data=array(
		"visi"=>$this->db->get('visi')->result(),
        "misi"=>$this->db->get('misi')->result(),
        "umrah"=>$this->db->get('paket')->result(),
        "galeri"=>$this->db->get('galeri')->result(),
        );
		$this->template->load('static','TentangKami',$data);
	}
}
