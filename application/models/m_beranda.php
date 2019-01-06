<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_beranda extends CI_Model {

	
	public function GetAgenda()
	{
		$agenda = $this->db->query('SELECT * FROM agenda order by tanggal desc;');
		return $agenda;
	}

	public function GetGaleri()
	{
		$galeri = $this->db->query('SELECT * FROM galeri limit 5 ;');
		return $galeri;
	}

	public function GetBerita()
	{
		$berita = $this->db->query('SELECT * FROM berita order by posted desc;');
		return $berita;
	}

	public function select_by_id($id) {
        $this->db->select('*');
        $this->db->from('berita');
        $this->db->where('id', $id);

        $data = $this->db->get();

        if ($data->num_rows() == 0) {
            return FALSE;
        } else {
            return $data->result();
        }
    }
}
