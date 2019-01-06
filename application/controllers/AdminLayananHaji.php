<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminLayananHaji extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_berita');
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
            "all"=>$this->db->get('berita')->result(),
            "judul"=>"Modal",
        );
 
            $data['berita'] = $this->m_berita->tampil_data()->result();
            $this->template->load('navAdmin', 'adminBerita',$data);       

        }else{

            //jika session belum terdaftar, maka redirect ke halaman login
            redirect("login");

        }
    }

    function tambah_berita(){

        $judul = $this->input->post('judul');
        $berita = $this->input->post('berita');
        $gambar = $_FILES['gambar']['name'];

        if ($gambar=''){} else{
            $config['upload_path']='./images/berita';
            $config['allowed_types']='jpg|gif|png|jpeg';

            $this->load->library('upload',$config);
            if(!$this->upload->do_upload('gambar')){
                echo "download gagal"; die();
            }else{
                $gambar=$this->upload->data('file_name');
            }

             $data = array(
            'judul' => $judul,
            'berita' => $berita,
            'gambar' => $gambar
            );
            $this->m_berita->input_data($data,'berita');
            redirect('adminBerita');

        }
 
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }

}