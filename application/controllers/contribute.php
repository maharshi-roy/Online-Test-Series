<?php

class Contribute extends CI_Controller {

	public function index() {

		$this->load->view('contriportal');
	}

	public function subject() {

		$this->session->set_userdata('subject', $this->input->post('subject'));

		redirect('contribute');

	}

	public function addquestion() {

		$this->load->model('test_model', 'test');

		if($this->input->post('answers')) {

			$data = array(

				'subject' => $this->session->userdata('subject'),
				'statement' => $this->input->post('statement'),
				'options' => $this->input->post('options'),
				'answers' => $this->input->post('answers'),
				'difficulty' => $this->input->post('difficulty')

				);

			$this->test->add($data);

			$this->index();
		}

		else {

			$this->session->set_flashdata('msg', 'Provide the appropriate answers for the question');

			redirect('contribute/index');
		}
			
	}

	public function finish() {

		$this->session->unset_userdata('subject');

		redirect('main');
	}

	public function change() {

		$this->session->unset_userdata('subject');

		redirect('contribute');
	}
}

?>