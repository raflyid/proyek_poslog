<?php
class dashboard extends CI_Controller
{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('status_login') != "4V050oXlAMwyba8kkr5Q"){
			redirect(base_url("login"));
		}
		else if ($this->session->userdata('level') != "3")
		{
			redirect(base_url("error404"));
		}
	}
	
	function index(){
		$this->load->view('view_bod/header');
		$this->load->view('view_bod/dashboard');
		$this->load->view('view_bod/footer');

	}

}


?>
