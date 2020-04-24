<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>SPP</title>
	<link rel="icon" href="<?php echo base_url('assets/img/icon_recon.png') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/vendor/fontawesome-free/css/all.min.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/dist/css/bootstrap.min.css') ?>">
</head>
<body>
	<div class="container">
	<a href="<?php echo site_url('c_spp/form_input') ?>" class="btn btn-success">Tambah Data SPP</a>
	<div id="body">
	<table class="table table-bordered">
		<tr class="bg-dark" style="color: white">
			<td>No</td>
			<td>Tahun</td>
			<td>Nominal</td>
			<td>Opsi</td>
		</tr>
		<?php $i=1; ?>
		<?php foreach($spp as $s) { ?>
		<tr>
			<td><?php echo $i; ?></td>
			<td><?php echo $s['tahun'] ?></td>
			<td><?php echo $s['nominal'] ?></td>
			<td>
				<a href="<?php echo site_url('c_spp/form_edit/'.$s['id_spp']) ?>" class="btn btn-warning"><i class="far fa-edit"></i></a>
				<a href="<?php echo site_url('c_petugas/drop/'.$s['id_spp']) ?>" onclick = "return confirm('mau hapus nih?')" class="btn btn-danger"><i class="far fa-trash-alt"></i></a>
			</td>
		</tr>

	<?php $i++; ?>
<?php } ?>
	</table>
	</div>
</div>
</body>
</html>