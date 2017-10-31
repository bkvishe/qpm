<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MCustomer extends CI_Model {

	public function getAllData(){

		$this->db->order_by('cust_id', 'DESC');
		return $this->db->get('customer')->result_array();
	}

	public function add_action(){

		$record = $this->input->post();
		$record['address'] = json_encode([
			'area' => $record['area'],
			'city' => $record['city'],
			'pincode' => $record['pincode']
		]);

		unset($record['area']);
		unset($record['city']);
		unset($record['pincode']);

		if($this->db->insert('customer', $record)){

			return json_encode([
				'status' => 1,
				'msg' => 'Successfully added!',
				'type' => 'success',
			]);
		}
		else{

			return json_encode([
				'status' => 0,
				'msg' => 'Failed to add! Please try once again',
				'type' => 'error',
			]);
		}
	}

	public function getSingleCustomer(){

		return $this->db->get_where('customer', ['cust_id' => $this->input->post('cust_id')])->result_array()[0];
	}

	public function update_action(){

		$record = $this->input->post();
		if($record['cust_id'] != ''){
			$record['address'] = json_encode([
				'area' => $record['area'],
				'city' => $record['city'],
				'pincode' => $record['pincode']
			]);

			unset($record['area']);
			unset($record['city']);
			unset($record['pincode']);

			$this->db->where('cust_id', $record['cust_id']);

			if($this->db->update('customer', $record)){

				return json_encode([
					'status' => 1,
					'msg' => 'Successfully updated!',
					'type' => 'success',
				]);
			}
			else{

				return json_encode([
					'status' => 0,
					'msg' => 'Failed to add! Please try once again',
					'type' => 'error',
				]);
			}
		}
		else{
			return json_encode([
					'status' => 0,
					'msg' => 'Invalid Request! Please try once again',
					'type' => 'error',
				]);
		}
	}

	public function delete_action(){

		$record = $this->input->post();
		if($record['cust_id'] != ''){

			if($this->db->delete('customer', ['cust_id' => $record['cust_id']])){

				return json_encode([
					'status' => 1,
					'msg' => 'Successfully deleted!',
					'type' => 'success',
				]);
			}
			else{

				return json_encode([
					'status' => 0,
					'msg' => 'Failed to add! Please try once again',
					'type' => 'error',
				]);
			}
		}
		else{
			return json_encode([
					'status' => 0,
					'msg' => 'Invalid Request! Please try once again',
					'type' => 'error',
				]);
		}
	}
}