<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrator extends CI_Controller {

	public function __construct()
	{
        parent::__construct();

		if ($this->session->userdata('role') != 2)
		{
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Akses dilarang. Anda harus masuk dulu!</div>');
			redirect('auth');
		} else {
		$data['title'] = 'Administrator';
        $this->load->model('M_User');
		$this->load->view('layout/header', $data);
		}
    }


	public function index()
	{
		$this->load->view('layout/navbar');
		$this->load->view('layout/sidebar');
		$this->load->view('admin/dashboard');
		$this->load->view('layout/footer');
	}

	public function siswa()
	{
		$data['siswa'] = $this->M_User->dataSiswa();
		$this->load->view('layout/navbar');
		$this->load->view('layout/sidebar');
		$this->load->view('admin/siswa', $data);
		$this->load->view('layout/footer');
	}

	public function tambahSiswa()
	{
		$data['siswa'] = $this->M_User->dataSiswa();
		$this->load->view('layout/navbar');
		$this->load->view('layout/sidebar');
		$this->load->view('admin/tambah_siswa', $data);
		$this->load->view('layout/footer');
	}

	public function petugas()
	{
		$data['petugas'] = $this->M_User->dataPetugas();
		$this->load->view('layout/navbar');
		$this->load->view('layout/sidebar');
		$this->load->view('admin/petugas', $data);
		$this->load->view('layout/footer');
	}
}
