<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminTourMuslim extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_adminTourMuslim');
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
            "all"=>$this->db->get('tour_muslim')->result(),
            "nama_paket"=>"Modal",
        );
 
            $data['tour_muslim'] = $this->m_adminTourMuslim->tampil_data()->result();
            $this->template->load('navAdmin', 'adminTourMuslim',$data);       

        }else{

            //jika session belum terdaftar, maka redirect ke halaman login
            redirect("login");

        }
    }
 
    public function add(){

        $nama_paket = $this->input->post('nama_paket');
        $tujuan = $this->input->post('tujuan');
        $fasilitas = $this->input->post('fasilitas');
        $maskapai_penerbangan = $this->input->post('maskapai_penerbangan');
        $waktu = $this->input->post('waktu');
        $tanggal_berangkat = $this->input->post('tanggal_berangkat');
        $kuota = $this->input->post('kuota');

             $data = array(
            'nama_paket' => $nama_paket,
            'tujuan' => $tujuan,
            'fasilitas' => $fasilitas,
            'maskapai_penerbangan' => $maskapai_penerbangan,
            'waktu' => $waktu,
            'harga' => $harga,
            'tanggal_berangkat' => $tanggal_berangkat,
            'kuota' => $kuota,
            );
            $this->m_adminTourMuslim->input_data($data,'tour_muslim');
            redirect('adminTourMuslim');
 
    }

    public function edit()
    {
        $this->form_validation->set_rules('id', 'id', 'required');
        $this->form_validation->set_rules('nama_paket', 'nama_paket', 'required');
        if($this->form_validation->run()==FALSE){
            $this->session->set_flashdata('error',"Data Gagal Di Edit");
            redirect('AdminTourMuslim');
        }else{
            $data=array(
                "nama_paket"=>$_POST['nama_paket'],
                "tujuan"=>$_POST['tujuan'],
                "fasilitas"=>$_POST['fasilitas'],
                "maskapai_penerbangan"=>$_POST['maskapai_penerbangan'],
                "waktu"=>$_POST['waktu'],
                "harga"=>$_POST['harga'],
                "tanggal_berangkat"=>$_POST['tanggal_berangkat'],
                "kuota"=>$_POST['kuota'],
            );
            $this->m_adminTourMuslim->edit_data($data,$id);
            redirect('adminTourMuslim');
        }
    }
 
    public function hapus($id)
    {
        if($id==""){
            $this->session->set_flashdata('error',"Data Anda Gagal Di Hapus");
            redirect('AdminTourMuslim');
        }else{
            $this->m_adminTourMuslim->hapus_data($id);
            redirect('AdminTourMuslim');
        }
    }


    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }

}