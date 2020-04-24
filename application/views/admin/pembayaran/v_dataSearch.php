<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Data</title>
</head>
<body>
	<div class="search">
		<h2>data siswa</h2>
		- NISN<p><?php echo $dataSiswa->nisn ?></p>
		- NIS <p><?php echo $dataSiswa->nis ?></p>
		- Nama<p><?php echo $dataSiswa->nama ?></p>
		- Kelas<p><?php echo $dataSiswa->nama_kelas.' '.$dataSiswa->kompetensi_keahlian ?></p>	
		- Alamat<p><?php echo $dataSiswa->alamat ?></p>
		- Nomor Hp<p><?php echo $dataSiswa->no_telp ?></p>
		- SPP tahun ke<p><?php if ($dataSiswa->id_spp == 4){echo '0';}else{echo $dataSiswa->id_spp;} ?></p>
	</div>
	<br>
	<div class="col">
		<h2>Pembayaran SPP</h2>
		<form action="<?php echo site_url('c_pembayaran/pembayaranSpp/'.$dataSiswa->nisn) ?>" method="post">
			Jumlah Bulan Dibayar
			<select name="bulan" required="">
				<option value="">-- Pilih Berapa Bulan --</option>
				<option value="1">1 Bulan</option>
				<option value="2">2 Bulan</option>
				<option value="3">3 Bulan</option>
				<option value="4">4 Bulan</option>
				<option value="5">5 Bulan</option>
				<option value="6">6 Bulan</option>
				<option value="7">7 Bulan</option>
				<option value="8">8 Bulan</option>
				<option value="9">9 Bulan</option>
				<option value="10">10 Bulan</option>
				<option value="11">11 Bulan</option>
				<option value="12">12 Bulan</option>
			</select><br>
			Dibayar Tahun Ke : 
			<input type="text" name="tahun_bayar" value="<?php if($dataSiswa->id_spp == 4){echo '0';}else{echo $dataSiswa->id_spp;} ?>">
			<input type="hidden" name="id_spp" value="<?php echo $dataSiswa->id_spp ?>">
			<button>Simpan</button>
		</form>
	</div>
</body>
</html>