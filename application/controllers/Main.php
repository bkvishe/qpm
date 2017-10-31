<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct(){

		parent::__construct();
		$this->load->model('MMain');
	}

	public function index()
	{
		$record = $this->MMain->get_dashboard_data();

		$view = $this->load->view('main/index',$record,true);

		$this->load->view('layout/index', array('contains' => $view));
	}
}
