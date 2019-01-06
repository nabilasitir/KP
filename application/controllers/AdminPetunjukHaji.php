<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminPetunjukHaji extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //load model admin
        $this->load->model('m_adminPetunjukHaji');
        $this->load->model('admin');
    }

    public function index()
    {
        if($this->admin->logged_id())
        {
        $data=array(
        "all"=>$this->db->get('download')->result(),
        );
            $this->template->load('navAdmin', 'adminPetunjukHaji', $data);       

        }else{

            //jika session belum terdaftar, maka redirect ke halaman login
            redirect("login");

        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }

}