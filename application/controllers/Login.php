<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){

		parent::__construct();
		$this->load->model('mLogin');
		//$this->lang->load('messages','hindi');
	}
	public function index()
	{
		$this->load->view('login/index');
	}

	public function loginAction(){

		if(!empty($_POST)){

			$result = $this->mLogin->checkLogin();
			echo json_encode($result);
		}
		else{
			echo json_encode([
					'flag' => '0',
					'type' => 'error',
					'msg' => 'Bad request! Please try ones again.'
				]);
		}
	}
}
