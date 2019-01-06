<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class layananHaji extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('m_layananHaji');
        $this->load->helper('url');
    }
	
	public function index()
	{

		$data=array(
		"visi"=>$this->db->get('visi')->result(),
        "misi"=>$this->db->get('misi')->result(),
        "all"=>$this->db->get('haji')->result(),
        "umrah"=>$this->db->get('paket')->result(),
        );
		$this->template->load('static','layananHaji',$data);
	}

	 function add(){
        $this->form_validation->set_rules('nama', 'nama', 'required');
        if($this->form_validation->run()==FALSE){
            $this->session->set_flashdata('error',"Data Gagal Di Tambahkan");
            redirect('layananHaji');
        }else{
        $nomor_ktp = $this->input->post('nomor_ktp');
        $nomor_passport = $this->input->post('nomor_passport');
        $nama = $this->input->post('nama');
        $tempat_lahir = $this->input->post('tempat_lahir');
        $tgl_lahir = $this->input->post('tgl_lahir');
        $jenis_kelamin = $this->input->post('jenis_kelamin');
        $umur = $this->input->post('umur');
        $kewarganegaraan = $this->input->post('kewarganegaraan');
        $alamat = $this->input->post('alamat');
        $no_tlp = $this->input->post('no_tlp');
        $email = $this->input->post('email');
        $pendidikan = $this->input->post('pendidikan');
        $pekerjaan = $this->input->post('pekerjaan');
        $pengalaman = $this->input->post('pengalaman');

             $data = array(
            'nomor_ktp' => $nomor_ktp,
            'nomor_passport' => $nomor_passport,
            'nama' => $nama,
            'tempat_lahir' => $tempat_lahir,
            'tgl_lahir' => $tgl_lahir,
            'jenis_kelamin' => $jenis_kelamin,
            'umur' => $umur,
            'kewarganegaraan' => $kewarganegaraan,
            'alamat' => $alamat,
            'no_tlp' => $no_tlp,
            'email' => $email,
            'pendidikan' => $pendidikan,
            'pekerjaan' => $pekerjaan,
            'pengalaman' => $pengalaman
            );
            $this->m_layananHaji->add($data,'biodata_jamaah');
            redirect('layananHaji');
        }

    }
}
