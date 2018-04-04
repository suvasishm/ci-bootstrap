<?php

Class User_Model extends CI_Model
{

	// Insert registration data in database
	public function user_insert($data)
	{

		if (!$this->read_user_information($data['email'])) {
			// Query to insert data in database
			$this->db->insert('user', $data);
			if ($this->db->affected_rows() > 0) {
				return $this->db->insert_id();
			}
		}

		return false;
	}

	public function login($data)
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('email', $data['email']);
		$this->db->where('password', $data['password']);
		$this->db->where('activation_status', 1);
		$this->db->limit(1);
		$query = $this->db->get();

		if ($query->num_rows() == 1) {
			return $query->result();
		}

		return false;
	}

	// Read data from database to show data in admin page
	public function read_user_information($email)
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('email', $email);
		$this->db->limit(1);
		$query = $this->db->get();

		if ($query->num_rows() == 1) {
			return $query->result();
		} else {
			return false;
		}
	}

	public function user_delete($user_id)
	{
		$tables = array('user', 'vendor_general_details', 'vendor_business_details', 'vendor_finance_info');
		$this->db->where('user_id', $user_id);
		$query = $this->db->delete($tables);
		return $query;
	}

	public function get_user_type_name($id) {
		$this->db->select('*');
		$this->db->from('user_type');
		$this->db->where('id', $id);
		$this->db->limit(1);
		$query = $this->db->get();

		if ($query->num_rows() == 1) {
			return ($query->result())[0]->type;
		} else {
			return false;
		}
	}

	public static function get_user_type($id) {
		return get_user_type_name($id);
	}

}
