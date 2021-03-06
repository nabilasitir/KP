<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminJadwalUmrah extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //load model admin
        $this->load->model('admin');
    }

    public function index()
    {
        if($this->admin->logged_id())
        {

            $this->template->load('navAdmin', 'adminJadwalUmrah');       

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