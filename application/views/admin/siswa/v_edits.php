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
				<center><h1>Edit Siswa</h1></center>
			</div>

		<?php if ($dataEdit){
			$nisn = $dataEdit->nisn;
			$nis = $dataEdit->nis;
			$nama = $dataEdit->nama;
			$id_kelas = $dataEdit->id_kelas;
			$alamat = $dataEdit->alamat;
			$no_telp = $dataEdit->no_telp;
			$pass = $dataEdit->password;
			$id_spp = $dataEdit->id_spp;
		}else{
			$nisn = "";
			$nis = "";
			$nama = "";
			$id_kelas = "";
			$alamat = "";
			$no_telp = "";
			$pass = "";
			$id_spp = "";
		} ?>
		<form action="<?php echo site_url('c_siswa/update/'.$nisn) ?>" method="POST">
			
			<div class="col">
				NISN <input type="text" name="nisn" value="<?php echo $nisn?>" class="form-control">
			</div>

			<div class="col">
				NIS <input type="text" name="nis" value="<?php echo $nis ?>" class="form-control">
			</div>

			<div class="col">
				NAMA <input type="text" name="nama" value="<?php echo $nama ?>"class="form-control">
			</div>

			<div class="col">
				Kelas <input type="text" name="id_kelas" value="<?php echo $id_kelas ?>" class="form-control">
			</div>

			<div class="col">
				ALAMAT <input type="text" name="alamat" value="<?php echo $alamat ?>" class="form-control">
			</div>

			<div class="col">
				NOMOR TELEPON <input type="text" name="no_telp" value="<?php echo $no_telp ?>" class="form-control">
			</div>

			<div class="col">
				PASSWORD<input type="text" name="password" value="<?php echo $pass ?>" class="form-control">
			</div>

			<div class="col">
				 SPP <input type="text" name="id_spp" value="<?php echo $id_spp ?>" class="form-control">
			</div>
			
			
			<div class="card-footer text-muted">
				<div class="row text-center">
					<div class="form-group col-md-6">
						<button class="btn btn-success" type="submit" name="edit">Edit</button>
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