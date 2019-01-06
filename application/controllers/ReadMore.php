<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ReadMore extends CI_Controller {

	function __construct(){
		parent:: __construct();
		$this->load->model('m_beranda');
	}
	public function index()
	{
		$id=$this->uri->segment(3);
		$data['berita']=$this->m_beranda->GetBeritaId($id);
		$this->load->view('readmore', $data);
	}
}
