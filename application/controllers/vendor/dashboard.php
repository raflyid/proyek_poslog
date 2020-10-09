<?php
class dashboard extends CI_Controller
{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('status_login') != "4V050oXlAMwyba8kkr5Q"){
			redirect(base_url("login"));
		}
		else if ($this->session->userdata('level') != "1")
		{
			redirect(base_url("error404"));
		}
	}

	function index(){
		$this->load->model('dashboard_vendor_model');
		
		$data['hasil'] = $this->dashboard_vendor_model->dashboard()->row();
		// $vendor_name = $this->dashboard_vendor_model->dashboard()->row()->vendor_name;
		// $remark = $this->dashboard_vendor_model->dashboard()->row()->vendor_remark;

		$this->load->view('view_vendor/header');
		$this->load->view('view_vendor/dashboard', $data);
		$this->load->view('view_vendor/footer');
	}

	function unggah_perbaikan($vendor_id){
		$this->load->model('dashboard_vendor_model');

		if($this->input->post('submit'))
		{
			//meload file model komentar
			$this->load->model('dashboard_vendor_model');
			//menjalankan fungsi tambah pada model
			$this->dashboard_vendor_model->save_perbaikan();

			//mengarahkan file ke controller komentar 
			//artinya mengarah ke komentar/index
			redirect ('vendor/dashboard');
		}

		$data['hasil'] = $this->dashboard_vendor_model->cek_perbaikan($vendor_id);
		$data['vendor_id'] = $vendor_id;

		$this->load->view('view_vendor/header');
		$this->load->view('view_vendor/upload_perbaikan', $data);
		$this->load->view('view_vendor/footer');
	}

}


?>
