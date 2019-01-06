<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeri extends CI_Controller {

	function __construct(){
		parent:: __construct();
	$this->load->model('m_galeri');
	}


	public function index()
	{
		$data=array(
		"visi"=>$this->db->get('visi')->result(),
        "misi"=>$this->db->get('misi')->result(),
        "umrah"=>$this->db->get('paket')->result(),
        );
		$data['galeri'] = $this->m_galeri->GetGaleri();
		$this->template->load('static','Galeri', $data);
	}
}
