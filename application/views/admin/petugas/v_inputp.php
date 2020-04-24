<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>INPUT PETUGAS</title>
	<link rel="icon" href="<?php echo base_url('assets/img/icon_recon.png') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/dist/css/bootstrap.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/dist/css/bootstrap.min.css') ?>">
</head>
<body>
	<div id="container">
		<div class="card w-50 mx-auto">
			<div class="card-header">
				<center><h1>Input Petugas</h1></center>
			</div>

		<form action="<?php echo site_url('c_petugas/insert') ?>" method="POST">
			
			<div class="col">Username
				<input type="text" name="username" class="form-control">
			</div>

			<div class="col">Password
				<input type="text" name="password" class="form-control">
			</div>

			<div class="col">Nama Petugas
				<input type="text" name="nama_petugas" class="form-control">
			</div>

			<div class="col">
				Level <select name="level" class="form-control">
						<option value="">--Pilih Level--</option>
						<option value="admin">Admin</option>
						<option value="petugas">Petugas</option>
					</select>
			</div>

			<div class="card-footer text-muted">
				<div class="row text-center">
					<div class="form-group col-md-6">
						<button class="btn btn-success" type="submit" name="tambah">Tambah</button>
					</div>
				
					<div class="form-group col-md-6">
						<a href="<?php echo site_url('welcome/petugas') ?>" class="btn btn-warning">Kembali</a>
					</div>
				</div>	
			</div>
		</form>	
	</div>
</div>	
</body>
</html>