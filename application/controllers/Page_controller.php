<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page_controller extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		//periksa session
		if ( ! $this->session->has_userdata('login')) {
			//beri pesan
			$this->session->set_flashdata('pesanError', 'Silahkan login terlebih dahulu!');

			//redirect ke halaman login
			redirect(base_url('login'));
		}
	}

	public function index()
	{
		$this->load->view('home');
	}

	public function master_petugas()
	{
		if ($this->session->userdata('level') !== 'admin') {
			//Tampilkan pesan error
			show_error('Anda tidak berhak mengakses halaman ini.', 403, '403');
		} else {
			$config['base_url'] = base_url('master/petugas');
			$config['total_rows'] = 5;
			$config['per_page'] = 3;
			$config['use_page_numbers'] = TRUE;
			$this->pagination->initialize($config);
			$offset = ($this->uri->segment(3) === NULL ? 0 : ($this->uri->segment(3) - 1) * $config['per_page']);
			$data['rows'] = $this->petugas_model->pagination_petugas($config['per_page'], $offset);
			$this->load->view('master_petugas', $data);
		}
	}

	public function master_siswa()
	{
		$data['rows'] = $this->siswa_model->get_all_siswa();
		$this->halaman('/master_siswa', $data);
	}

}