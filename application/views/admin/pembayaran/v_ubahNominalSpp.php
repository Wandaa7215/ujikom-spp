<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ubah Nominal SPP</title>
</head>
<body>
	<h5>Ubah Nominal SPP</h5>
	<form method="post" action="<?php echo site_url('c_pembayaran/ubahNominalSpp') ?>">
		
		<?php foreach($data as $d) { ?>
		<div class="form">
			<input type="checkbox" name="tahun">
		</div>
	</form>
	
</body>
</html>