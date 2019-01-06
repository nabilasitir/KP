<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminGaleri extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_adminGaleri');
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
            "all"=>$this->db->get('galeri')->result(),
            "judul"=>"Modal",
            );

            $data['galeri'] = $this->m_adminGaleri->tampil_data()->result();
            $this->template->load('navAdmin', 'AdminGaleri',$data);       

        }else{

            //jika session belum terdaftar, maka redirect ke halaman login
            redirect("login");

        }
    }

 
    function tambah_galeri(){

        $gambar = $_FILES['gambar']['name'];
        $deskripsi = $this->input->post('deskripsi');

        if ($gambar=''){} else{
            $config['upload_path']='./images';
            $config['allowed_types']='jpg|gif|png|jpeg';

            $this->load->library('upload',$config);
            if(!$this->upload->do_upload('gambar')){
                echo "download gagal"; die();
            }else{
                $gambar=$this->upload->data('file_name');
            }

             $data = array(
            'gambar' => $gambar,
            'deskripsi' => $deskripsi
            );
            $this->m_adminGaleri->input_data($data,'galeri');
            redirect('adminGaleri');

        }
 
    }

    public function edit()
    {
        $this->form_validation->set_rules('id_gambar', 'id_gambar', 'required');
        $this->form_validation->set_rules('deskripsi', 'deskripsi', 'required');
        if($this->form_validation->run()==FALSE){
            $this->session->set_flashdata('error',"Data Gagal Di Edit");
            redirect('AdminGaleri');
        }else{
            $data=array(
                "deskripsi"=>$_POST['deskripsi'],
        
            );
            $this->m_adminGaleri->edit($data,$id_gambar);
            redirect('AdminGaleri');
        }
    }
 
    public function hapus($id_gambar)
    {
        if($id_gambar==""){
            $this->session->set_flashdata('error',"Data Anda Gagal Di Hapus");
            redirect('AdminGaleri');
        }else{
            $this->m_adminGaleri->hapus($id_gambar);
            redirect('AdminGaleri');
        }
    }


    public function logout()
    {
        $this->session->sess_destroy();
        redirect('index');
    }

}