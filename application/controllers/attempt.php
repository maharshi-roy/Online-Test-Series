<?php

class Attempt extends CI_Controller {

	public function index() {

		if ($this->session->userdata('test')) {

			$this->ask();
		}

		else {

			$this->load->view('testportal');

		}
	}

	public function initialize() {

		if (!$this->session->userdata('test')) {

			$this->load->model('test_model', 'test');

			if(!$this->test->questions($this->input->post('subject'), $this->input->post('difficulty'))) {

				$this->session->set_flashdata('msg', 'No Questions available for chosen subject or difficulty');

				redirect('attempt');
			}

			else {

				$this->session->set_userdata('test', TRUE);

			}

		}

		if ($this->session->userdata('test')) {

			$this->ask(1);
		}

	}

	public function ask($id = 1) {

		$this->load->model('test_model', 'test');

		$question_array = $this->test->getquestion($id);

		if (!$question_array) {

			$id = 1;

			$question_array = $this->test->getquestion($id);

		}

		foreach($question_array as $question) {

			$this->load->view('testarea', ['question' => $question]);
		}

	}

	public function fill($id) {

		if ($this->session->userdata('test')) {

			$this->load->model('test_model', 'test');

			$this->test->sendanswer($id, $this->input->post('useranswers'));

			$this->ask(++$id);
		}

		else {

			redirect('main/index');
		}

	}

	public function finish() {

		if ($this->session->userdata('test')) {

			$this->load->model('test_model', 'test');

			$score = $this->test->checker();

			$this->session->unset_userdata('test');

			$this->load->view('results', ['score' => $score]);
		}

		else {

			redirect('main');
		}

	}
}

?>