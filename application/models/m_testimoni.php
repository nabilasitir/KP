<?php 
 
class M_testimoni extends CI_Model{
	public function GetTestimoni()
	{
		$testimoni = $this->db->query('SELECT * FROM testimoni order by id desc;');
		return $testimoni;
	}
	
	function tampil_data(){
		return $this->db->get('testimoni');
	}
 
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	function hapus($data, $id){
        $this->db->where('id', $id);
        $this->db->delete('testimoni');
        $this->session->set_flashdata('sukses',"Data Berhasil Dihapus");
      return TRUE;
    }

}

