<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Download extends CI_Controller {

	
	public function index()
	{
		$data=array(
		"visi"=>$this->db->get('visi')->result(),
        "misi"=>$this->db->get('misi')->result(),
        "umrah"=>$this->db->get('paket')->result(),
        "all"=>$this->db->get('download')->result(),
        );
		$this->template->load('static','Download',$data);
	}
}
