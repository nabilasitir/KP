<?php 
 
class M_adminUpload extends CI_Model{
	function tampil_data(){
		return $this->db->get('download');
	}
 
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
}

