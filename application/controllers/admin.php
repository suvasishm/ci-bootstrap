<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
{
	public function index()
	{
		/*$data['title'] = "Admin";
		$this->load_admin_page($data);*/
	}

	public function load_create_user_form($data = array())
	{
		$data['title'] = "Create/Update a User";

		/*$data['user_type'] = 2;
		$data['title_key'] = 5;
		$data['name'] = 'Test Name';
		$data['email'] = 'some@some.com';*/

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

	public function register()
	{
		// only super admin can perform this
		//Todo: check if super admin user performing this
		//Todo: check both password should match

		$user_model = array(
			'title_key' => $this->input->post('title_key'),
			'name' => $this->input->post('name'),
			'email' => $this->input->post('email'),
			'password' => md5($this->input->post('password')),
			'user_type' => $this->input->post('user_type'),
			'activation_status' => 1
		);

		$result = $this->user_model->user_insert($user_model);
		if ($result > 1) {
			$data['message_display'] = 'User Created Successfully!';
			// Todo: move to appropriate page or a page that lists all users
			$this->load_create_user_form($data);
		} else {
			$data['error_message'] = 'User already exist!';
			$this->load_create_user_form($data);
		}
	}
}
