<?php

class Main extends CI_Controller {

	public function index() {

		if ($this->session->userdata('test')) {

			redirect('attempt/index');
		}

		else if($this->session->userdata('user')) {

			$this->load->view('profile');
		}

		else {

			$this->load->view('enter');
		}
	}

	public function login() {

		$user = $this->input->post('user');
		$passwd = $this->input->post('passwd');

		$this->load->model('login_model', 'login');

		$value = $this->login->verify($user, $passwd);

		if ($value) {

			$data = array(

				'user' => $user,
				'name' => $value->name,
				'type' => $value->type

				);

			$this->session->set_userdata($data);
		}

		redirect('main');

	}

	public function logout() {

		$this->session->sess_destroy();

		redirect('main');
	}

	public function contribute() {

		redirect('contribute/index');
	}

	public function attempt() {

		redirect('attempt/index');
	}

	public function register() {

		$user = $this->input->post('user');

		$this->form_validation->set_rules('user', 'Username', 'callback_search');

		$this->form_validation->set_rules('passwd', 'Password', 'required');

		$this->form_validation->set_rules('confrm', 'Confirm Password', 'matches[passwd]');

		$this->form_validation->set_message('matches', 'Passwords don\'t match');

		if($this->form_validation->run()) {

			$this->load->model('login_model', 'register');

			$data = array(
				
				'username' => $this->input->post('user'), 
				'password' => $this->input->post('passwd'), 
				'name' => $this->input->post('name'), 
				'type' => $this->input->post('type')

				);

			$this->register->register($data);

			$data = array(

				'user' => $this->input->post('user'),
				'name' => $this->input->post('name'),
				'type' => $this->input->post('type')

				);

			$this->session->set_userdata($data);

			redirect('main');
		}

		else {

			$this->load->view('enter');
		}
	}

	public function search($user) {

		$this->load->model('login_model', 'register');

		if($this->register->search($user)) {

			$this->form_validation->set_message('search', 'User with username already registered');
			
			return FALSE;		

		}

		else {

			return TRUE;
		}

	}
}

?>