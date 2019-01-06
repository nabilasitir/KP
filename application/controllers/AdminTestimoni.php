<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminTestimoni extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_testimoni');
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
            "all"=>$this->db->get('testimoni')->result(),
            "judul"=>"Modal",
            );
 
            $data['testimoni'] = $this->m_testimoni->tampil_data()->result();
            $this->template->load('navAdmin', 'adminTestimoni',$data);       

        }else{

            //jika session belum terdaftar, maka redirect ke halaman login
            redirect("login");

        }
    }

    public function hapus($id)
    {
        if($id==""){
            $this->session->set_flashdata('error',"Data Anda Gagal Di Hapus");
            redirect('AdminTestimoni');
        }else{
            $this->m_testimoni->hapus($data,$id);
            redirect('AdminTestimoni');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }

}