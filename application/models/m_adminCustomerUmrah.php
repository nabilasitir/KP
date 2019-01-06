<?php 
 
class M_adminCustomerUmrah extends CI_Model{
	function tampil_data(){
		return $this->db->get('biodata_jamaah');
	}
 
	function input_data($data,$table){
		$this->db->insert($table,$data);
		$this->session->set_flashdata('sukses',"Data Berhasil Ditambahkan");
	}
	function edit($data, $id_jamaah){
        $this->db->where('id_jamaah', $_POST['id_jamaah']);
        $this->db->update('biodata_jamaah',$data);
        $this->session->set_flashdata('sukses',"Data Berhasil Diedit");
        return TRUE;
    }

    function hapus($id_jamaah){
        $this->db->where('id_jamaah', $id_jamaah);
        $this->db->delete('biodata_jamaah');
        $this->session->set_flashdata('sukses',"Data Berhasil Dihapus");
      return TRUE;
    }


    function add($data){
        $this->db->insert('biodata_jamaah',$data);
        $this->session->set_flashdata('sukses',"Data Berhasil Disimpan");
        return TRUE;
    }
}

