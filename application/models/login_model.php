<?php

class Login_model extends CI_Model {

	public function verify($user, $passwd) {

		$this->db->where(['username' => $user, 'password' => $passwd]);

		$query = $this->db->get('login');

		foreach($query->result() as $result);

		return $result;
	}

	public function search($user) {

		$this->db->where('username', $user);

		$query = $this->db->get('login');

		return ($query->num_rows() == 1);
	}

	public function register($data) {

		$this->db->insert('login', $data);
	}

}

?>