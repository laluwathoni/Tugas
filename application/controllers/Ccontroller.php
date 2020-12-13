<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ccontroller extends CI_Controller {


	public function __construct()
    {
        parent::__construct();
        $this->load->model('CModel');
    }
	
	public function index()
	{
		$data['isi']= $this->CModel->getall();
		
		$this->load->view('tampil', $data);
       
	}
	public function awal()
	{
		$this->load->view('awal');
	}
	public	function tambah()
	{
		$this->load->view('tambah');
	}

	public function proses_tambah()
	{
		$jurusan    = $this->input->post('txtjurusan');
        $kelas      = $this->input->post('txtkelas');
        $isi        = $this->input->post('txtisi');

        $data       = array(
            'kolom_jurusan'   => $jurusan,
            'kolom_kelas'     => $kelas,
            'kolom_isi'       => $isi
        );

		$this->CModel->add($data);
        redirect('Ccontroller/index');
	}
}
