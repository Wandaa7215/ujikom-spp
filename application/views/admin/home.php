<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Dashboard Admin</title>
	<link rel="icon" href="<?php echo base_url('assets/img/icon_recon.png') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/dist/css/bootstrap.min.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/dist/js/bootstrap.min.js') ?>">
</head>
<body>

	<nav class="navbar navbar-expand navbar-dark bg-dark static-top">
		<ul class="navbar-nav">
			<li class="nav-item">
				<a class="nav-link" href="<?php echo site_url('welcome/home') ?>">HOME</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?php echo site_url('welcome/siswa') ?>">Siswa</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?php echo site_url('welcome/petugas') ?>">Petugas</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?php echo site_url('welcome/kelas') ?>">Kelas</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?php echo site_url('welcome/spp') ?>">SPP</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?php echo site_url('Pembayaran/cari') ?>">Input Data SPP </a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?php echo site_url('Pembayaran/dataPembayaranSpp') ?>">Data Pembayaran SPP</a>
			</li>
			<li class="nav">
				<a class="nav-link" href="<?php echo site_url('c_login/profile') ?>">Profile</a>
			</li>
		</ul>
<!-- 		<a href=""></a>
		<a href=""></a>
		<a href=""></a>
		<a href=""></a>
		<a href=""></a><br><br>
		<a href=""></a> -->
	</nav><br>

		<!-- <div class="cari">
			
		</div>
		<table class="table table-bordered">
			<tr>
				<td>No</td>
				<td>Petugas</td>
				<td>NISN</td>
				<td>Tanggal Bayar</td>
				<td>Bulan Bayar</td>
				<td>Tahun Bayar</td>
				<td>Jumlah Bayar</td>
			</tr>
			<?php $i=1; ?>
			<?php foreach($pembayaran as $p) { ?>
			<tr>
				<td><?php echo $i; ?></td>
				<td><?php echo $p['nama_petugas'] ?></td>
				<td><?php echo $p['nisn'] ?></td>
				<td><?php echo $p['tgl_bayar'] ?></td>
				<td><?php echo $p['bulan_bayar'] ?></td>
				<td><?php echo $p['tahun_bayar'] ?></td>
				<td><?php echo $p['jumlah_bayar'] ?></td>
			</tr>
			<?php $i++; ?>
		<?php }1 ?>
		</table> -->
</body>
</html>