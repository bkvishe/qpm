<?php
	$this->load->view('layout/header');

	echo isset($contains)?$contains:"";

	$this->load->view('layout/footer');
?>