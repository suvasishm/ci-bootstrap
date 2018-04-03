<?php

Class Vendor_Model extends CI_Model {

	public function insert_vendor_general_details($data) {
		// Query to check whether username already exist or not
		$this->db->insert('vendor_general_details', $data);
		if ($this->db->affected_rows() > 0) {
			return true;
		}
	}

	public function insert_vendor_business_details($data) {
		// Query to check whether username already exist or not
		$this->db->insert('vendor_business_details', $data);
		if ($this->db->affected_rows() > 0) {
			return true;
		}
	}

	public function insert_vendor_finance_info($data) {
		// Query to check whether username already exist or not
		$this->db->insert('vendor_finance_info', $data);
		if ($this->db->affected_rows() > 0) {
			return true;
		}
	}
}
