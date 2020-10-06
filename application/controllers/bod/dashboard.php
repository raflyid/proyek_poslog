<?php
class dashboard extends CI_Controller
{

	function index(){
		$this->load->view('view_bod/header');
		$this->load->view('view_bod/dashboard');
		$this->load->view('view_bod/footer');

	}

}


?>
