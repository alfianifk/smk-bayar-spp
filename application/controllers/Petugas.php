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
		$data['spp'] = $this->M_User->dataSpp();
		$data['pembayaran'] = $this->M_User->dataPembayaranAcc();
		$data['konfirmasi'] = $this->M_User->dataPembayaranTunggu();
		$this->load->view('layout/navbar');
		$this->load->view('layout/sidebar', $data);
		$this->load->view('petugas/dashboard', $data);
		$this->load->view('layout/footer');
	}

	public function accPembayaran($id)
	{
		$this->M_User->accPembayaran($id);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Terima kasih! Data sudah berhasil dikonfirmasi!</div>');
		redirect('petugas');
	}

	public function deletePembayaran($id)
	{
		// $this->db->where('id_pembayaran', $id);
		// $this->db->delete('pembayaran');

		$status = "Gagal Dikonfirmasi";
		$query = "UPDATE `pembayaran` SET `status` = '$status' WHERE `id_pembayaran` = '$id'";
		$this->db->query($query);

		$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data yang anda pilih gagal di Konfirmasi!</div>');
		redirect('petugas');
	}

	public function konfirmasi()
	{
		$data['konfirmasi'] = $this->M_User->dataPembayaranTunggu();
		$this->load->view('layout/navbar');
		$this->load->view('layout/sidebar', $data);
		$this->load->view('petugas/konfirmasi', $data);
		$this->load->view('layout/footer');
	}

	public function riwayatPembayaran()
	{
		$data['pembayaran'] = $this->M_User->pembayaran();
		$data['konfirmasi'] = $this->M_User->dataPembayaranTunggu();
		$this->load->view('layout/navbar');
		$this->load->view('layout/sidebar', $data);
		$this->load->view('petugas/riwayat_pembayaran', $data);
		$this->load->view('layout/footer');
	}
}
