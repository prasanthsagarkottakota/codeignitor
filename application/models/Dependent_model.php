<?php
class Dependent_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	public function get_country_query()
	{
		$query = $this->db->get('countries');
		return $query->result();
	}
	public function get_province_query($country_id)
	{
		$query = $this->db->get_where('provinces', array('country_id' => $country_id));
		return $query->result();
	}
}