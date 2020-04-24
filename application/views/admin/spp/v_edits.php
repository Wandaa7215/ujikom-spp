<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Edit</title>
	<link rel="icon" href="<?php echo base_url('assets/img/icon_recon.png') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/dist/css/bootstrap.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/dist/css/bootstrap.min.css') ?>">
</head>
<body>
	<div class="container">
		<div class="card w-50 mx-auto">
			<div class="card-header">
				<center><h1>Edit SPP</h1></center>
			</div>

		<?php if ($dataEdit) {
			$id_spp = $dataEdit->id_spp;
			$tahun = $dataEdit->tahun;
			$nominal = $dataEdit->nominal;
		}else{
			$tahun = "";
			$nominal ="";
		} ?>
		<form action="<?php echo site_url('c_spp/update/'.$id_spp) ?>" method="POST">
			
			<div class="col">
				Tahun <input type="text" name="tahun" value="<?php echo $tahun ?>" class="form-control">
			</div>

			<div class="col">
				Nominal <input type="text" name="nominal" value="<?php echo $nominal ?>" class="form-control">
			</div>
		
			<div class="card-footer text-muted">
				<div class="row text-center">
					<div class="form-group col-md-6">
						<button class="btn btn-success" type="submit" name="edit">Edit</button>
					</div>
				
				<div class="form-group col-md-6">
					<a href="<?php echo site_url('welcome/spp') ?>" class="btn btn-warning">Kembali</a>
				</div>
			</div>	
			</div>
		</form>
	</div>
</div>	
</body>
</html>