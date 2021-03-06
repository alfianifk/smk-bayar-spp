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
		$data['spp'] = $this->M_User->dataSpp();
		$data['pembayaran'] = $this->M_User->pembayaranByNis();
		$this->load->view('layout/navbar');
		$this->load->view('layout/sidebar');
		$this->load->view('siswa/dashboard', $data);
		$this->load->view('layout/footer');
	}

	public function tagihan()
	{
		$data['spp'] = $this->M_User->dataSpp();
		$this->load->view('layout/navbar');
		$this->load->view('layout/sidebar');
		$this->load->view('siswa/tagihan', $data);
		$this->load->view('layout/footer');
	}

	public function rincian($id)
	{
		$data['rincian_spp'] = $this->M_User->getSppById($id);
		$data['pembayaran'] = $this->M_User->getPembayaran($id);
		$this->load->view('layout/navbar');
		$this->load->view('layout/sidebar');
		$this->load->view('siswa/rincian_spp', $data);
		$this->load->view('layout/footer');

	}

	public function bayar($id)
	{

		$validation = $this->form_validation;

		$validation->set_rules('nominal', 'Nominal', 'required');

		$validation->set_message('required', '<div class="small text-danger"><i class="fa fa-exclamation-circle"></i> {field} tidak boleh kosong!</div>');

		if($validation->run() == TRUE)
		{
			$this->M_User->tambahPembayaran();
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Terima kasih sudah melakukan pembayaran, Mohon tunggu untuk konfirmasi dari Petugas!</div>');
			redirect('siswa/tagihan');
		} else {
		$data['bayar_spp'] = $this->M_User->getSppById($id);
		$this->load->view('layout/navbar');
		$this->load->view('layout/sidebar');
		$this->load->view('siswa/konfirmasi_pembayaran', $data);
		$this->load->view('layout/footer');
		}
	}

	public function	riwayatPembayaran()
	{
		$data['pembayaran'] = $this->M_User->pembayaranByNis();
		$this->load->view('layout/navbar');
		$this->load->view('layout/sidebar', $data);
		$this->load->view('siswa/riwayat_pembayaran', $data);
		$this->load->view('layout/footer');
	}
}
