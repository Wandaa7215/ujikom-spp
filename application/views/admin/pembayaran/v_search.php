<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>search</title>
</head>
<body>
	<?php echo form_open('c_pembayaran/prosesCariData') ?>
		<input type="text" name="nis" placeholder="Masukan nis">
		<button type="submit" name="search_submit">Search Data Siswa</button>
	<?php echo form_close() ?>
</body>
</html>