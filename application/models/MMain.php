<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MMain extends CI_Model {

	function get_dashboard_data(){

		$total_customer = $this->db->query("select count(*) as total_customer from customer")->result_array()[0]['total_customer'];
		$total_trans = $this->db->query("select count(*) as total_trans from transaction")->result_array()[0]['total_trans'];

		return [
			'total_customer' => $total_customer,
			'total_trans' => $total_trans,
		];
	}
}