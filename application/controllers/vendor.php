<?php
/**
 * User: suvasish mondal (suvasishmndl@gmail.com)
 * Date: 30-Mar-18
 * Time: 1:52 PM
 */

class Vendor extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('vendor_model');
	}

	public function load_vendor_signup_form($data) {
		$this->load->view('template/header', $data);
		$this->load->view('forms/vendor_signup_form');
		$this->load->view('template/footer');
	}

	public function signup() {
		$data['message_display'] = 'Fill in details here';
		$this->load_vendor_signup_form($data);
	}

	// Validate and store registration data in database
	public function register() {
		// Check validation for user input in SignUp form
		/*$this->form_validation->set_rules('vendorName', 'First Name', 'trim|required|xss_clean');
		$this->form_validation->set_rules('lname', 'Last Name', 'trim|required|xss_clean');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');
		$this->form_validation->set_rules('confirm-password', 'Confirm Password', 'trim|required|xss_clean');*/

		/*if ($this->form_validation->run() == FALSE) {
			$data = array(
				'error_message' => 'Invalid data',
			);
			$this->signup($data);
		} else {
			$data = array(
				'vendorName' => $this->input->post('vendorName'),
				'vendor_email' => $this->input->post('vendorEmail'),
				'mobile' => $this->input->post('vendorMobile')
			);
			$result = $this->vendor_general_model->register($data);
			if ($result == TRUE) {
				$data['message_display'] = 'Registration Successful!';
				//$this->load_login_form($data);
				print_r("Todo: Registration Successful!");
			} else {
				$data['message_display'] = 'Username already exist!';
				$this->signup();
				print_r("Todo: 'Username already exist!'");
			}
		}*/

		$this->form_validation->set_rules('vendor_email', 'Email', 'trim|required|xss_clean');

		// First, insert an entry into user table
		$user_model = array(
			'name' => $this->input->post('vendor_name'),
			'email' => $this->input->post('vendor_email'),
			'user_type' => USER_TYPE_VENDOR
		);

		// capture the new user id
		$user_id = $this->user_model->user_insert($user_model);

		// Todo: if the above insert failed, no need to proceed

		// Second, insert an entry into the following three tables
		$vendor_general = $this->get_vendor_general_model($user_id);
		$vendor_business = $this->get_vendor_business_model($user_id);
		$vendor_finance = $this->get_vendor_finance_model($user_id);


		// Todo: for each next calls, if one fails revert all previous steps
		$result = $this->vendor_model->insert_vendor_general_details($vendor_general);
		$result = $this->vendor_model->insert_vendor_business_details($vendor_business);
		$result = $this->vendor_model->insert_vendor_finance_info($vendor_finance);


		/*if ($result == TRUE) {
			$data['message_display'] = 'Registration Successful!';
			$this->load_vendor_signup_form($data);
		} else {
			$data['message_display'] = 'Username already exist!';
			$this->load_vendor_signup_form($data);
		}*/
	}


	private function get_vendor_general_model($user_id) {
		// Todo: Check validation
		$vendor_general_model = array(
			'user_id' => $user_id,
			'src_ref' => $this->input->post('src_ref'),
			'title' => $this->input->post('title'),
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

	private function get_vendor_business_model($user_id) {
		// Todo: Check validation
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

	private function get_vendor_finance_model($user_id) {
		// Todo: Check validation
		$vendor_finance_model = array(
			'user_id' => $user_id,
			'bank_name' => $this->input->post('bank_name'),
			'ben_acc_name' => $this->input->post('ben_acc_name'),
			'ben_acc_number' => $this->input->post('ben_acc_number'),
			'code_type' => $this->input->post('code_type'),
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
