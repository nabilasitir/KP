<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PendaftaranUmrah extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('m_pendaftaranUmrah');
        $this->load->helper('url');
    }
	
	public function index($id=0)
	{

		$data=array(
		"visi"=>$this->db->get('visi')->result(),
        "misi"=>$this->db->get('misi')->result(),
        "umrah"=>$this->db->get('paket')->result(),
        "paket"=>$this->db->get('paket')->result(),
        );
		$this->template->load('static','PendaftaranUmrah',$data);
	}

    public function tampil($id){
        
        $data=array(
        "paket"=>$this->m_pendaftaranUmrah->select_by_id($id),
        "content"=>'Tampil_Modal',
        "visi"=>$this->db->get('visi')->result(),
        "misi"=>$this->db->get('misi')->result(),
        "umrah"=>$this->db->get('paket')->result(),

        );

        $this->template->load('static','PendaftaranUmrah',$data);
    }

	 function add(){
        $this->form_validation->set_rules('nama', 'nama', 'required');
        if($this->form_validation->run()==FALSE){
            $this->session->set_flashdata('error',"Data Gagal Di Tambahkan");
            redirect('pendaftaranUmrah');
        }else{
        $id = $this->input->post('id_paket');
        $nomor_ktp = $this->input->post('nomor_ktp');
        $nomor_passport = $this->input->post('nomor_passport');
        $nama = $this->input->post('nama');
        $tempat_lahir = $this->input->post('tempat_lahir');
        $tgl_lahir = $this->input->post('tgl_lahir');
        $jenis_kelamin = $this->input->post('jenis_kelamin');
        $umur = $this->input->post('umur');
        $kewarganegaraan = $this->input->post('kewarganegaraan');
        $alamat = $this->input->post('alamat');
        $no_tlp = $this->input->post('no_tlp');
        $email = $this->input->post('email');
        $pendidikan = $this->input->post('pendidikan');
        $pekerjaan = $this->input->post('pekerjaan');
        $pengalaman = $this->input->post('pengalaman');

             $data = array(
            'id_paket' => $id,    
            'nomor_ktp' => $nomor_ktp,
            'nomor_passport' => $nomor_passport,
            'nama' => $nama,
            'tempat_lahir' => $tempat_lahir,
            'tgl_lahir' => $tgl_lahir,
            'jenis_kelamin' => $jenis_kelamin,
            'umur' => $umur,
            'kewarganegaraan' => $kewarganegaraan,
            'alamat' => $alamat,
            'no_tlp' => $no_tlp,
            'email' => $email,
            'pendidikan' => $pendidikan,
            'pekerjaan' => $pekerjaan,
            'pengalaman' => $pengalaman
            );
            $this->m_pendaftaranUmrah->add($data,'biodata_jamaah');
            redirect('pendaftaranUmrah');
        }

    }

    public function detailPaket($id){
            $paket                   = $this->m_pendaftaranUmrah->select_by_id($id);
            $data['paket']           = $paket;
            $data['judul']                  = "Detail Paket";
            $this->template->views('peserta/detail_peserta', $data);
            redirect("login");
    }

    function tambahFoto(){

        $gambar = $_FILES['foto']['name'];

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
            'id_peserta' => $id,
            'foto' => $foto
            );
            $this->m_pendaftaranUmrah->tambahFoto($data,'kelengkapanpeserta');
            redirect('pendaftaranUmrah');

        }
 
    }
}
