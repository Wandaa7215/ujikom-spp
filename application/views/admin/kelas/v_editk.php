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
	<div id="container">
		<div class="card w-50 mx-auto">
			<div class="card-header">
				<center><h1>Edit Kelas</h1></center>
			</div>

		<?php if ($dataEdit) {
			$id_kelas = $dataEdit->id_kelas;
			$nama_kelas = $dataEdit->nama_kelas;
			$kompetensi_keahlian = $dataEdit->kompetensi_keahlian;
		}else{
			$nama_kelas = "";
			$kompetensi_keahlian ="";
		} ?>
		

		<form action="<?php echo site_url('c_kelas/update/'.$id_kelas) ?>" method="POST">
			
			<div class="col">Kelas
				<input type="text" name="nama_kelas" value="<?php echo $nama_kelas ?>" class="form-control">
			</div>

			<div class="col">Kompetensi Keahlian
				<input type="text" name="kompetensi_keahlian" value="<?php echo $kompetensi_keahlian ?>" class="form-control">
			</div>

			<div class="card-footer text-muted">
				<div class="row text-center">
					<div class="form-group col-md-6">
						<button class="btn btn-success" type="submit" name="edit">Edit</button>
					</div>
				
				<div class="form-group col-md-6">
					<a href="<?php echo site_url('welcome/kelas') ?>" class="btn btn-warning">Kembali</a>
				</div>
			</div>	
			</div>
		</form>	
		</div>
	</div>



<!-- 
	<div class="container">
		<a href="<?php echo site_url('welcome/kelas') ?>">Back</a>
		<?php if ($dataEdit) {
			$id_kelas = $dataEdit->id_kelas;
			$nama_kelas = $dataEdit->nama_kelas;
			$kompetensi_keahlian = $dataEdit->kompetensi_keahlian;
		}else{
			$nama_kelas = "";
			$kompetensi_keahlian ="";
		} ?>
		<form action="<?php echo site_url('c_kelas/update/'.$id_kelas) ?>" method="POST">
			
			Nama Kelas <input type="text" name="nama_kelas" value="<?php echo $nama_kelas ?>"><br>
			Kompetensi Keahlian <input type="text" name="kompetensi_keahlian" value="<?php echo $kompetensi_keahlian ?>"><br>
			<input type="submit" value="Upload">

		</form>
	</div>
 -->	
</body>
</html>