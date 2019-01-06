<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class m_adminLayananUmrah extends CI_Model{
    function __construct(){
        parent::__construct();
    }

    function tampil_data(){
        return $this->db->get('paket');
    }
    function add($data){
        $this->db->insert('paket',$data);
        $this->session->set_flashdata('sukses',"Data Berhasil Disimpan");
        return TRUE;
    }
    function input_data($data,$table){
        $this->db->insert($table,$data);
        $this->session->set_flashdata('sukses',"Data Berhasil Disimpan");
      return TRUE;
    }

    function edit($data, $id){
        $this->db->where('id', $_POST['id']);
        $this->db->update('paket',$data);
        $this->session->set_flashdata('sukses',"Data Berhasil Diedit");
        return TRUE;
    }

    function hapus($data, $id){
        $this->db->where('id', $id);
        $this->db->delete('paket');
        $this->session->set_flashdata('sukses',"Data Berhasil Dihapus");
      return TRUE;
    }
}