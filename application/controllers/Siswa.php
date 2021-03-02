<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {

	public function __construct()
	{
        parent::__construct();
		if ($this->session->userdata('role') != 0)
		{
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Anda harus masuk dulu!</div>');
			redirect('auth');
		} else {
		$data['title'] = 'Tagihan SPP-ku';
        $this->load->model('M_User');
		$this->load->view('layout/header', $data);
		}
    }


	public function index()
	{
		$this->load->view('layout/navbar');
		$this->load->view('layout/sidebar');
		$this->load->view('siswa/dashboard');
		$this->load->view('layout/footer');
	}
}
