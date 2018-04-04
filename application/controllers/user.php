<?php

Class User extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	// Show login page
	public function index()
	{
		if ($this->session->logged_in) {
			$this->load_home_page();
		} else {
			$data['title'] = "Login";
			$this->load_login_form($data);
		}
	}

	public function load_login_form($data)
	{
		$this->load->view('template/header', $data);
		$this->load->view('forms/login_form');
		$this->load->view('template/footer');
	}

	public function load_home_page()
	{
		$this->load->view('template/header');
		$this->load->view('home_page');
		$this->load->view('template/footer');
	}

	// Check for user login process
	public function login()
	{
		$this->form_validation->set_rules('email', 'Email', 'trim|required|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');

		if ($this->form_validation->run() == FALSE) {
			if ($this->session->logged_in) {
				$this->load_home_page();
			} else {
				$this->index();
			}
		} else {
			$data = array(
				'email' => $this->input->post('email'),
				'password' => md5($this->input->post('password'))
			);

			$result = $this->user_model->login($data);

			if ($result) {
				$this->session->name = $result[0]->name;
				$this->session->email = $result[0]->email;
				$this->session->user_type = $result[0]->user_type;
				$this->session->logged_in = TRUE;
				$this->load_home_page();
			} else {
				$data = array(
					'error_message' => 'Invalid Username or Password',
				);
				$this->load_login_form($data);
			}
		}
	}

	// Logout from admin page
	public function logout()
	{
		unset(
			$_SESSION['name'],
			$_SESSION['email'],
			$_SESSION['user_type'],
			$_SESSION['logged_in']
		);

		$data['message_display'] = 'Successfully Logout';
		$data['title'] = 'Logout';
		$this->load_login_form($data);
	}

}
