<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KontakKami extends CI_Controller {


	 public function __construct()
        {
                parent::__construct();
                $this->load->model('m_kontakKami');
                $this->load->helper('url');
        }
	public function index()
	{	
	        $this->load->library('googlemaps');
                $config=array();
                $config['center']="37.4419, -122.1419";
                $config['zoom']=17;
                $config['map_height']="400px";
                $this->googlemaps->initialize($config);
                $marker=array();
                $marker['position']="37.4419, -122.1419";
                $this->googlemaps->add_marker($marker);
                $data['map']=$this->googlemaps->create_map();
		$this->template->load('static','kontakKami', $data);
	}
        public function add()
        {
                $this->form_validation->set_rules('nama', 'nama', 'required');
                if($this->form_validation->run()==FALSE){
                    $this->session->set_flashdata('error',"Data Gagal Di Tambahkan");
                    redirect('KontakKami');
                }else{
                $nama = $this->input->post('nama');
                $email = $this->input->post('email');
                $no_tlp = $this->input->post('no_tlp');
                $pesan = $this->input->post('pesan');
              
                     $data = array(
                    'nama' => $nama,
                    'email' => $email,
                    'no_tlp' => $no_tlp,
                    'pesan' => $pesan
                    );
                    $this->m_kontakKami->input_data($data,'kontakKami');
                    redirect('kontakKami');

                }
        }

}
