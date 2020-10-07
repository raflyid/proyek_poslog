<?php

class registration extends CI_Controller
{

	function index(){
        $this->output
                ->set_content_type("Access-Control-Allow-Origin: *")
                ->set_content_type("Access-Control-Allow-Methods: POST, GET")
                ->set_content_type("Access-Control-Allow-Headers: Authorization, Origin, X-Requested-With, Content-Type, Accept");
		$this->load->view('view_vendor/header');
		$this->load->view('view_vendor/registration');
        $this->load->view('view_vendor/footer');
        
	}

}


?>
