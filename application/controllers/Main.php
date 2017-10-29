<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index()
	{
		//echo '<pre>';print_r($_SESSION);exit;
		$view = $this->load->view('main/index','',true);

		$this->load->view('layout/index', array('contains' => $view));
	}
}
