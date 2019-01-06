<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class adminVideo extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('m_adminVideo');
        $this->load->helper('url');
        $this->load->model('admin');
    }

	public function index()
	{
        if($this->admin->logged_id())
        {
            $data=array(
            "content"=>'Tampil_Modal',
            "all"=>$this->db->get('video')->result(),
            "judul"=>"Modal",
            );

        $this->template->load('navAdmin','adminVideo',$data);
        
        }else{

            //jika session belum terdaftar, maka redirect ke halaman login
            redirect("login");

        }
    }

     function add(){
        $this->form_validation->set_rules('nama_video', 'nama_video', 'required');
        if($this->form_validation->run()==FALSE){
            $this->session->set_flashdata('error',"Data Gagal Di Tambahkan");
            redirect('Adminvideo');
        }else{

        $nama_video = $this->input->post('nama_video');
        $link = $this->input->post('link');

             $data = array(
            'nama_video' => $nama_video,
            'link' => $link
            );
            $this->m_adminVideo->add($data,'video');
            redirect('Adminvideo');
        }

    }

    public function edit()
    {
        $this->form_validation->set_rules('id', 'id', 'required');
        $this->form_validation->set_rules('nama_video', 'nama_video', 'required');
        if($this->form_validation->run()==FALSE){
            $this->session->set_flashdata('error',"Data Gagal Di Edit");
            redirect('adminvideo');
        }else{
            $data=array(
                "nama_video"=>$_POST['nama_video'],
                "link"=>$_POST['link'],
            );
            $this->m_adminVideo->edit($data,$id);
            redirect('adminvideo');
        }
    }
 
    public function hapus($id)
    {
        if($id==""){
            $this->session->set_flashdata('error',"Data Anda Gagal Di Hapus");
            redirect('adminvideo');
        }else{
            $this->m_adminVideo->hapus($data,$id);
            redirect('adminvideo');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('index');
    }



  }


	
