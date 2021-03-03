<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Petugas extends CI_Controller {

	public function __construct()
	{
        parent::__construct();
		if ($this->session->userdata('role') != 1)
		{
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Anda harus masuk dulu!</div>');
			redirect('auth');
		} else {
			$data['title'] = 'Pembayaran';
			$this->load->model('M_User');
			$this->load->view('layout/header', $data);

		}
    }


	//VIEW PETUGAS
	public function index()
	{
		$this->load->view('layout/navbar');
		$this->load->view('layout/sidebar');
		$this->load->view('petugas/dashboard');
		$this->load->view('layout/footer');
	}
}
