
<!DOCTYPE html>
<html lang="en">
<head>
	<title>PT Pos Logistik Indonesia | Sign in</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->	
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url() ?>assets/Template_Admin/assets/images/favicon.png">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/Template_Admin/tlogin/vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/Template_Admin/tlogin/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/Template_Admin/tlogin/fonts/iconic/css/material-design-iconic-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/Template_Admin/tlogin/vendor/animate/animate.css">
	<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/Template_Admin/tlogin/vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/Template_Admin/tlogin/vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/Template_Admin/tlogin/vendor/select2/select2.min.css">
	<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/Template_Admin/tlogin/vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/Template_Admin/tlogin/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/Template_Admin/tlogin/css/main.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

	<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
	<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

	<link rel="stylesheet" href="<?php echo base_url() ?>assets/Template_Admin/login/css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.min.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.css" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.all.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.all.min.js"></script>


</head>

<body>
	<div class="limiter">
		<div class="container-login100" style="background-color: #E9E9E9;" style="margin-bottom: 0px;">
			
			<div class="wrap-login100" style="margin: 30px 30px 50px 30px; padding: 35px 35px 35px 35px;">
				<form method="post" action="<?php echo base_url() ?>index.php/login/aksi_login">
					<span class="login100-form-title p-b-26">
						<a class="button-container" href="#" >
							<img style="align-items: center;" height="130px" src="<?php echo base_url() ?>assets/Template_Admin/tlogin/images/icons/pos_logistik.png" alt="homepage" class="light-logo" />
						</a>
					</span>
					
					<span class="login100-form-title p-b-26">
						Welcome
					</span>
					<div class="wrap-input100 validate-input" data-validate="Enter username">
						<input required="true" class="input100" type="text" name="kar_username">
						<span class="focus-input100" data-placeholder="Username"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input required="true" class="input100" type="password" name="kar_kata_sandi">
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button type="submit" class="login100-form-btn">
								Login
							</button>
						</div>
					</div>
					<div class="text-center p-t-30">
						<a class="txt2" href="#">
							Forgot Password?
						</a>
					</div>

					<!-- <div class="text-center p-t-30" style="margin-bottom: 0px">
						<span class="txt1">
							Don’t have an account?
						</span>

						<a class="txt2" href="registrasi.php">
							Sign Up
						</a>
					</div> -->
				</form>
			</div>
		</div>
	</div>
	
	<!--===============================================================================================-->
	<script src="<?php echo base_url() ?>assets/Template_Admin/tlogin/vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="<?php echo base_url() ?>assets/Template_Admin/tlogin/vendor/animsition/js/animsition.min.js"></script>
	<!--===============================================================================================-->
	<script src="<?php echo base_url() ?>assets/Template_Admin/tlogin/vendor/bootstrap/js/popper.js"></script>
	<script src="<?php echo base_url() ?>assets/Template_Admin/tlogin/vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="<?php echo base_url() ?>assets/Template_Admin/tlogin/vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script src="<?php echo base_url() ?>assets/Template_Admin/tlogin/vendor/daterangepicker/moment.min.js"></script>
	<script src="<?php echo base_url() ?>assets/Template_Admin/tlogin/vendor/daterangepicker/daterangepicker.js"></script>
	<!--===============================================================================================-->
	<script src="<?php echo base_url() ?>assets/Template_Admin/tlogin/vendor/countdowntime/countdowntime.js"></script>
	<!--===============================================================================================-->
	<script src="<?php echo base_url() ?>assets/Template_Admin/tlogin/js/main.js"></script>
	<?php if ($this->session->flashdata('error')): ?>
		<script>
			Swal.fire(
				'Failed Login',
				'Incorrect Username or Password!',
				'error'
				)
			</script>
		<?php endif; ?>

	</body>
	</html>