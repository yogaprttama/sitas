<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

	/**
 	 * SELECT * FROM siswa WHERE nis = ? LIMIT 1 OFFSET 0
 	 * @return object
 	 */
	public function get_siswa($nis)
	{
		$query = $this->db->get_where('siswa', array('nis' => $nis), 1, 0);
		return $query;
	}

	/**
 	 * SELECT * FROM petugas WHERE nama_petugas = ? LIMIT 1 OFFSET 0
 	 * @return object
 	 */
	public function get_user($user)
	{
		$petugas = $this->db->get_where('petugas', array('username' => $user), 1, 0);

		if ($petugas->row() != NULL) {
			$result = $petugas;
		} else {			
			$result = $this->get_siswa($user);
		}
		
		return $result->row();
	}

}