<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminVisiMisi extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_adminvisimisi');
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
            "all"=>$this->db->get('visi')->result(),
            "alls"=>$this->db->get('misi')->result(),
            "judul"=>"Modal",
            );

        $this->template->load('navAdmin','Adminvisimisi',$data);
        
        }else{

            //jika session belum terdaftar, maka redirect ke halaman login
            redirect("login");

        }
    }
 
    function addv(){
        $this->form_validation->set_rules('visi', 'visi', 'required');
        if($this->form_validation->run()==FALSE){
            $this->session->set_flashdata('error',"Data Gagal Di Tambahkan");
            redirect('Adminvisimisi');
        }else{

        $visi = $this->input->post('visi');

             $data = array(
            'visi' => $visi
            );
            $this->m_adminvisimisi->addv($data,'visi');
            redirect('Adminvisimisi');
        }

    }

    function addm(){
        $this->form_validation->set_rules('misi', 'misi', 'required');
        if($this->form_validation->run()==FALSE){
            $this->session->set_flashdata('error',"Data Gagal Di Tambahkan");
            redirect('Adminvisimisi');
        }else{

        $misi = $this->input->post('misi');

             $data = array(
            'misi' => $misi
            );
            $this->m_adminvisimisi->addm($data,'misi');
            redirect('Adminvisimisi');
        }

    }

    public function editv()
    {
        $this->form_validation->set_rules('id', 'id', 'required');
        $this->form_validation->set_rules('visi', 'visi', 'required');
        if($this->form_validation->run()==FALSE){
            $this->session->set_flashdata('error',"Data Gagal Di Edit");
            redirect('adminvisimisi');
        }else{
            $data=array(
                "visi"=>$_POST['visi'],
            );
            $this->m_adminvisimisi->editv($data,$id);
            redirect('adminvisimisi');
        }
    }

    public function editm()
    {
        $this->form_validation->set_rules('id', 'id', 'required');
        $this->form_validation->set_rules('misi', 'misi', 'required');
        if($this->form_validation->run()==FALSE){
            $this->session->set_flashdata('error',"Data Gagal Di Edit");
            redirect('adminvisimisi');
        }else{
            $data=array(
                "misi"=>$_POST['misi'],
            );
            $this->m_adminvisimisi->editm($data,$id);
            redirect('adminvisimisi');
        }
    }
 
    public function hapusv($id)
    {
        if($id==""){
            $this->session->set_flashdata('error',"Data Anda Gagal Di Hapus");
            redirect('adminvisimisi');
        }else{
            $this->m_adminvisimisi->hapusv($data,$id);
            redirect('adminvisimisi');
        }
    }

    public function hapusm($id)
    {
        if($id==""){
            $this->session->set_flashdata('error',"Data Anda Gagal Di Hapus");
            redirect('adminvisimisi');
        }else{
            $this->m_adminvisimisi->hapusm($data,$id);
            redirect('adminvisimisi');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('index');
    }

}