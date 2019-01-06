<?php 
 
class M_pendaftaranUmrah extends CI_Model{
	public function GetPendaftaranUmrah()
	{
		$testimoni = $this->db->query('SELECT * FROM biodata_jamaah;');
		return TRUE;
	}
	
	function tampil_data(){
		return $this->db->get('biodata_jamaah');
	}
 
	 function add($data){
        $this->db->insert('biodata_jamaah',$data);
        $this->session->set_flashdata('sukses',"Data Berhasil Disimpan");
        return TRUE;
    }

    function tambahFoto($data,$table){
        $this->db->insert($table,$data);
        $this->session->set_flashdata('sukses',"Data Berhasil Ditambahkan");
    }

    public function select_by_id($id) {
        $this->db->select('*');
        $this->db->from('paket');
        $this->db->where('id', $id);

        $data = $this->db->get();

        if ($data->num_rows() == 0) {
            return FALSE;
        } else {
            return $data->result();
        }
    }

}

