<?php 
 
class M_layananHaji extends CI_Model{
	public function GetLayananHaji()
	{
		$testimoni = $this->db->query('SELECT * FROM biodata_jamaah_haji;');
		return TRUE;
	}
	
	function tampil_data(){
		return $this->db->get('biodata_jamaah_haji');
	}
 
	 function add($data){
        $this->db->insert('biodata_jamaah_haji',$data);
        $this->session->set_flashdata('sukses',"Data Berhasil Disimpan");
        return TRUE;
    }

}

