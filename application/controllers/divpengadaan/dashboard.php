<?php
class dashboard extends CI_Controller
{

	function __construct(){
		parent::__construct();
		if($this->session->userdata('status_login') != "4V050oXlAMwyba8kkr5Q"){
			redirect(base_url("index.php/login"));
		}
		else if ($this->session->userdata('jabatan') != "LV02")
		{
			redirect(base_url("index.php/error404"));
		}
	}

	function index(){
		$this->load->view('view_divpengadaan/header');
		$this->load->view('view_divpengadaan/dashboard');
		$this->load->view('view_divpengadaan/footer');

	}

}


?>
