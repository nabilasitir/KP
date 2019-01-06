<?php 
 
class M_adminGaleri extends CI_Model{
	function tampil_data(){
		return $this->db->get('galeri');
	}
 
	function input_data($data,$table){
		$this->db->insert($table,$data);
		$this->session->set_flashdata('sukses',"Data Berhasil Ditambahkan");
	}
	function edit($data, $id_gambar){
        $this->db->where('id_gambar', $_POST['id_gambar']);
        $this->db->update('galeri',$data);
        $this->session->set_flashdata('sukses',"Data Berhasil Diedit");
        return TRUE;
    }

    function hapus($id_gambar){
        $this->db->where('id_gambar', $id_gambar);
        $this->db->delete('galeri');
        $this->session->set_flashdata('sukses',"Data Berhasil Dihapus");
      return TRUE;
    }
}

