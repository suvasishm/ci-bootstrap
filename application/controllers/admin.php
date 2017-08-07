<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function index()
	{
		$data['title'] = "Admin";
		$this->load_admin_page($data);
	}

	public function load_admin_page($data) {
		$this->load->view('template/header', $data);
		$this->load->view('admin_page');
		$this->load->view('template/footer');
	}
}
