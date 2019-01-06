<?php 
 
class M_adminVisiMisi extends CI_Model{
	 function __construct(){
        parent::__construct();
    }

    function addv($data){
        $this->db->insert('visi',$data);
        $this->session->set_flashdata('sukses',"Data Berhasil Disimpan");
        return TRUE;
    }

    function addm($data){
        $this->db->insert('misi',$data);
        $this->session->set_flashdata('sukses',"Data Berhasil Disimpan");
        return TRUE;
    }
    function editv($data, $id){
        $this->db->where('id', $_POST['id']);
        $this->db->update('visi',$data);
        $this->session->set_flashdata('sukses',"Data Berhasil Diedit");
        return TRUE;
    }

    function editm($data, $id){
        $this->db->where('id', $_POST['id']);
        $this->db->update('misi',$data);
        $this->session->set_flashdata('sukses',"Data Berhasil Diedit");
        return TRUE;
    }

    function hapusv($data, $id){
        $this->db->where('id', $id);
        $this->db->delete('visi');
        $this->session->set_flashdata('sukses',"Data Berhasil Dihapus");
      return TRUE;
    }

    function hapusm($data, $id){
        $this->db->where('id', $id);
        $this->db->delete('misi');
        $this->session->set_flashdata('sukses',"Data Berhasil Dihapus");
      return TRUE;
    }
}