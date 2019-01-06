<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class AdminLayananUmrah extends CI_Controller {
 
    function __construct(){
        parent::__Construct();
         $this->load->model('m_adminLayananUmrah');
        $this->load->helper('url');
        //load model admin
        $this->load->model('admin');
    }
 
    public function index(){
         if($this->admin->logged_id())
        {

        $data=array(
            "content"=>'Tampil_Modal',
            "all"=>$this->db->get('paket')->result(),
            "judul"=>"Modal",
            );
 
        $data['paket'] = $this->m_adminLayananUmrah->tampil_data()->result();
        $this->template->load('navAdmin','AdminLayananUmrah',$data);      

        }else{

            //jika session belum terdaftar, maka redirect ke halaman login
            redirect("login");

        }

    }
 
    public function add()
    {
        $this->form_validation->set_rules('nama_paket', 'nama_paket', 'required');
        if($this->form_validation->run()==FALSE){
            $this->session->set_flashdata('error',"Data Gagal Di Tambahkan");
            redirect('AdminLayananUmrah');
        }else{
        $nama_paket = $this->input->post('nama_paket');
        $harga = $this->input->post('harga');
        $fasilitas = $this->input->post('fasilitas');
        $maskapai_penerbangan = $this->input->post('maskapai_penerbangan');
        $hari = $this->input->post('hari');
        $keberangkatan = $this->input->post('keberangkatan');
        $kepulangan = $this->input->post('kepulangan');
        $kuota = $this->input->post('kuota');
        $status = $this->input->post('status');

             $data = array(
            'nama_paket' => $nama_paket,
            'harga' => $harga,
            'fasilitas' => $fasilitas,
            'maskapai_penerbangan' => $maskapai_penerbangan,
            'hari' => $hari,
            'keberangkatan' => $keberangkatan,
            'kepulangan' => $kepulangan,
            'kuota' => $kuota,
            'status' => $status
            );
            $this->m_adminLayananUmrah->add($data,'paket');
            redirect('AdminLayananUmrah');

        }
    }


 
    public function edit()
    {
        $this->form_validation->set_rules('id', 'id', 'required');
        $this->form_validation->set_rules('nama_paket', 'nama_paket', 'required');
        if($this->form_validation->run()==FALSE){
            $this->session->set_flashdata('error',"Data Gagal Di Edit");
            redirect('AdminLayananUmrah');
        }else{
            $data=array(
                "nama_paket"=>$_POST['nama_paket'],
                "harga"=>$_POST['harga'],
                "fasilitas"=>$_POST['fasilitas'],
                "maskapai_penerbangan"=>$_POST['maskapai_penerbangan'],
                "hari"=>$_POST['hari'],
                "keberangkatan"=>$_POST['keberangkatan'],
                "kepulangan"=>$_POST['kepulangan'],
                "kuota"=>$_POST['kuota'],
                "status"=>$_POST['status'],

            );
            $this->m_adminLayananUmrah->edit($data,$id);
            redirect('AdminLayananUmrah');
        }
    }
 
    public function hapus($id)
    {
        if($id==""){
            $this->session->set_flashdata('error',"Data Anda Gagal Di Hapus");
            redirect('AdminLayananUmrah');
        }else{
            $this->m_adminLayananUmrah->hapus($data,$id);
            redirect('AdminLayananUmrah');
        }
    }
 
}