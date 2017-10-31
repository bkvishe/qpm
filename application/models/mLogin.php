<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MLogin extends CI_Model {

	public function checkLogin(){
		$count = $this->db->where(['user_name' => $_POST['user_name']])
						->count_all_results('rtl_user');

		if($count > 0){

			$record = $this->db->get_where('rtl_user', ['user_name' => $_POST['user_name']])->result_array();
			
			if(isset($record[0]['user_password']) && (md5($_POST['user_password']) == trim(strtolower($record[0]['user_password'])))){

				if(isset($record[0]['user_status']) && $record[0]['user_status'] == 1){

					$userData = [
						'user_name' => $record[0]['user_name'],
						'fullname' => $record[0]['fullname'],
						'role' => $record[0]['role'],
						'user_status' => $record[0]['user_status'],
						'last_login' => $record[0]['last_login']
					];

					$this->session->set_userdata('userData', $userData);

					return [
						'flag' => '1',
						'type' => 'success',
						'msg' => 'Success'
					];
				}
				else{

					return [
						'flag' => '0',
						'type' => 'error',
						'msg' => 'Your account is inactive! Contact admin to get active'
					];
				}
			}
			else{

				return [
					'flag' => '0',
					'type' => 'error',
					'msg' => 'Wrong password.'
				];
			}
		}
		else{

			return [
				'flag' => '0',
				'type' => 'error',
				'msg' => 'Wrong username.'
			];
		}
	}
}