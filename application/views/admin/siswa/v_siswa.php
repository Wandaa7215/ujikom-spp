<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Siswa</title>
	<link rel="icon" href="<?php echo base_url('assets/img/icon_recon.png') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/vendor/fontawesome-free/css/all.min.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/dist/css/bootstrap.min.css') ?>">
</head>
<body>
	<div class="container">
	<a href="<?php echo site_url('c_siswa/form_input') ?>" class="btn btn-success">Tambah Data Siswa</a>
	<div id="body">
	<table class="table table-bordered">
		<tr class="bg-dark" style="color: white">
			<td>No</td>
			<td>NISN</td>
			<td>NIS</td>
			<td>Nama</td>
			<td>Alamat</td>
			<td>Nomor Telepon</td>
			<td>Password</td>
			<td>Kompetensi Keahlian</td>
			<td>Tahun</td>
			<td>OPSI</td>
		</tr>
		<?php $i=1; ?>
		<?php foreach($murid as $m) { ?>
		<tr>
			<td><?php echo $i; ?></td>
			<td><?php echo $m['nisn'] ?></td>
			<td><?php echo $m['nis'] ?></td>
			<td><?php echo $m['nama'] ?></td>
			<td><?php echo $m['alamat'] ?></td>
			<td><?php echo $m['no_telp'] ?></td>
			<td><?php echo $m['password'] ?></td>
			<td><?php echo $m['kompetensi_keahlian'] ?></td>
			<td><?php echo $m['tahun'] ?></td>
			<td>
				<a href="<?php echo site_url('c_siswa/form_edit/'.$m['nisn']) ?>" class="btn btn-warning"><i class="far fa-edit"></i></a>
				 <a href="<?php echo site_url('c_siswa/drop/'.$m['nisn']) ?>" onclick ="return confirm('mau hapus nih?')" class="btn btn-danger"><i class="far fa-trash-alt"></i></a>
			</td>
		</tr>

	<?php $i++; ?>
<?php } ?>
	</table>
	</div>
</div>
</body>
</html>