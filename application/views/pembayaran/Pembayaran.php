<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Pembayaran</title>
	<link rel="icon" href="<?php echo base_url('assets/img/icon_recon.png') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/dist/css/bootstrap.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/dist/css/bootstrap.min.css') ?>"> 
	<style>
*{
	margin: 0;
	padding: 0;
}

.content-home{
	margin-left: 10%;
	width: 50%;
}
	</style>
</head>
<body>
	<br><br>
	<div class="content-home">
		<h2>Data Siswa</h2>
	</div>

	<div class="card">
		<div class="container">
			<div class="row" style="margin-top: 10px;margin-bottom: 10px;color: #444;">
				<div class="col">
					<?php 
						if ($siswa->id_spp == 4) {
							$spp = '<p>Belum Bayar</p>';
						}else{
	 						$spp = '<p>Tahun Ke '.$siswa->id_spp.'</p>';
					}
					?>

					<table>
						<tr>
							<td>NISN</td>
							<td style="width: 30px;text-align: center;">:</td>
							<td><?= $siswa->nisn?></td>
						</tr>
						<tr>
							<td>NIS</td>
							<td style="width: 30px;text-align: center;">:</td>
							<td><?= $siswa->nis?></td>
						</tr>
						<tr>
							<td>Nama</td>
							<td style="width: 30px;text-align: center;">:</td>
							<td><?= $siswa->nama?></td>
						</tr>
						<tr>
							<td>Alamat</td>
							<td style="width: 30px;text-align: center;">:</td>
							<td><?= $siswa->alamat?></td>
						</tr>
						<tr>
							<td>Nomor Telepon</td>
							<td style="width: 30px;text-align: center;">:</td>
							<td><?= $siswa->no_telp?></td>
						</tr>
						<tr>
							<td>Kelas</td>
							<td style="width: 30px;text-align: center;">:</td>
							<td><?= $siswa->nama_kelas.' '.$siswa->kompetensi_keahlian?></td>
						</tr>
						<tr>
							<td><?= $spp;?></td>
						</tr>
					</table>

				</div>
			</div>
		</div>
	</div>
	
	<center>
		<h5>Pembayaran SPP</h5>
	</center>
	
	<div class="row">
		<div class="col">
			<center><h6 style="padding: 10px;">Tahun Ke 1</h6></center>
			
			<div class="container">
				<?php 
					$no = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11'];
					$data_bulan_nomor = ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12'];
					$data_bulan_nama = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];

					foreach($no as $bn){
						$hitung = count((array)$ambil1[$bn]);
						if ($hitung > 0) {  ?>
							<div class="row" style="margin: 3px 0 3px 0;padding-top: 10px;border-radius: 2px;border: 1px solid rgba(2,2,2,.1);color: #333;background: rgba(200,200,200,.1);">
								<div class="col-md-4">
									<p style="text-align: left;"><?= $data_bulan_nama[$bn]; ?></p>
								</div>
								<div class="col">
									<button class="btn btn-sm btn-success">Sudah di Bayar</button>
								</div>
							</div>
						

					<?php }else{ ?>

					<form method="post" action="<?php echo site_url('Pembayaran/prosesBayarSpp/'.$siswa->nis) ?>">
						<div class="row" style="margin: 3px 0 3px 0;padding-top: 10px;border-radius: 2px;border: 1px solid rgba(2,2,2,.1);color: #333;">
							<div class="col-md-5">
								<p style="text-align: left;"><?= $data_bulan_nama[$bn]; ?></p>
								<input type="hidden" name="nisn" value="<?= $siswa->nisn ?>">
								<input type="hidden" name="nis" value="<?= $siswa->nis?>">
								<input type="hidden" name="bulan" value="<?= $data_bulan_nomor[$bn]; ?>">
								<input type="hidden" name="id_spp" value="1">
							</div>
							<div class="col"></div>
							<div class="col">
								<button class="btn btn-sm btn-danger">Bayar</button>
							</div>
						</div>
						
					</form>
				<?php }
				} ?>
			</div>
		</div>
				
				<!-- Pembayaran Kelas XI -->
			<div class="col">
				<center>
					<h6 style="padding: 10px;">Tahun Ke 2</h6>
				</center>

				<div class="ccontainer">
					<?php 
						foreach ($no as $bn2) {
							$hitung2 = count((array)$ambil2[$bn2]);
							if ($hitung2 > 0) { ?>
								<div class="row" style="margin: 3px 0 3px 0;padding-top: 10px;border-radius: 2px;border: 1px solid rgba(2,2,2,.1);color: #333;background: rgba(200,200,200,.1);">
									<div class="col-md-4">
										<p style="text-align: left;"><?= $data_bulan_nama[$bn2]; ?></p>
									</div>
									<div class="col">
										<button class="btn btn-sm btn-success">Sudah di Bayar</button>
									</div>
								</div>
					<?php 
						}else{ ?>


						<form method="post" action="<?= site_url('Pembayaran/prosesBayarSpp/'.$siswa->nis) ?>">
							<div class="row" style="margin: 3px 0 3px 0;padding-top: 10px;border-radius: 2px;border: 1px solid rgba(2,2,2,.1);color: #333;">
								<div class="col-md-5" >
									<p style="text-align: left;"><?= $data_bulan_nama[$bn2]; ?></p>
									<input type="hidden" name="nisn" value="<?= $siswa->nisn ?>">
									<input type="hidden" name="nis" value="<?= $siswa->nis?>">
									<input type="hidden" name="bulan" value="<?= $data_bulan_nomor[$bn2]; ?>">
									<input type="hidden" name="id_spp" value="2">

								</div>
								<div class="col"></div>
								<div class="col">
									<?php if ($numrows_1 < 12){ ?>
									<?php }else{ ?>
										<button class="btn btn-sm btn-danger">Bayar</button>
									<?php } ?>
								</div>
							</div>
						</form>
						<?php }
					} ?>
				</div>
			</div>
				
			<!-- pembayaran kelas XII -->
			<div class="col">
				<center>
					<h6 style="padding: 10px;">Tahun Ke 3</h6>
				</center>

				<div class="ccontainer">
					<?php 
						foreach ($no as $bn3) {
							$hitung3 = count((array)$ambil3[$bn3]);
							if ($hitung3 > 0) { ?>
								<div class="row" style="margin: 3px 0 3px 0;padding-top: 10px;border-radius: 2px;border: 1px solid rgba(2,2,2,.1);color: #333;background: rgba(200,200,200,.1);">
									<div class="col-md-4">
										<p style="text-align: left;"><?= $data_bulan_nama[$bn3]; ?></p>
									</div>
									<div class="col">
										<button class="btn btn-sm btn-success">Sudah di Bayar</button>
									</div>
								</div>
					<?php 
						}else{ ?>


						<form method="post" action="<?= site_url('Pembayaran/prosesBayarSpp/'.$siswa->nis) ?>">
							<div class="row" style="margin: 3px 0 3px 0;padding-top: 10px;border-radius: 2px;border: 1px solid rgba(2,2,2,.1);color: #333;">
								<div class="col-md-5" >
									<p style="text-align: left;"><?= $data_bulan_nama[$bn3]; ?></p>
									<input type="hidden" name="nisn" value="<?= $siswa->nisn ?>">
									<input type="hidden" name="nis" value="<?= $siswa->nis?>">
									<input type="hidden" name="bulan" value="<?= $data_bulan_nomor[$bn3]; ?>">
									<input type="hidden" name="id_spp" value="3">

								</div>
								<div class="col"></div>
								<div class="col">
									<?php if ($numrows_2 < 12){ ?>
									<?php }else{ ?>
										<button class="btn btn-sm btn-danger">Bayar</button>
									<?php } ?>
								</div>
							</div>
						</form>
						<?php }
					} ?>
				</div>
			</div>
		</div>
	</div>
	
</body>
</html>