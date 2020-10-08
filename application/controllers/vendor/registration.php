<?php

class registration extends CI_Controller
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
		$this->output->set_content_type("Access-Control-Allow-Origin: *")->set_content_type("Access-Control-Allow-Methods: POST, GET")->set_content_type("Access-Control-Allow-Headers: Authorization, Origin, X-Requested-With, Content-Type, Accept");

		$this->load->model('models_vendor/registration_model');

		if($this->registration_model->get_validate_registed_or_not() == 0){
			if($this->input->post('submit')){
				$this->registration_model->submit_registration();
				$this->session->set_flashdata('success','Action Completed');
			
			}
	
			$this->load->view('view_vendor/header');
			$this->load->view('view_vendor/registration');
			$this->load->view('view_vendor/footer');
		}else{
			echo "<script> alert('Vendor sudah melakukan registrasi. Silahkan lanjut untuk submit dokumen dan asset.'); window.location.href='".base_url()."index.php/vendor/dashboard'; </script>";
		}

		
    }
        
        function get_classification(){
		$this->load->model('models_vendor/registration_model');
		$data=$this->registration_model->get_classification();
		echo json_encode($data);
        }
        
        function get_business_field(){
		$this->load->model('models_vendor/registration_model');
		$data=$this->registration_model->get_business_field();
		echo json_encode($data);
        }
        
        function get_category_business_field($id){
		$this->load->model('models_vendor/registration_model');
		$data=$this->registration_model->get_category_business_field($id);
		echo json_encode($data);
        }
        
}


?>