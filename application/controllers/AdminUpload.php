<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminUpload extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_adminUpload');
        $this->load->helper('url');
        //load model admin
        $this->load->model('admin');
    }

    public function index()
    {
        if($this->admin->logged_id())
        {
            $data['download'] = $this->m_adminUpload->tampil_data()->result();
            $this->template->load('navAdmin', 'AdminUpload','v_tampil',$data);       

        }else{

            //jika session belum terdaftar, maka redirect ke halaman login
            redirect("login");

        }
    }

    function tambah(){
        $this->load->view('v_input');
    }
 
    function tambah_file(){

        $file = $this->input->post('file');
        $nama_file = $this->input->post('nama_file');

             $data = array(
            'file' => $file,
            'nama_file' => $nama_file
            );
            $this->m_adminUpload->input_data($data,'download');
            redirect('AdminUpload');
    }


    public function logout()
    {
        $this->session->sess_destroy();
        redirect('index');
    }

}