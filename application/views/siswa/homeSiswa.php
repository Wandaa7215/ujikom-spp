<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Home Siswa</title>
	<link rel="icon" href="<?php echo base_url('assets/img/icon_recon.png') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/dist/css/bootstrap.min.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/Siswa/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/Siswa/css/style.css') ?>">
</head>
<body>
	<header>
		 <div class="header-area header-transparrent ">
            <div class="main-header header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                
                        <div class="col-xl-8 col-lg-8 col-md-8">
                            <!-- Main-menu -->
                            <div class="main-menu f-right d-none d-lg-block">
                                <nav> 
                                    <ul id="navigation">    
                                        <li><a href="<?php echo site_url('LoginSiswa/home') ?>">Home</a></li>
                                        <li><a href="<?php echo site_url('LoginSiswa/tentangSpp') ?>">Tentang SPP</a></li>
                                        <li><a href="<?php echo site_url('LoginSiswa/homeSiswa') ?>">Data Pembayaran SPP</a></li>
                                        <li><a href="<?php echo site_url('LoginSiswa/profile') ?>">Profile</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
       </div>
        <!-- Header End -->
    </header>
	</header>
	<div class="container">

		<nav class="navbar navbar-expand navbar-light bg-light static-top">
			<ul class="navbar-nav">
				<li class="nav-item">
					<h6></h6><br><br>
				</li>
			</ul>
		</nav>
		
		<div class="col">
			
		</div>

		<?php $bulan = ['Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember']; ?>
		<div class="container" style="border: 1px solid rgba(2,2,2,.1);border-radius: 2px;">
			<div class="row">
				<div class="col">
					<center><h6>Kelas X</h6></center>

				<div class="container">
					<?php 
						for ($i=0; $i < 12; $i++) {
						$cek1 = count((array)$spp_tahun1[$i]);
						if ($cek1 > 0) { ?>

				<div class="row">
					<div class="col">
						<p ><?php echo $bulan[$i]; ?></p>
					</div>
					<div class="col">
						<button readonly="" class="btn btn-sm btn-success">Sudah di Bayar</button>
					</div>
				</div>
			<?php }else{ ?>
				
			<div class="row">
				<div class="col">
					<p><?php echo $bulan[$i]; ?></p>
				</div>
			<div class="col">
				<button readonly="" class="btn btn-sm btn-danger">Belum Pembayaran</button>
			</div>
		</div>
	<?php }
	} ?>
	</div>
</div>
		
		<!-- KELAS XI -->
		<div class="col">
			<center><h6>Kelas XI</h6></center>

		<div class="container">
			<?php 
				for ($i=0; $i < 12; $i++) {
				$cek1 = count((array)$spp_tahun2[$i]);
				if ($cek1 > 0) { ?>

		<div class="row" >
			<div class="col">
				<p ><?php echo $bulan[$i]; ?></p>
			</div>
			<div class="col">
				<button readonly="" class="btn btn-sm btn-success">Sudah di Bayar</button>
			</div>
		</div>

	<?php }else{ ?>
				
		<div class="row">
			<div class="col">
				<p><?php echo $bulan[$i]; ?></p>
			</div>
			<div class="col">
				<button readonly="" class="btn btn-sm btn-danger">Belum Pembayaran</button>
			</div>
		</div>
	<?php }
	} ?>
	</div><br>
</div>


		<!-- Kelas XII -->
		<div class="col">
			<center><h6>Kelas XII</h6></center>
			
			<div class="container">
				<?php 
					for ($i=0; $i < 12; $i++) {
					$cek1 = count((array)$spp_tahun3[$i]);
					if ($cek1 > 0) { ?>
			<div class="row" >
				<div class="col">
					<p ><?php echo $bulan[$i]; ?></p>
				</div>
			<div class="col">
				<button readonly="" class="btn btn-sm btn-success">Sudah di Bayar</button>
			</div>
		</div>

	<?php }else{ ?>
			
		<div class="row">
			<div class="col">
				<p><?php echo $bulan[$i]; ?></p>
			</div>
			<div class="col">
				<button readonly="" class="btn btn-sm btn-danger">Belum Pembayaran</button>
			</div>
		</div>
	<?php }
	} ?>
	</div>
</div>
	
	 <!-- All JS Custom Plugins Link Here here -->
        <script src="<?php echo base_url('./assets/Siswa/js/vendor/modernizr-3.5.0.min.js') ?>"></script>

        <!-- Jquery, Popper, Bootstrap -->
        <script src="<?php echo base_url('./assets/Siswa/js/vendor/jquery-1.12.4.min.js') ?>"></script>
        <script src="<?php echo base_url('./assets/Siswa/js/popper.min.js') ?>"></script>
        <script src="<?php echo base_url('./assets/Siswa/js/bootstrap.min.js') ?>"></script>

        <!-- Jquery Mobile Menu -->
        <script src="<?php echo base_url('./assets/Siswa/js/jquery.slicknav.min.js') ?>"></script>

        <!-- Jquery Plugins, main Jquery -->    
        <script src="<?php echo base_url('./assets/Siswa/js/plugins.js') ?>"></script>
        <script src="<?php echo base_url('./assets/Siswa/js/main.js') ?>"></script>
    
		
</body>
</html>