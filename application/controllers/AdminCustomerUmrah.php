<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminCustomerUmrah extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_adminCustomerUmrah');
        $this->load->helper('url');
        //load model admin
        $this->load->model('admin');
    }

    public function index()
    {
        if($this->admin->logged_id())
        {
            $data=array(
            "content"=>'Tampil_Modal',
            "all"=>$this->db->get('biodata_jamaah')->result(),
            "judul"=>"Modal",
            );
 
            $data['biodata_jamaah'] = $this->m_adminCustomerUmrah->tampil_data()->result();
            $this->template->load('navAdmin', 'adminCustomerUmrah',$data);       

        }else{

            //jika session belum terdaftar, maka redirect ke halaman login
            redirect("login");

        }
    }

    public function add()
    {
        $this->form_validation->set_rules('nomor_ktp', 'nomor_ktp', 'required');
        if($this->form_validation->run()==FALSE){
            $this->session->set_flashdata('error',"Data Gagal Di Tambahkan");
            redirect('adminCustomerUmrah');
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
        $email =$this->input->post('email');
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
            $this->m_adminCustomerUmrah->add($data,'biodata_jamaah');
            redirect('adminCustomerUmrah');

        }
    }

     public function edit()
    {
        $this->form_validation->set_rules('id_jamaah', 'id_jamaah', 'required');
        $this->form_validation->set_rules('nama', 'nama', 'required');
        if($this->form_validation->run()==FALSE){
            $this->session->set_flashdata('error',"Data Gagal Di Edit");
            redirect('adminCustomerUmrah');
        }else{
            $data=array(
                "nomor_ktp"=>$_POST['nomor_ktp'],
                "nomor_passport"=>$_POST['nomor_passport'],
                "nama"=>$_POST['nama'],
                "tempat_lahir"=>$_POST['tempat_lahir'],
                "tgl_lahir"=>$_POST['tgl_lahir'],
                "jenis_kelamin"=>$_POST['jenis_kelamin'],
                "umur"=>$_POST['umur'],
                "kewarganegaraan"=>$_POST['kewarganegaraan'],
                "alamat"=>$_POST['alamat'],
                "no_tlp"=>$_POST['no_tlp'],
                "email"=>$_POST['email'],
                "pendidikan"=>$_POST['pendidikan'],
                "pekerjaan"=>$_POST['pekerjaan'],
                "pengalaman"=>$_POST['pengalaman'],
            );
            $this->m_adminDaftarCustomer->edit($data,$id_jamaah);
            redirect('adminCustomerUmrah');
        }
    }

    public function hapus($id_jamaah)
    {
        if($id_jamaah==""){
            $this->session->set_flashdata('error',"Data Anda Gagal Di Hapus");
            redirect('AdminCustomerUmrah');
        }else{
            $this->m_adminCustomerUmrah->hapus($id_jamaah);
            redirect('AdminCustomerUmrah');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }

}