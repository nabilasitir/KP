<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_download extends CI_Model {

	
	public function GetDownload()
	{
		$download = $this->db->query('SELECT * FROM download;');
		return $download;
	}
}
