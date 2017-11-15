<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {

	public function __construct(){

		parent::__construct();
		$this->load->model('MCustomer');
	}

	public function list(){

		$record = $this->MCustomer->getAllData();
		
		$this->load->view('customer/list', ['record' => $record]);
	}

	public function add_form(){

		$this->load->view('customer/form');	
	}

	public function add_action(){

		if(!empty($this->input->post())){

			echo $this->MCustomer->add_action();
		}
		else{
			echo json_encode([
				'status' => 0,
				'msg' => 'Invalid Request',
				'type' => 'error'
			]);
		}		
	}

	public function update_form(){

		if(!empty($this->input->post())){

			$record = $this->MCustomer->getSingleCustomer();

			if(!empty($record)){
				
				$address = json_decode($record['address']);
				$record['area'] = $address->area;
				$record['city'] = $address->city;
				$record['pincode'] = $address->pincode;
				unset($record['address']);

				$this->load->view('customer/form', ['formData' => $record]);	
			}
		}
	}

	public function update_action(){

		if(!empty($this->input->post())){

			echo $this->MCustomer->update_action();
		}
		else{
			echo json_encode([
				'status' => 0,
				'msg' => 'Invalid Request',
				'type' => 'error'
			]);
		}		
	}

	public function delete_action(){

		if(!empty($this->input->post())){

			echo $this->MCustomer->delete_action();
		}
		else{
			echo json_encode([
				'status' => 0,
				'msg' => 'Invalid Request',
				'type' => 'error'
			]);
		}	
	}

	public function get_details(){

		if(!empty($this->input->post())){

			$customer = $this->MCustomer->getSingleCustomer();
			$transactions = $this->MCustomer->getCustomerTrans();

			echo json_encode([
				'data' => compact('customer', 'transactions'),
				'status' => 1
			]);
		}
		else{
			echo json_encode([
				'data' => '',
				'status' => 0
			]);
		}
	}
}