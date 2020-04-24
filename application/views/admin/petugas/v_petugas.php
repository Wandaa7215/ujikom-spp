<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PETUGAS</title>
	<link rel="icon" href="<?php echo base_url('assets/img/icon_recon.png') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/vendor/fontawesome-free/css/all.min.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/dist/css/bootstrap.min.css') ?>">
</head>
<body>
	<div class="container">
		<a href="<?php echo site_url('c_petugas/form_input') ?>" class="btn btn-success">Tambah Data Petugas</a>
	<div id="body">
	<table class="table table-bordered">
		<tr class="bg-dark" style="color: white">
			<td>No</td>
			<td>Username</td>
			<td>Password</td>
			<td>Nama Petugas</td>
			<td>Level</td>
			<td>Opsi</td>
		</tr>
		<?php $i=1; ?>
		<?php foreach($user as $u) { ?>
		<tr>
			<td><?php echo $i; ?></td>
			<td><?php echo $u['username'] ?></td>
			<td><?php echo $u['password'] ?></td>
			<td><?php echo $u['nama_petugas'] ?></td>
			<td><?php echo $u['level'] ?></td>
			<td>
				<a href="<?php echo site_url('c_petugas/form_edit/'.$u['id_petugas']) ?>" class="btn btn-warning"><i class="far fa-edit"></i></a>
				<a href="<?php echo site_url('c_petugas/drop/'.$u['id_petugas']) ?>" onclick = "return confirm('mau hapus nih?')" class="btn btn-danger"><i class="far fa-trash-alt"></i></a>
			</td>
		</tr>

	<?php $i++; ?>
<?php } ?>
	</table>
		</div>
	</div>
</body>
</html>