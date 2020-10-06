<?php
class dashboard extends CI_Controller
{

	function index(){
		$this->load->view('view_vendor/header');
		$this->load->view('view_vendor/dashboard');
		$this->load->view('view_vendor/footer');

	}

}


?>
