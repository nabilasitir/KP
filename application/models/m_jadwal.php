<?php 
 
class M_jadwal extends CI_Model{
	public function duatable() {
         $this->db->select('*');
         $this->db->from('paket');
         $this->db->join('booked_umrah','paket.id=booked_umrah.id_paket');
         $query = $this->db->get();
         return $query->result();
    }

}

