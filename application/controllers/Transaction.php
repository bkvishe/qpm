<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaction extends CI_Controller {

	public function __construct(){

		parent::__construct();
		$this->load->model('MTransaction');
	}

	public function list(){

		$record = $this->MTransaction->getAllData();
		
		$this->load->view('transaction/list', ['record' => $record]);
	}

	public function add_form(){

		if($this->input->post('cust_id') != ''){

			$period = range(0, 24);
			$payment_status = [
				'pending' => 'Pending',
				'paid' => 'Paid',
				'exemption' => 'Exemption',
			];

			$this->load->view('transaction/form', [
				'cust_id' => $this->input->post('cust_id'),
				'period' => $period,
				'payment_status' => $payment_status,
			]);	
		}
	}

	public function add_action(){

		if(!empty($this->input->post())){

			echo $this->MTransaction->add_action();
		}
		else{
			echo json_encode([
				'status' => 0,
				'msg' => 'Invalid Request',
				'type' => 'error'
			]);
		}		
	}
}