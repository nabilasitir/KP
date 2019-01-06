<?php 
 
class M_adminCustomerHaji extends CI_Model{
	function tampil_data(){
		return $this->db->get('biodata_jamaah_haji');
	}
 
	function input_data($data,$table){
		$this->db->insert($table,$data);
		$this->session->set_flashdata('sukses',"Data Berhasil Ditambahkan");
	}
	
    function edit_data($data, $id_jamaah){
        $this->db->where('id_jamaah', $_POST['id_jamaah']);
        $this->db->update('biodata_jamaah_haji',$data);
        $this->session->set_flashdata('sukses',"Data Berhasil Diedit");
      return TRUE;
    }
    
    function hapus($id_jamaah){
        $this->db->where('id_jamaah', $id_jamaah);
        $this->db->delete('biodata_jamaah_haji');
        $this->session->set_flashdata('sukses',"Data Berhasil Dihapus");
      return TRUE;
    }

    function add($data){
        $this->db->insert('biodata_jamaah_haji',$data);
        $this->session->set_flashdata('sukses',"Data Berhasil Disimpan");
        return TRUE;
    }
}

 