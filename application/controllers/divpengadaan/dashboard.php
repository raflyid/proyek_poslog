<?php
class dashboard extends CI_Controller
{

	function index(){
		$this->load->view('view_divpengadaan/header');
		$this->load->view('view_divpengadaan/dashboard');
		$this->load->view('view_divpengadaan/footer');

	}

}


?>
