<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa_model extends CI_Model {

/**
 * SELECT * FROM siswa
 * @return array of object
 */
	public function get_all_siswa()
	{
		$query = $this->db->get('siswa');
		return $query->result();
	}

/**
 * SELECT * FROM siswa WHERE no_induk = ? LIMIT 1 OFFSET 0
 * @return object
 */
	public function get_siswa($no_induk)
	{
		$query = $this->db->get_where('siswa', array('no_induk' => $no_induk), 1, 0);
		return $query->row();
	}

/**
 * INSERT ke table siswa
 */
	public function add_siswa($data)
	{
		$this->db->insert('siswa', $data);
	}


/**
 * UPDATE table siswa WHERE no_induk = ?
 */
	public function set_siswa($data, $no_induk)
	{
		$this->db->update('siswa', $data, array('no_induk' => $no_induk));
	}

/**
 * DELETE ke table siswa
 */
	public function del_siswa($no_induk)
	{
		$this->db->delete('siswa', array('no_induk' => $no_induk));
	}

}