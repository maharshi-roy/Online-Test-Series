<?php

class Review extends CI_Controller {

	public function index() {

		$this->load->model('review_model', 'revieew');

		$data = $this->review->fetch();

		$this->session->set_userdata('qlist', $data);

		$this->send($data[0]->id);
	} 

	public function send($id) {

		$this->load->model('review_model', 'review');

		$data['question'] = $this->review->getquestion($id);

		$this->load->view('review', $data);

	}

	public function recieve($id) {

		if($this->input->post())




	}
}