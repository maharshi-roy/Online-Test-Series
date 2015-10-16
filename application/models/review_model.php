<?php

class Review_Model extends CI_Model {

	public function fetch() {

		$this->db->select('id');

		$query = $this->db->get('temporary');

		return $query->result_array();
	}

	public function getquestion($id) {

		$this->db->where('id', $id);

		$query = $this->db->get('temporary');

		return $query->result_array();
	}
}