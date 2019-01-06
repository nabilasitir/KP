<?php 
 
class M_kontakKami extends CI_Model{
	function tampil_data(){
		return $this->db->get('kontakKami');
	}
 
	 function input_data($data){
        $this->db->insert('kontakKami',$data);
		$this->session->set_flashdata('sukses',"Data Berhasil Disimpan");
	  return TRUE;
	}

	function edit_data($data,$id){
		$this->db->where('id', $_POST['id']);
        $this->db->update('kontakKami',$data);
        $this->session->set_flashdata('sukses',"Data Berhasil Diedit");
      return TRUE;
    }

    function hapus_data($id){
    	 $this->db->where('id', $id);
         $this->db->delete('kontakKami');
         $this->session->set_flashdata('sukses',"Data Berhasil Dihapus");
    }
}

