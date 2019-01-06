<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class adminCustomerHaji extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_adminCustomerHaji');
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
            "all"=>$this->db->get('biodata_jamaah_haji')->result(),
            "judul"=>"Modal",
            );
 
            $data['adminCustomerHaji'] = $this->m_adminCustomerHaji->tampil_data()->result();
            $this->template->load('navAdmin', 'adminCustomerHaji',$data);       

        }else{

            //jika session belum terdaftar, maka redirect ke halaman login
            redirect("login");

        }
    }

    function add(){

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
        $pas_foto = $_FILES['pas_foto']['name'];
        $bukti_transfer = $_FILES['bukti_transfer']['name'];

        if ($pas_foto&&$bukti_transfer==''){} else{
            $config['upload_path']='./images/jamaahHaji';
            $config['allowed_types']='jpg|gif|png|jpeg';

            $this->load->library('upload',$config);
            if(!$this->upload->do_upload('pas_foto', 'bukti_transfer')){
                echo "download gagal"; die();
            }else{
                $bukti_transfer=$this->upload->data('file_name');
                $pas_foto=$this->upload->data('bukti_transfer');
            }

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
            'pengalaman' => $pengalaman,
            'pas_foto' => $pas_foto,
            'bukti_transfer'=> $bukti_transfer
            );
            $this->m_berita->input_data($data,'biodata_jamaah_haji');
            redirect('adminCustomerHaji');

        }
 
    }

    public function edit()
    {
        $this->form_validation->set_rules('id_jamaah', 'id_jamaah', 'required');
        $this->form_validation->set_rules('nama', 'nama', 'required');
        if($this->form_validation->run()==FALSE){
            $this->session->set_flashdata('error',"Data Gagal Di Edit");
            redirect('adminCustomerHaji');
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
            $this->m_adminCustomerHaji->edit_data($data, $id_jamaah);
            redirect('adminCustomerHaji');
        }
    }

    public function hapus($id_jamaah)
    {
        if($id_jamaah==""){
            $this->session->set_flashdata('error',"Data Anda Gagal Di Hapus");
            redirect('adminCustomerHaji');
        }else{
            $this->m_adminCustomerHaji->hapus($id_jamaah);
            redirect('adminCustomerHaji');
        }
    }

    public function logout() 
    {
        $this->session->sess_destroy();
        redirect('login');
    }

}