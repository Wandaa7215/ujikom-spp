<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Profile | SPP Ujikom</title>
    <link rel="icon" href="<?php echo base_url('assets/img/icon_recon.png') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/dist/css/bootstrap.min.css') ?>">
</head>
<body>
	<br><br><br><br>
    <div id="container">
	<div class="card w-50 mx-auto text-black">
    <div class="card-body">
		<h5 class="card-header">Profile</h5>
    <div class="form-row">

    			<div class="form-grup col-md-4">
    				<p>Nama  </p>
    			</div>
    			<div class="form-grup col-md-4">
    				<p class="card-text"><?php echo $profile->nama_petugas; ?></p>
    			</div>
    		</div>
    		<div class="row">
    			<div class="form-grup col-md-4">
    				<p>Username</p>
    			</div>
    			<div class="form-grup col-md-4">
    				<p class="card-text"><?php echo $profile->username; ?></p>
            <br><br>
            <center>
    		<a href="<?php echo site_url('c_login/logout') ?>" class="btn btn-sm btn-danger"><i class="fa fa-sign-out"></i>&nbsp;&nbsp;Logout</a>
            </center>
        </div>
        </div>
        </div>
	
</body>
</html>