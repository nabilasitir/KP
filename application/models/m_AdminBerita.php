<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_AdminBerita extends CI_Model {

	
	public function getBerita()
	{
		$berita= $this->db->query('insert berita value')
		$this->template->load('static','index');
	}
}
