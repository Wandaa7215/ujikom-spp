<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Petugas</title>
	<link rel="icon" href="<?php echo base_url('assets/img/icon_recon.png') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/dist/css/bootstrap.min.css') ?>"> 
</head>
<body>
<div id="container">
	<div class="card 2-50 mx auto">
		<div class="card-header">
			<h4>Cari Data Siswa</h4>
		</div>
		<br>
		<div class="content-home">
			<form method="post" action="<?php echo site_url('Pembayaran/cariSiswa') ?>" class="form-group col-md-6">
				<input type="text" name="nis" required="" placeholder="NIS Siswa..." class="form-control"><br>
				<button class="btn btn-sm btn-success"><i class="fa fa-search"></i>&nbsp;&nbsp;Cari</button>
			</form>
		</div>
	</div>
</div>
</body>
</html>