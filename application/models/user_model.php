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
		$query = $this->db->get_where('user', array(
			'email' => $data['email'],
			'password' => $data['password'],
			'activation_status' => 1));

		if ($query->num_rows() == 1) {
			return $query->result();
		}

		return false;
	}

	// Read data from database to show data in admin page
	public function read_user_information($email)
	{
		$query = $this->db->get_where('user', array('email' => $email));
		if ($query->num_rows() == 1) {
			return $query->result();
		}

		return false;
	}

	public function user_delete($user_id)
	{
		// deleting from 'user' table will delete from all referenced table. delete cascade enabled.
		$tables = array('user'/*, 'vendor_general_details', 'vendor_business_details', 'vendor_finance_info'*/);
		$this->db->where('user_id', $user_id);
		$query = $this->db->delete($tables);
		return $query;
	}

	/*public function get_user_types()
	{
		$this->db->select('*');
		$this->db->from('user_type');
		$this->db->where('id !=', 1); // we don't want superadmin to appear
		$query = $this->db->get();

		if ($query->num_rows() > 0) {
			return $query->result();
		}

		return false;
	}

	public function get_user_type_name($id)
	{
		$this->db->select('*');
		$this->db->from('user_type');
		$this->db->where('id', $id);
		$this->db->limit(1);
		$query = $this->db->get();

		if ($query->num_rows() == 1) {
			$result = $query->result();
			return $result[0]->type;
		}

		return false;
	}*/

}
