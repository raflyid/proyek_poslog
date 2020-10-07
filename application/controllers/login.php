<?php
class login extends CI_Controller
{

	function index(){
		$this->load->view('login_view');
	}

	function aksi_login(){

		$this->load->model('login_model');

		$cek = $this->login_model->cek_login()->num_rows();

		if($cek > 0){
			$fullname = $this->login_model->cek_login()->row()->fullname;
			$username = $this->login_model->cek_login()->row()->username;
			$cek_level = $this->login_model->cek_login()->row()->level_id;
			$level_nama = $this->login_model->cek_login()->row()->level_name;

			$nickname = explode(" ", $fullname);
			$name = $nickname[0]." ".$nickname[1];

			$data_session = array(
				'nama' => $name,
				'username' => $username,
				'level'=> $level_id,
				'level_nama' => $level_nama,
				'status_login' => "4V050oXlAMwyba8kkr5Q"
			);

			$this->session->set_userdata($data_session);

			if($cek_level == "LV01")
			{
				redirect(base_url('index.php/superadmin/dashboard'));
			}
			else if($cek_level == "LV02")
			{
				redirect(base_url('index.php/admin/dashboard'));
			}
			else if($cek_level == "LV03")
			{
				redirect(base_url('index.php/cleaningservice/dashboard'));
			}
		}
		else
		{
			$this->session->set_flashdata('error','Action Not Completed');
			redirect(base_url('index.php/login'));
		}

	}

	function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url('index.php/login'));
	}

}


?>
