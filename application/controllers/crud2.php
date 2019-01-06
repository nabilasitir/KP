<?php 
 
 
class Crud2 extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('m_testimoni');
		$this->load->helper('url');
 
	}
 
	function index(){
		$data['user'] = $this->m_testimoni->tampil_data()->result();
		$this->load->view('v_tampil',$data);
	}
 
	function tambah(){
		$this->load->view('v_input');
	}
 
}