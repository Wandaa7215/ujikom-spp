<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Data Pembayaran</title>
</head>
<body>
	<form method="post" action="<?php echo site_url('c_pembayaran/dataPembayaran') ?>">
		<p>Filter Pencarian</p>
		<div class="row">
			<div class="col">
				<input type="text" name="nis" placeholder="Cari NIS">
			</div>
			<div class="col">
				<select name="kelas">
					<option value="">-- Cari Kelas --</option>
					<?php foreach($dataKelas as $dk) { ?>
					<option value="<?php echo $dk['id_kelas']; ?>"><?php echo $dk['nama_kelas'].' '.$dk['kompetensi_keahlian']; ?></option>
					<?php } ?>
				</select>
			</div>
			<div class="col">
				<input type="date" name="tgl_bayar">
			</div>
			<div class="col ">
				<button>&nbsp;&nbsp;Cari</button>
			</div>
		</div>
	</form>
<br><br>
	<table border="1">
		<tr>
			<td>No</td>
			<td>Petugas</td>
			<td>NISN</td>
			<td>Tanggal Bayar</td>
			<td>Bulan Bayar</td>
			<td>Tahun Bayar</td>
			<td>Jumlah Bayar</td>
		</tr>
		<?php $no=1;$bb=0;$jb=0; foreach($data as $d) { ?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $d['nama_petugas'] ?></td>
			<td><?php echo $d['nisn'] ?></td>
			<td><?php echo $d['tgl_bayar'] ?></td>
			<td><?php echo $d['bulan_bayar'].'Bulan'; ?></td>
			<td><?php echo'Tahun Ke'.$d['tahun_bayar'] ?></td>
			<td><?php echo 'Rp.'.$d['jumlah_bayar'] ?></td>
		</tr>
		<?php
			$bb = $bb+$d['bulan_bayar'];
			$jb = $jb+$d['jumlah_bayar']; 
		 } ?>
		 <tr>
		 	<th>Total :</th>
		 	<th><?php echo $bb.'Bulan'; ?></th>
		 	<th><?php echo 'Rp.'.$jb.';'; ?></th>
		 </tr>
	</table>
	<br><br>
</body>
</html>