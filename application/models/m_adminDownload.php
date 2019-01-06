<?php 
 
class M_adminDownload extends CI_Model{
	 function __construct(){
        parent::__construct();
    }

    function tampil_data(){
        return $this->db->get('download');
    }
    function add($data){
        $this->db->insert('download',$data);
        $this->session->set_flashdata('sukses',"Data Berhasil Disimpan");
        return TRUE;
    }
    function edit($data, $id){
        $this->db->where('id', $_POST['id']);
        $this->db->update('download',$data);
        $this->session->set_flashdata('sukses',"Data Berhasil Diedit");
        return TRUE;
    }

    function hapus($data, $id){
        $this->db->where('id', $id);
        $this->db->delete('download');
        $this->session->set_flashdata('sukses',"Data Berhasil Dihapus");
      return TRUE;
    }
}