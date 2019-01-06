<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testimoni extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('m_testimoni');
        $this->load->helper('url');
    }

	public function index()
	{
        $data=array(
        "visi"=>$this->db->get('visi')->result(),
        "misi"=>$this->db->get('misi')->result(),
        "umrah"=>$this->db->get('paket')->result(),
        );
		$data['testimoni'] = $this->m_testimoni->GetTestimoni();
        $this->template->load('static','Testimoni', $data);
	}

 	function tambah(){
        $this->load->view('v_input');
    }
 
    function tambah_testimoni(){

        $nama = $this->input->post('nama');
        $email = $this->input->post('email');
        $domisili = $this->input->post('domisili');
        $tanggal = $this->input->post('tanggal');
        $isi = $this->input->post('isi');
        $foto = $_FILES['foto']['name'];

        if ($foto=''){} else{
            $config['upload_path']='./images';
            $config['allowed_types']='jpg|gif|png|jpeg';

            $this->load->library('upload',$config);
            if(!$this->upload->do_upload('foto')){
                echo "download gagal"; die();
            }else{
                $foto=$this->upload->data('file_name');
            }

             $data = array(
            'nama' => $nama,
            'email' => $email,
            'domisili' => $domisili,
            'tanggal' => $tanggal,
            'isi' => $isi,
            'foto' => $foto
            );
            $this->m_testimoni->input_data($data,'testimoni');
            redirect('Testimoni');

        }
 
    }
}