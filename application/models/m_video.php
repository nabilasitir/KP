<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_video extends CI_Model {

	
	public function GetVideo()
	{
		$video = $this->db->query('SELECT * FROM video;');
		return $video;
	}
}
