<?php 
 
class M_adminVideo extends CI_Model{
	 function __construct(){
        parent::__construct();
    }

    function tampil_data(){
        return $this->db->get('video');
    }
    function add($data){
        $this->db->insert('video',$data);
        $this->session->set_flashdata('sukses',"Data Berhasil Disimpan");
        return TRUE;
    }
    function edit($data, $id){
        $this->db->where('id', $_POST['id']);
        $this->db->update('video',$data);
        $this->session->set_flashdata('sukses',"Data Berhasil Diedit");
        return TRUE;
    }

    function hapus($data, $id){
        $this->db->where('id', $id);
        $this->db->delete('video');
        $this->session->set_flashdata('sukses',"Data Berhasil Dihapus");
      return TRUE;
    }
}