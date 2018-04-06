<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * User: suvasish mondal (suvasishmndl@gmail.com)
 * Date: 30-Mar-18
 * Time: 1:52 PM
 */
class Vendor extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	public function load_vendor_signup_form($data = array())
	{
		unset(
			$_SESSION['title_key'],
			$_SESSION['name'],
			$_SESSION['email'],
			$_SESSION['user_type'],
			$_SESSION['logged_in']
		);

		$data['title'] = 'Vendor Signup';

		$data['title_key'] = 5;
		$data['name'] = "Kaira Setty";
		$data['house_no'] = "40/2";
		$data['addressline_1'] = "Bidhan Sarani";
		$data['postal_code'] = '89698';
		$data['po_box_no'] = '20/4';
		$data['country_id'] = 113;
		$data['state_id'] = 2194;
		//$data['city_id'] = 6452;
		$data['email'] = "kaira@test.com";
		$data['mobile_no'] = "789654258";
		$data['contact_person_name'] = "Mohit Setty";
		$data['contact_person_no'] = "8963369984";
		$data['contact_person_email'] = "mohit@test.com";
		$data['bank_name'] = "HDFC";
		$data['ben_acc_name'] = "Kaira Setty";
		$data['ben_acc_number'] = "589658523247892";
		$data['ben_acc_number_confirm'] = $data['ben_acc_number'];
		$data['bank_code_type'] = 2;
		$data['bank_code'] = "HDFC567900P";
		$data['annual_turn_over'] = "10000000";
		$data['trading_currency'] = 2;
		$data['business_with_ngage'] = 1;
		$data['iso_certified'] = 1;
		$data['stock_exchange_listed'] = 1;
		$data['firm_type'] = 2;
		$data['business_type'] = 3;

		// if country_id is present, populate states for that country_id
		if (isset($data['country_id'])) {
			$this->load->model('city_model');
			$data['states'] = $this->city_model->get_regions($data['country_id']);

			// if state_id is present, populate cities for that state_id
			if (isset($data['state_id'])) {
				$data['cities'] = $this->city_model->get_cities($data['state_id']);

				// set state/region name
				$data['state_name'] = $this->city_model->get_region_name($data['country_id'], $data['state_id']);

				// if city_id is present, find city's name
				if (isset($data['city_id'])) {
					// set city name
					$data['city_name'] = $this->city_model->get_city_name($data['country_id'], $data['state_id'], $data['city_id']);
				}
			}
		}

		$this->load->view('template/header', $data);
		$this->load->view('forms/vendor_signup_form', $data);
		$this->load->view('template/footer');
	}

	// Validate and store registration data in database
	public function register()
	{
		print_r($this->input->post);
		// First, try to insert an entry into user table

		// create user_model
		$user_model = array(
			'title_key' => $this->input->post('title_key'),
			'name' => $this->input->post('name'),
			'email' => $this->input->post('email'),
			'user_type' => array_search('VENDOR', USER_TYPES),
			'activation_status' => 0
		);

		// insert into user table
		$user_id = $this->user_model->user_insert($user_model);
		if (!$user_id) { // user with email already exists
			$data['error_message'] = 'User with ' . $user_model['email'] . ' already exists. Use a different email id.';
			$data = array_merge($data,
				$user_model,
				$this->get_vendor_general_model(''),
				$this->get_vendor_business_model(''),
				$this->get_vendor_business_model('')
			);
			$this->load_vendor_signup_form($data);
			return false;
		}

		// Second, insert an entry into the following three tables

		// populate field values
		$vendor_general = $this->get_vendor_general_model($user_id);
		$vendor_business = $this->get_vendor_business_model($user_id);
		$vendor_finance = $this->get_vendor_finance_model($user_id);

		// insert into vendor tables
		$result = $this->vendor_model->insert_vendor_general_details($vendor_general);
		if (!$result) {
			$this->abort_signup($user_id);
			return false;
		}

		$result = $this->vendor_model->insert_vendor_business_details($vendor_business);
		if (!$result) {
			$this->abort_signup($user_id);
			return false;
		}

		$result = $this->vendor_model->insert_vendor_finance_info($vendor_finance);
		if (!$result) {
			$this->abort_signup($user_id);
			return false;
		}

		$this->registration_success();
	}

	private function registration_success()
	{
		$this->load->view('template/header');
		$this->load->view('vendor_registration_success');
		$this->load->view('template/footer');
	}

	private function abort_signup($user_id)
	{
		$this->user_model->user_delete($user_id);
		$data['error_message'] = 'Something went wrong. Please try again later.';
		$this->load_vendor_signup_form($data);
	}


	private function get_vendor_general_model($user_id)
	{
		$vendor_general_model = array(
			'user_id' => $user_id,
			'src_ref' => $this->input->post('src_ref'),
			'house_no' => $this->input->post('house_no'),
			'addressline_1' => $this->input->post('addressline_1'),
			'addressline_2' => $this->input->post('addressline_2'),
			'addressline_3' => $this->input->post('addressline_3'),
			'country_id' => $this->input->post('country_id'),
			'state_id' => $this->input->post('state_id'),
			'city_id' => $this->input->post('city_id'),
			'postal_code' => $this->input->post('postal_code'),
			'po_box_no' => $this->input->post('po_box_no'),
			'mobile_no' => $this->input->post('mobile_no'),
			'telephone_1' => $this->input->post('telephone_1'),
			'telephone_2' => $this->input->post('telephone_2'),
			'fax_no' => $this->input->post('fax_no'),
			'contact_person_name' => $this->input->post('contact_person_name'),
			'contact_person_no' => $this->input->post('contact_person_no'),
			'contact_person_desig' => $this->input->post('contact_person_desig'),
			'contact_person_email' => $this->input->post('contact_person_email'),
			'website' => $this->input->post('website'),
			'overseas_office' => $this->input->post('overseas_office')
		);

		return $vendor_general_model;
	}

	private function get_vendor_business_model($user_id)
	{
		$vendor_business_model = array(
			'user_id' => $user_id,
			'business_with_ngage' => $this->input->post('business_with_ngage'),
			'engagement_details' => $this->input->post('engagement_details'),
			'iso_certified' => $this->input->post('iso_certified'),
			'cert_type' => $this->input->post('cert_type'),
			'cert_validity' => $this->input->post('cert_validity'),
			'cert_issuing_authority' => $this->input->post('cert_issuing_authority'),
			'cert_year' => $this->input->post('cert_year'),
			'firm_type' => $this->input->post('firm_type'),
			'business_type' => $this->input->post('business_type'),
			'workshop_address' => $this->input->post('workshop_address')
		);

		return $vendor_business_model;
	}

	private function get_vendor_finance_model($user_id)
	{
		$vendor_finance_model = array(
			'user_id' => $user_id,
			'bank_name' => $this->input->post('bank_name'),
			'ben_acc_name' => $this->input->post('ben_acc_name'),
			'ben_acc_number' => $this->input->post('ben_acc_number'),
			'bank_code_type' => $this->input->post('bank_code_type'),
			'bank_code' => $this->input->post('bank_code'),
			'ben_address' => $this->input->post('ben_address'),
			'annual_turn_over' => $this->input->post('annual_turn_over'),
			'trading_currency' => $this->input->post('trading_currency'),
			'stock_exchange_listed' => $this->input->post('stock_exchange_listed'),
			'stock_exchange_name' => $this->input->post('stock_exchange_name')
		);

		return $vendor_finance_model;
	}

}
