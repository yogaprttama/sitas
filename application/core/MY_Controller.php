<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//$this->load->library('form_validation');
	}

	public function halaman($view, $data)
	{
		if ($this->session->has_userdata('login') && $this->session->has_userdata('level')) {
			$nama_folder =  $this->session->userdata('level');
			$this->load->view($nama_folder.$view, $data);
		} else {
			redirect(base_url('login'));
		}
	}

	public function halaman_utama()
	{
		if ($this->session->has_userdata('login') && $this->session->has_userdata('level'))
		{
			switch ($this->session->has_userdata('level')) {
				case 'admin':
					//view admin
					break;

				case 'petugas':
					$this->load->view('petugas_page', $data);
					break;

				default:
					echo "Hallo user";
			}
		}
	}

	/**
	* Periksa form yang user input
	*
	* @return bool
	*/
	public function periksa_form()
	{
		//Membuat rules
		$yoga_login_rules = array(
			array(
				'field' => 'userid',
				'label' => 'User ID',
				'rules' => 'required',
				'errors' => array(
					'required' => '*User ID kosong'
				)
			),
			array(
				'field' => 'password',
				'label' => 'Password',
				'rules' => 'required',
				'errors' => array(
					'required' => '*Password kosong'
				)
			)
		);

		//Pakai rules yg telah dibuat diatas
		$this->form_validation->set_rules($yoga_login_rules);

		/**
		 * Beri awalan dan akhiran pada pesan error
		 * @link https://www.codeigniter.com/userguide3/libraries/form_validation.html
		 */
		$this->form_validation->set_error_delimiters('<span class="error">', '</span>');		

		/**
		 * Mulai validasi
		 *
		 * @link https://www.codeigniter.com/userguide3/libraries/form_validation.html
		 * @return bool
		 */
		if ($this->form_validation->run() === FALSE) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	/**
	* Validasi semua user yang login
	*
	* @return bool
	*/
	public function validasi_user($user, $password)
	{
		//Cari petugas berdasarkan username
		$row = $this->petugas_model->get_petugas($user);

		//Periksa password dan hash apakah ada kecocokan?
		if ($row !== NULL && password_verify($password, $row->kata_sandi)) {		
			
			//Isi session
			$this->session->set_userdata(
				array(
					'login' => TRUE,
					'user' => $user,
					'level' => $row->level
				)
			);

			//Beri pesan berhasil login
			$this->session->set_flashdata('loginSukses', "Selamat Datang {$user}!");
			return TRUE;

		} else {

			//Beri pesan gagal login
			$this->session->set_flashdata('pesanError', 'User & Password tidak ditemukan');
			return FALSE;

		}

	}

}