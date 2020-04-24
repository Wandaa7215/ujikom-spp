<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>INPUT</title>
	<link rel="icon" href="<?php echo base_url('assets/img/icon_recon.png') ?>">	
	<link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/dist/css/bootstrap.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/dist/css/bootstrap.min.css') ?>">
</head>
<body>
	<div id="container">
		<div class="card w-50 mx-auto">
			<div class="card-header">
				<center><h1>Input Siswa</h1></center>
			</div>
	
		<form action="<?php echo site_url('c_siswa/insert') ?>" method="POST">
			
			<div class="col">
				NISN <input type="text" name="nisn"class="form-control">
			</div>

			<div class="col">
				NIS <input type="text" name="nis" class="form-control">
			</div>

			<div class="col">
				NAMA <input type="text" name="nama"class="form-control">
			</div>

			<div class="col">
				Kelas <input type="text" name="id_kelas" class="form-control">
			</div>

			<div class="col">
				ALAMAT <input type="text" name="alamat" class="form-control">
			</div>

			<div class="col">
				NOMOR TELEPON <input type="text" name="no_telp" class="form-control">
			</div>

			<div class="col">
				PASSWORD <input type="text" name="password" class="form-control">
			</div>

			<div class="col">
				 SPP <input type="text" name="id_spp" class="form-control">
			</div>

			<div class="card-footer text-muted">
				<div class="row text-center">
					<div class="form-group col-md-6">
						<button class="btn btn-success" type="submit" name="tambah">Tambah</button>
					</div>
				
				<div class="form-group col-md-6">
					<a href="<?php echo site_url('welcome/siswa') ?>" class="btn btn-warning">Kembali</a>
				</div>
			</div>	
			</div>
		</form>	
		</div>
	</div>
</body>
</html>