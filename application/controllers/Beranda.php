<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

	function __construct(){
		parent:: __construct();
		$this->load->model('m_beranda');
		$this->load->model('m_galeri');
		$this->load->model('m_video');
	}


	public function index()
	{
        	$data=array(
        	"visi"=>$this->db->get('visi')->result(),
                "misi"=>$this->db->get('misi')->result(),
                "umrah"=>$this->db->get('paket')->result(),
                "video"=>$this->db->get('video')->result(),
       
                );
                $data['agenda'] = $this->m_beranda->GetAgenda();
                $data['berita'] = $this->m_beranda->Getberita();
                $data['galeri'] = $this->m_beranda->GetGaleri();
        	$this->load->view('index', $data);
	}

	public function tampil($id){
        
        $data=array(
        "berita"=>$this->m_beranda->select_by_id($id),
        "content"=>'Tampil_Modal',
        "visi"=>$this->db->get('visi')->result(),
        "misi"=>$this->db->get('misi')->result(),
        "umrah"=>$this->db->get('paket')->result(),

        );

        $this->template->load('static','detailBerita',$data);
}

}
