<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminBerita extends CI_Controller {

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

    public function edit()
    {
        $this->form_validation->set_rules('id', 'id', 'required');
        $this->form_validation->set_rules('judul', 'judul', 'required');
        if($this->form_validation->run()==FALSE){
            $this->session->set_flashdata('error',"Data Gagal Di Edit");
            redirect('AdminBerita');
        }else{
            $data=array(
                "judul"=>$_POST['judul'],
                "berita"=>$_POST['berita'],
            );
            $this->m_berita->edit_data($data,$id);
            redirect('AdminBerita');
        }
    }
 
    public function hapus($id)
    {
        if($id==""){
            $this->session->set_flashdata('error',"Data Anda Gagal Di Hapus");
            redirect('AdminBerita');
        }else{
            $this->m_berita->hapus_data($id);
            redirect('AdminBerita');
        }
    }


    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }

}