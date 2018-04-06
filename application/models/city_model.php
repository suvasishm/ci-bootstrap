<?php

Class City_Model extends CI_Model
{

	public function get_countries()
	{
		$this->db->select('*');
		$this->db->from('country');
		$this->db->order_by('country');

		$query = $this->db->get();

		if ($query->num_rows() > 0) {
			return $query->result();
		}

		return false;
	}

	public function get_regions($country_id)
	{
		$this->db->select('*');
		$this->db->from('region');
		$this->db->where('country_id', $country_id);
		$this->db->order_by('region');

		$query = $this->db->get();

		if ($query->num_rows() > 0) {
			return $query->result();
		}

		return false;
	}

	public function get_cities($region_id)
	{
		$this->db->select('*');
		$this->db->from('city');
		$this->db->where('region_id', $region_id);
		$this->db->order_by('city');

		$query = $this->db->get();

		if ($query->num_rows() > 0) {
			return $query->result();
		}

		return false;
	}

	public function get_region_name($country_id, $region_id)
	{

		$this->db->select('region');
		$this->db->from('region');
		$this->db->where('id', $region_id);
		$this->db->where('country_id', $country_id);

		$query = $this->db->get();

		if ($query->num_rows() == 1) {
			$result = $query->result();
			return $result[0]->region;
		}

		return false;
	}

	public function get_city_name($country_id, $region_id, $city_id)
	{

		$this->db->select('city');
		$this->db->from('city');
		$this->db->where('id', $city_id);
		$this->db->where('region_id', $region_id);
		$this->db->where('country_id', $country_id);

		$query = $this->db->get();

		if ($query->num_rows() == 1) {
			$result = $query->result();
			return $result[0]->city;
		}

		return false;
	}

}
