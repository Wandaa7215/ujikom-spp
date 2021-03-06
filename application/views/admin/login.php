<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login Petugas</title>
	<link rel="icon" href="<?php echo base_url('assets/img/icon_recon.png') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/Login/vendor/bootstrap/css/bootstrap.min.css') ?>">

	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/Login/fonts/font-awesome-4.7.0/css/font-awesome.min.css') ?>">

	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/Login/vendor/animate/animate.css') ?>">

	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/Login/vendor/css-hamburgers/hamburgers.min.css') ?>">

	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/Login/vendor/select2/select2.min.css') ?>">

	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/Login/css/util.css') ?>">

	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/Login/css/main.css') ?>">
	</style>
</head>
<body>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="<?php echo base_url('assets/Login/images/login2.png') ?>" alt="IMG">
				</div>
				<?php echo form_open('c_login/testLogin') ?>
				<form class="login100-form validate-form">
					<span class="login100-form-title">
						Login Petugas
					</span>

					<div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="login">
							Login
						</button>
					</div>
				</form>
				<?php echo form_close() ?>
			</div>
		</div>
		
	</div>
	

	<script src="<?php echo base_url('assets/Login/vendor/jquery/jquery-3.2.1.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/Login/vendor/bootstrap/js/popper.js') ?>"></script>
	<script src="<?php echo base_url('assets/Login/vendor/bootstrap/js/bootstrap.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/Login/vendor/select2/select2.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/Login/vendor/tilt/tilt.jquery.min.js') ?>"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
	<script src="<?php echo base_url('assets/Login/js/main.js') ?>"></script>
</body>
</html>