<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Pembayaran</title>
</head>
<body>
	<a href="<?php echo site_url('c_pembayaran/form_input') ?>">Tambah</a>
	<table border="1">
		<tr>
			<td>NO</td>
			<td>Id Petugas</td>
			<td>NISN</td>
			<td>Tanggal Bayar</td>
			<td>Bulan Bayar</td>
			<td>Tahun Bayar</td>
			<td>Id SPP</td>
			<td>Jumlah Bayar</td>
			<td>Opsi</td>
		</tr>
		<?php $i=1; ?>
		<?php foreach($bayar as $b) { ?>
		<tr>
			<td><?php echo $i; ?></td>
			<td><?php echo $b['id_petugas'] ?></td>
			<td><?php echo $b['nisn'] ?></td>
			<td><?php echo $b['tgl_bayar'] ?></td>
			<td><?php echo $b['bulan_bayar'] ?></td>
			<td><?php echo $b['tahun_bayar'] ?></td>
			<td><?php echo $b['id_spp'] ?></td>
			<td><?php echo $b['jumlah_bayar'] ?></td>
			<td>
				<a href="<?php echo site_url('c_pembayaran/form_edit/'.$b['id_pembayaran']) ?>">edit</a>
				<a href="">hapus</a>
			</td>
		</tr>
	</table>
	<?php $i++; ?>
<?php } ?>
</body>
</html>