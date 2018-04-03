<?php

Class User extends CI_Controller {

	public function __construct() {
		parent::__construct();
		//$this->load->model('user_model');
	}

	// Show login page
	public function index() {
		$data['title'] = "Login/Registration";
		$this->load_login_form($data);
	}

	public function load_login_form($data) {
		$this->load->view('template/header', $data);
		$this->load->view('forms/login_form');
		$this->load->view('template/footer');
	}

	public function load_admin_page() {
		$this->load->view('template/header');
		$this->load->view('admin_page');
		$this->load->view('template/footer');
	}

	// Validate and store registration data in database
	public function registration() {
		// Check validation for user input in SignUp form
		$this->form_validation->set_rules('name', 'Name', 'trim|required|xss_clean');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');
		$this->form_validation->set_rules('confirm-password', 'Confirm Password', 'trim|required|xss_clean');

		if ($this->form_validation->run() == FALSE) {
			$data = array(
				'error_message' => 'Invalid data',
			);
			$this->load_login_form($data);
		} else {
			$data = array(
				'name' => $this->input->post('name'),
				'email' => $this->input->post('email'),
				'password' => md5($this->input->post('password'))
			);
			$result = $this->user_model->user_insert($data);
			if ($result > 1) {
				$data['message_display'] = 'Registration Successfully !';
				$this->load_login_form($data);
			} else {
				$data['message_display'] = 'Username already exist!';
				$this->load_login_form($data);
			}
		}
	}

	// Check for user login process
	public function login() {
		$this->form_validation->set_rules('email', 'Email', 'trim|required|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');

		if ($this->form_validation->run() == FALSE) {
			if (isset($this->session->userdata['logged_in'])) {
				$this->load_admin_page();
			} else {
				$this->index();
			}
		} else {
			$data = array(
				'email' => $this->input->post('email'),
				'password' => md5($this->input->post('password'))
			);
			$result = $this->user_model->login($data);
			if ($result == TRUE) {

				$email = $this->input->post('email');
				$result = $this->user_model->read_user_information($email);
				if ($result != false) {
					$session_data = array(
						'email' => $result[0]->email,
					);
					// Add user data in session
					$this->session->set_userdata('logged_in', $session_data);
					$this->load_admin_page();
				}
			} else {
				$data = array(
					'error_message' => 'Invalid Username or Password',
				);
				$this->load_login_form($data);
			}
		}
	}

	// Logout from admin page
	public function logout() {

		// Removing session data
		$session_array = array(
			'email' => '',
		);
		$this->session->unset_userdata('logged_in', $session_array);
		$data['message_display'] = 'Successfully Logout';
		$data['title'] = 'Logout';
		$this->load_login_form($data);
	}

}
