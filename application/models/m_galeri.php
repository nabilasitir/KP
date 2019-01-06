<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_galeri extends CI_Model {

	
	public function GetGaleri()
	{
		$galeri = $this->db->query('SELECT * FROM galeri;');
		return $galeri;
	}
}
