<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index()
	{
		$data['title'] = "My Site Title";
		$this->load->view('template/header', $data);
		$this->load->view('home');
		$this->load->view('template/footer');
	}
}
