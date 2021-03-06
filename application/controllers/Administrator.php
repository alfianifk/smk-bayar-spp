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
		$data['siswa'] = $this->M_User->dataSiswa();
		$data['petugas'] = $this->M_User->dataPetugas();
		$data['spp'] = $this->M_User->dataSpp();
		$data['konfirmasi'] = $this->M_User->dataPembayaranTunggu();
		$this->load->view('layout/navbar');
		$this->load->view('layout/sidebar');
		$this->load->view('admin/dashboard', $data);
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
		$validation = $this->form_validation;
		$validation->set_rules('nisn', 'Nisn', 'required');
		$validation->set_rules('nis', 'Nis', 'required');
		$validation->set_rules('nama', 'Nama', 'required');
		$validation->set_rules('telp', 'Telp', 'required');
		$validation->set_rules('id_kelas', 'Id_kelas', 'required');
		$validation->set_rules('alamat', 'Alamat', 'required');

		$validation->set_message('required', '<div class="small text-danger"><i class="fa fa-exclamation-circle"></i> {field} tidak boleh kosong!</div>');

		if($validation->run() == TRUE)
		{
			$this->M_User->tambahSiswa();
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Terima kasih! Data sudah tersimpan</div>');
			redirect('administrator/siswa');
		} else {
		$data['siswa'] = $this->M_User->dataSiswa();
		$this->load->view('layout/navbar');
		$this->load->view('layout/sidebar');
		$this->load->view('admin/tambah_siswa', $data);
		$this->load->view('layout/footer');
		}
	}

	public function editSiswa($id)
	{

		$validation = $this->form_validation;
		$validation->set_rules('nisn', 'Nisn', 'required');
		$validation->set_rules('nis', 'Nis', 'required');
		$validation->set_rules('nama', 'Nama', 'required');
		$validation->set_rules('telp', 'Telp', 'required');
		$validation->set_rules('id_kelas', 'Id_kelas', 'required');
		$validation->set_rules('alamat', 'Alamat', 'required');

		$validation->set_message('required', '<div class="small text-danger"><i class="fa fa-exclamation-circle"></i> {field} tidak boleh kosong!</div>');

		if($validation->run() == TRUE)
		{
			$this->M_User->editSiswa($id);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Terima kasih! Data sudah berhasil diubah</div>');
			redirect('administrator/siswa');
		} else {
		$data['siswa'] = $this->M_User->getSiswaByNisn($id);
		$this->load->view('layout/navbar');
		$this->load->view('layout/sidebar');
		$this->load->view('admin/edit_siswa', $data);
		$this->load->view('layout/footer');
		}
	}

	public function deleteSiswa($id)
	{
		$this->db->where('nisn', $id);
		$this->db->delete('siswa');

		$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data yang anda pilih telah dihapus!</div>');
		redirect('administrator/siswa');

		return;
	}

	public function petugas()
	{
		$data['petugas'] = $this->M_User->dataPetugas();
		$this->load->view('layout/navbar');
		$this->load->view('layout/sidebar');
		$this->load->view('admin/petugas', $data);
		$this->load->view('layout/footer');
	}

	public function tambahPetugas()
	{
		$validation = $this->form_validation;
		$validation->set_rules('username', 'Username', 'required');
		$validation->set_rules('password', 'Password', 'required');
		$validation->set_rules('nama', 'Nama', 'required');
		$validation->set_rules('level', 'Level', 'required');
		$validation->set_rules('role', 'Role', 'required');

		$validation->set_message('required', '<div class="small text-danger"><i class="fa fa-exclamation-circle"></i> {field} tidak boleh kosong!</div>');

		if($validation->run() == TRUE)
		{
			$this->M_User->tambahPetugas();
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Terima kasih! Data sudah tersimpan</div>');
			redirect('administrator/petugas');
		} else {
		$data['petugas'] = $this->M_User->dataPetugas();
		$this->load->view('layout/navbar');
		$this->load->view('layout/sidebar');
		$this->load->view('admin/tambah_petugas', $data);
		$this->load->view('layout/footer');
		}
	}

	public function editPetugas($id)
	{
		$validation = $this->form_validation;
		$validation->set_rules('username', 'Username', 'required');
		$validation->set_rules('password', 'Password', 'trim');
		$validation->set_rules('nama', 'Nama', 'required');
		$validation->set_rules('level', 'Level', 'required');
		$validation->set_rules('role', 'Role', 'required');

		$validation->set_message('required', '<div class="small text-danger"><i class="fa fa-exclamation-circle"></i> {field} tidak boleh kosong!</div>');

		if($validation->run() == TRUE)
		{
			$this->M_User->editPetugas($id);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Terima kasih! Data sudah berhasil diubah</div>');
			redirect('administrator/petugas');
		} else {
		$data['petugas'] = $this->M_User->getPetugasById($id);
		$this->load->view('layout/navbar');
		$this->load->view('layout/sidebar');
		$this->load->view('admin/edit_petugas', $data);
		$this->load->view('layout/footer');
		}
	}

	public function deletePetugas($id)
	{
		$this->db->where('id_petugas', $id);
		$this->db->delete('petugas');

		$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data yang anda pilih telah dihapus!</div>');
		redirect('administrator/petugas');

		return;
	}

	public function spp()
	{
		$data['spp'] = $this->M_User->dataSpp();
		$this->load->view('layout/navbar');
		$this->load->view('layout/sidebar');
		$this->load->view('admin/spp', $data);
		$this->load->view('layout/footer');
	}

	public function tambahSpp()
	{

		$validation = $this->form_validation;

		$validation->set_rules('nominal', 'Nominal', 'required');

		$validation->set_message('required', '<div class="small text-danger"><i class="fa fa-exclamation-circle"></i> {field} tidak boleh kosong!</div>');

		if($validation->run() == TRUE)
		{
			$this->M_User->tambahSpp();
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Terima kasih! Data sudah berhasil diubah</div>');
			redirect('administrator/spp');
		} else {
		$this->load->view('layout/navbar');
		$this->load->view('layout/sidebar');
		$this->load->view('admin/tambah_spp');
		$this->load->view('layout/footer');
		}
	}

	public function deleteSpp($id)
	{
		$this->db->where('id_spp', $id);
		$this->db->delete('spp');

		$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data yang anda pilih telah dihapus!</div>');
		redirect('administrator/spp');

		return;
	}

	public function editSpp($id)
	{
		$validation = $this->form_validation;

		$validation->set_rules('nominal', 'Nominal', 'required');

		$validation->set_message('required', '<div class="small text-danger"><i class="fa fa-exclamation-circle"></i> {field} tidak boleh kosong!</div>');

		if($validation->run() == TRUE)
		{
			$this->M_User->editSpp($id);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Terima kasih! Data sudah berhasil diubah</div>');
			redirect('administrator/spp');
		} else {
		$data['spp'] = $this->M_User->getSppById($id);
		$this->load->view('layout/navbar');
		$this->load->view('layout/sidebar');
		$this->load->view('admin/edit_spp', $data);
		$this->load->view('layout/footer');
		}
	}

}
