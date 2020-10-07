<?php
class dashboard extends CI_Controller
{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('status_login') != "4V050oXlAMwyba8kkr5Q"){
			redirect(base_url("index.php/login"));
		}
		else if ($this->session->userdata('level') != "LV01")
		{
			redirect(base_url("index.php/error404"));
		}
	}

	function index(){
		$this->load->view('view_vendor/header');
		$this->load->view('view_vendor/dashboard');
		$this->load->view('view_vendor/footer');
	}

}


?>
