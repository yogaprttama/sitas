<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------
|  Login Controller
| -------------------------------------------------------------------
| 
|  Controller ini  bertugas untuk menghandle hak dan akses user
|  sebelum masuk kedalam SITAS (Sistem Informasi Tabungan Siswa)
|
*/
class Login_controller extends MY_Controller
{

	/**
	 * Halaman login
	 */
	public function index()
	{
		$this->load->view('login_page');
	}

	/**
	 * Periksa user
	 * @return bool
	 */
	public function login()
	{
		//Ambil data dari form
		$user = $this->input->post('userid');
		$password = $this->input->post('password');

		//Periksa user
		$result = $this->user_model->get_user($user);

		//Validasi form
		if ($this->periksa_form()) {
			$this->load->view('login_page');
		} else {
			if ($result !== NULL && password_verify($password, $result->password)) {
				//Isi session
				$this->session->set_userdata(
					array(
						'login' => TRUE,
						'user' => ($result->level != 'siswa' ? $result->nama_petugas : $result->nama_siswa),
						'level' => $result->level
					)
				);

				//Beri pesan berhasil login
				$this->session->set_flashdata('loginSukses', 'Selamat Datang');
				redirect(base_url('home'));
			} else {
				//Beri pesan gagal login
				$this->session->set_flashdata('pesanError', 'Mohon periksa kembali');
				$this->load->view('login_page');
			}
		}

	}

	/**
	 * Hapus session user
	 * @return void
	 */
	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}

}