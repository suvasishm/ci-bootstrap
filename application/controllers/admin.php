<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function index()
	{
		/*$data['title'] = "Admin";
		$this->load_admin_page($data);*/
	}

	public function load_create_user_form($data) {
		$data['title'] = "Create a New Admin";
		$this->load->view('template/header', $data);
		$this->load->view('forms/create_user_form', $data);
		$this->load->view('template/footer');
	}

	public function load_home_page()
	{
		$this->load->view('template/header');
		$this->load->view('home_page');
		$this->load->view('template/footer');
	}

	public function create_user()
	{
		// only admin can perform this
		//Todo: check if super admin user performing this
		//Todo: check both password should match

		$data = array(
			'name' => $this->input->post('name'),
			'email' => $this->input->post('email'),
			'password' => md5($this->input->post('password')),
			'user_type' => $this->input->post('user_type'),
			'activation_status' => 1
		);
		$result = $this->user_model->user_insert($data);
		if ($result > 1) {
			$data['message_display'] = 'User Created Successfully!';
			$this->load_home_page($data);
		} else {
			$data['error_message'] = 'User already exist!';
			$this->load_home_page($data);
		}
	}
}
