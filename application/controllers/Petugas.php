<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Petugas extends CI_Controller {

	public function index()
	{
		$data['rows'] = $this->siswa_model->get_all_siswa();
		$this->load->view('petugas_page', $data);
	}

	public function store()
	{
		$this->siswa_model->tambah_siswa($data);
	}

	public function detail($no_induk)
	{
		$data['row'] = $this->siswa_model->get_siswa($no_induk);
		$this->load->view('detail_siswa', $data);
	}

	public function edit($no_induk)
	{
		$data['row'] = $this->siswa_model->get_siswa($no_induk);
		$this->load->view('edit_siswa', $data);
	}

	public function update()
	{
		$no_induk = $this->input->post('no_induk');
		$data['nama_siswa'] = $this->input->post('nama_siswa');
		$data['jenis_kelamin'] = $this->input->post('jenis_kelamin');
		$data['alamat'] = $this->input->post('alamat');

		$this->siswa_model->set_siswa($data, $no_induk);
		redirect(base_url());

	}

	public function delete($no_induk)
	{
		$this->siswa_model->del_siswa($no_induk);
		redirect(base_url());
	}

}
