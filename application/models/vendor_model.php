<?php

Class Vendor_Model extends CI_Model
{

	public function insert_vendor_general_details($data)
	{
		$this->db->insert('vendor_general_details', $data);
		return $this->db->affected_rows() > 0;
	}

	public function insert_vendor_business_details($data)
	{
		$this->db->insert('vendor_business_details', $data);
		return $this->db->affected_rows() > 0;
	}

	public function insert_vendor_finance_info($data)
	{
		$this->db->insert('vendor_finance_info', $data);
		return $this->db->affected_rows() > 0;
	}
}
