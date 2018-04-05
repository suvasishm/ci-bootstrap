<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class City extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('city_model');
	}

	public function fetch_regions($country_id)
	{
		$results = $this->city_model->get_regions($country_id);

		$regions = array();
		foreach ($results as $region) {
			$temp["id"] = $region->id;
			$temp["region"] = $region->region;

			array_push($regions, $temp);
		}

		print_r(json_encode($regions));
	}

	public function fetch_cities($region_id)
	{
		$results = $this->city_model->get_cities($region_id);

		$cities = array();
		foreach ($results as $city) {
			$temp["id"] = $city->id;
			$temp["city"] = $city->city;

			array_push($cities, $temp);
		}

		print_r(json_encode($cities));
	}

}
