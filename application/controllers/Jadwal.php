<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
       $this->load->model('m_jadwal', '', TRUE);
        $this->load->helper('url');
        //load model admin
        $this->load->model('admin');
    }

	
	public function index()
	{
		$data=array(
		"all"=>$this->db->get('paket')->result(),
		"visi"=>$this->db->get('visi')->result(),
        "misi"=>$this->db->get('misi')->result(),
        "umrah"=>$this->db->get('paket')->result(),
        );
        $data['join2'] = $this->m_jadwal->duatable(); 
		$this->template->load('static','Jadwal',$data);
	}
}
