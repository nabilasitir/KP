<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminDownload extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_adminDownload');
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
            "all"=>$this->db->get('download')->result(),
            "judul"=>"Modal",
            );
 
        $data['downlaod'] = $this->m_adminDownload->tampil_data()->result();
        $this->template->load('navAdmin','AdminDownload',$data);
        
        }else{

            //jika session belum terdaftar, maka redirect ke halaman login
            redirect("login");

        }
    }
 
    function add(){
        $this->form_validation->set_rules('nama_file', 'nama_file', 'required');
        if($this->form_validation->run()==FALSE){
            $this->session->set_flashdata('error',"Data Gagal Di Tambahkan");
            redirect('AdminDownload');
        }else{

        $nama_file = $this->input->post('nama_file');
        $link = $this->input->post('link');

             $data = array(
            'nama_file' => $nama_file,
            'link' => $link
            );
            $this->m_adminDownload->add($data,'download');
            redirect('AdminDownload');
        }

    }

    public function edit()
    {
        $this->form_validation->set_rules('id', 'id', 'required');
        $this->form_validation->set_rules('nama_file', 'nama_file', 'required');
        if($this->form_validation->run()==FALSE){
            $this->session->set_flashdata('error',"Data Gagal Di Edit");
            redirect('adminDownload');
        }else{
            $data=array(
                "nama_file"=>$_POST['nama_file'],
                "link"=>$_POST['link'],
            );
            $this->m_adminDownload->edit($data,$id);
            redirect('adminDownload');
        }
    }
 
    public function hapus($id)
    {
        if($id==""){
            $this->session->set_flashdata('error',"Data Anda Gagal Di Hapus");
            redirect('adminDownload');
        }else{
            $this->m_adminDownload->hapus($data,$id);
            redirect('adminDownload');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('index');
    }

}