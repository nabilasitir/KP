<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminAgendaAcara extends CI_Controller {

    function __construct(){
        parent::__Construct();
         $this->load->model('m_adminAgendaAcara');
        $this->load->helper('url');
        //load model admin
        $this->load->model('admin');
    }
 
    public function index(){
         if($this->admin->logged_id())
        {

        $data=array(
            "content"=>'Tampil_Modal',
            "all"=>$this->db->get('agenda')->result(),
            "judul"=>"Modal",
            );
 
        $data['agenda'] = $this->m_adminAgendaAcara->tampil_data()->result();
        $this->template->load('navAdmin','AdminAgendaAcara',$data);      

        }else{

            //jika session belum terdaftar, maka redirect ke halaman login
            redirect("login");

        }

    }

    public function add()
    {
        $this->form_validation->set_rules('acara', 'acara', 'required');
        if($this->form_validation->run()==FALSE){
            $this->session->set_flashdata('error',"Data Gagal Di Tambahkan");
            redirect('AdminTourMuslim');
        }else{
        $acara = $this->input->post('acara');
        $isi = $this->input->post('isi');
        $tanggal = $this->input->post('tanggal');

             $data = array(
            'acara' => $acara,
            'isi' => $isi,
            'tanggal' => $tanggal
            
            );
            $this->m_adminAgendaAcara->add($data,'agenda');
            redirect('adminAgendaAcara');

        }
    }

    public function edit()
    {
        $this->form_validation->set_rules('id', 'id', 'required');
        $this->form_validation->set_rules('acara', 'acara', 'required');
        if($this->form_validation->run()==FALSE){
            $this->session->set_flashdata('error',"Data Gagal Di Edit");
            redirect('AdminAgendaAcara');
        }else{
            $data=array(
                "acara"=>$_POST['acara'],
                "isi"=>$_POST['isi'],
                "tanggal"=>$_POST['tanggal']
            );
            $this->m_adminAgendaAcara->edit_data($data,$id);
            redirect('AdminAgendaAcara');
        }
    }
 
    public function hapus($id)
    {
        if($id==""){
            $this->session->set_flashdata('error',"Data Anda Gagal Di Hapus");
            redirect('adminAgendaAcara');
        }else{
            $this->m_adminAgendaAcara->hapus_data($id);
            redirect('adminAgendaAcara');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }

}