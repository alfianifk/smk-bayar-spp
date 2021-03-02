<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
	{
        parent::__construct();
        $this->load->model('M_User');
    }


	public function index()
	{
		$validation = $this->form_validation;

        $validation->set_rules('username', 'Username', 'required');
        $validation->set_rules('password', 'Password', 'required');

        $validation->set_message('required', '<div class="small text-danger"><i class="fa fa-exclamation-circle"></i> {field} tidak boleh kosong!</div>');

        if ($validation->run() == TRUE) {
           $this->M_User->login();
        } else {
            $this->load->view('auth/login');
        }
	}

    public function logout()
   {
       //membersihkan SESSION
       $this->session->unset_userdata('username');
       $this->session->unset_userdata('role');
       $this->session->unset_userdata('level');
       $this->session->unset_userdata('nama');
       $this->session->unset_userdata('nisn');
       $this->session->unset_userdata('nis');
       $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Anda berhasil logout!</div>');
       redirect('auth');
   }
}
