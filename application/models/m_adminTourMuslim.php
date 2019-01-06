<?php 
 
class M_adminTourMuslim extends CI_Model{
	function tampil_data(){
		return $this->db->get('tour_muslim');
	}
 
	function input_data($data,$table){
		$this->db->insert($table,$data);
		$this->session->set_flashdata('sukses',"Data Berhasil Disimpan");
	  return TRUE;
	}

	function edit_data($data,$id){
		$this->db->where('id', $_POST['id']);
        $this->db->update('tour_muslim',$data);
        $this->session->set_flashdata('sukses',"Data Berhasil Diedit");
      return TRUE;
    }

    function hapus_data($id){
    	 $this->db->where('id', $id);
         $this->db->delete('tour_muslim');
         $this->session->set_flashdata('sukses',"Data Berhasil Dihapus");
    }
}

