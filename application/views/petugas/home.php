<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Petugas</title>
	<link rel="icon" href="<?php echo base_url('assets/img/icon_recon.png') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/dist/css/bootstrap.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/dist/css/bootstrap.min.css') ?>"> 
</head>
<body>
	<nav class="navbar navbar-expand navbar-dark bg-dark static-top">
		<ul class="navbar-nav">
			<li class="nav-item">
				<a class="nav-link" href="<?php echo site_url('Pembayaran/cari') ?>">HOME</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?php echo site_url('Pembayaran/dataPembayaranSpp') ?>"> Data Pembayaran SPP Siswa</a>
			</li>
			<li class="nav">
				<a class="nav-link" href="<?php echo site_url('c_login/profile') ?>">Profile</a>
			</li>
			<li class="nav">
				<a class="nav-link" href="<?php echo site_url('c_login/logout') ?>">Logout</a>
			</li>
		</ul>
	</nav>

	
</body>
</html>