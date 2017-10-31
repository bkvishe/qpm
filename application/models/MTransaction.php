<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MTransaction extends CI_Model {

	public function getAllData(){

		$sql = "select t.*,c.fullname from transaction t inner join customer c on t.cust_id=c.cust_id order by trans_id desc";

		return $this->db->query($sql)->result_array();
	}

	public function add_action(){

		$record = $this->input->post();

		if($this->db->insert('transaction', $record)){

			$trans_ref_id = date('Ymd')."-".$this->input->post('cust_id').'-'.$this->db->insert_id();

			$this->db->where('trans_id', $this->db->insert_id())->update('transaction', [
				'trans_ref_id' => $trans_ref_id
			]);
			
			return json_encode([
				'status' => 1,
				'msg' => 'Successfully added!',
				'type' => 'success',
				'trans_details' => [
					'status' => 'success',
					'ref_id' => $trans_ref_id,
					'amount' => $this->input->post('amount'),
					'period' => $this->input->post('period'), 
					'expiry' => $this->input->post('expiry_date'), 
				],
			]);
		}
		else{

			return json_encode([
				'status' => 0,
				'msg' => 'Failed to add! Please try once again',
				'type' => 'error',
				'trans_details' => '',
			]);
		}
	}
}	