<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Petugas_model extends CI_Model {

/**
 * SELECT * FROM petugas WHERE nama_petugas = ? LIMIT 1 OFFSET 0
 * @return object
 */
	public function get_petugas($nama_petugas)
	{
		$query = $this->db->get_where('petugas', array('nama_petugas' => $nama_petugas), 1, 0);
		return $query->row();
	}

	public function pagination_petugas($limit, $offset)
	{
		$this->db->select('id_petugas, nama_petugas, jenis_kelamin, telp, level');
		$this->db->from('petugas');
		$this->db->limit($limit, $offset);
		$query = $this->db->get();
		return $query->result();
	}

}