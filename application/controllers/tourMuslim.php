<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tourMuslim extends CI_Controller {

	
	public function index()
	{
		$data=array(
		"visi"=>$this->db->get('visi')->result(),
        "misi"=>$this->db->get('misi')->result(),
        "umrah"=>$this->db->get('paket')->result(),
        "tour_muslim"=>$this->db->get('tour_muslim')->result(),
        );
		$this->template->load('static','tourMuslim',$data);
	}
}
