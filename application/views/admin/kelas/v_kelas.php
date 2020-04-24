<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Home</title>
	<link rel="icon" href="<?php echo base_url('assets/img/icon_recon.png') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/vendor/fontawesome-free/css/all.min.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/dist/css/bootstrap.min.css') ?>">
</head>
<body><br>
	<div class="container">
		<a href="<?php echo site_url('c_kelas/form_input') ?>" class="btn btn-success">Tambah Data Kelas</a>
	<div id="body">
		<table class="table table-bordered">
		<tr class="bg-dark" style="color: white">
			<td>No</td>
			<td>Nama Kelas</td>
			<td>Kompetensi Keahlian</td>
			<td>Opsi</td>
		</tr>
		<?php $i=1; ?>
		<?php foreach($kelas as $k) { ?>
		<tr>
			<td><?php echo $i; ?></td>
			<td><?php echo $k['nama_kelas'] ?></td>
			<td><?php echo $k['kompetensi_keahlian'] ?></td>
			<td>
				<a href="<?php echo site_url('c_kelas/form_edit/'.$k['id_kelas']) ?>" class="btn btn-warning"><i class="far fa-edit"></i></a>
				<a href="<?php echo site_url('c_petugas/drop/'.$k['id_kelas']) ?>" onclick = "return confirm('mau 	hapus nih?')" class="btn btn-danger"><i class="far fa-trash-alt"></i></a>
			</td>
		</tr>

	<?php $i++; ?>
<?php } ?>
	</table>
	</div>
</div>
	
</body>
</html>