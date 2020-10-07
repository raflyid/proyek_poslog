<?php
class registration extends CI_Controller
{

	function index(){
		$this->load->view('view_vendor/header');
		$this->load->view('view_vendor/registration');
		$this->load->view('view_vendor/footer');
	}

}


?>
