<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		//periksa session
		if ($this->session->has_userdata('login')) {
			//redirect ke halaman home
			redirect(base_url('home'));
		}
	}

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function login()
	{
		/**
		 * Periksa form input
		 *
		 * @return bool
		 */
		if ($this->periksa_form()) {
			//Ulagi lagi bila ada yg belum diisi pakde
			$this->load->view('login_page');
		} else {
			//Ambil data dari form
			$user = $this->input->post('userid');
			$password = $this->input->post('password');

			/**
			 * Validasi user
			 *
			 * @return bool
			 */
			if ($this->validasi_user($user, $password)) {
				//Tampilkan halaman user
				redirect(base_url('home'));
			} else {
				//Ulagi lagi bila ada yg belum diisi pakde
				$this->load->view('login_page');
			}
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url());
	}

}
