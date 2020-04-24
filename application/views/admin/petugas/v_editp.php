<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>EDIT</title>
	<link rel="icon" href="<?php echo base_url('assets/img/icon_recon.png') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/dist/css/bootstrap.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/dist/css/bootstrap.min.css') ?>">
</head>
<body>
	<div class="container">
		<div class="card w-50 mx-auto">
			<div class="card-header">
				<center><h1>Edit Petugas</h1></center>
			</div>

		<?php if ($dataEdit) {
			$id_petugas = $dataEdit->id_petugas;
			$username = $dataEdit->username;
			$password = $dataEdit->password;
			$nama_petugas = $dataEdit->nama_petugas;
			$level = $dataEdit->level;
		}else{
			$username = "";
			$password = "";
			$nama_petugas = "";
			$level = "";
		} ?>
		<form action="<?php echo site_url('c_petugas/update/'.$id_petugas) ?>" method="POST">
			<div class="col">Username
				<input type="text" name="username" value="<?php echo $username ?>" class="form-control">
			</div>

			<div class="col">Password
				<input type="password" name="password" value="<?php echo $password ?>" class="form-control">
			</div>

			<div class="col">Nama Petugas
				<input type="text" name="nama_petugas" value="<?php echo $nama_petugas ?>" class="form-control">
			</div>

			<div class="col">
				Level <input type="text" name="level" value="<?php echo $level ?>" class="form-control">
			</div>

			<div class="card-footer text-muted">
				<div class="row text-center">
					<div class="form-group col-md-6">
						<button class="btn btn-success" type="submit" name="edit">Edit</button>
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