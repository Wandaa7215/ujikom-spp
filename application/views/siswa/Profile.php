<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Profile | SPP Ujikom</title>
    <link rel="icon" href="<?php echo base_url('assets/img/icon_recon.png') ?>">
    <!-- CSS here -->
            <link rel="stylesheet" href="<?php echo base_url('assets/Siswa/css/bootstrap.min.css') ?>">
            <link rel="stylesheet" href="<?php echo base_url('assets/Siswa/css/owl.carousel.min.css') ?>">
            <link rel="stylesheet" href="<?php echo base_url('assets/Siswa/css/flaticon.css') ?>">
            <link rel="stylesheet" href="<?php echo base_url('assets/Siswa/css/slicknav.css') ?>">
            <link rel="stylesheet" href="<?php echo base_url('assets/Siswa/css/animate.min.css') ?>">
            <link rel="stylesheet" href="<?php echo base_url('assets/Siswa/css/magnific-popup.css') ?>">
            <link rel="stylesheet" href="<?php echo base_url('assets/Siswa/css/fontawesome-all.min.css') ?>">
            <link rel="stylesheet" href="<?php echo base_url('assets/Siswa/css/themify-icons.css') ?>">
            <link rel="stylesheet" href="<?php echo base_url('assets/Siswa/css/slick.css') ?>">
            <link rel="stylesheet" href="<?php echo base_url('assets/Siswa/css/nice-select.css') ?>">
            <link rel="stylesheet" href="<?php echo base_url('assets/Siswa/css/style.css') ?>">
</head>
<body>
    <header>
        <!-- Header Start -->
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
	<br><br><br><br>
    <div id="container">
	<div class="card w-50 mx-auto text-black">
    <div class="card-body">
		<h5 class="card-header">Profile</h5>
    <div class="form-row">

    		<div class="form-grup col-md-4">
    				<p>NIS</p>
    			</div>
    			<div class="form-grup col-md-4">
    				<p class="card-text"><?php echo $profile->nis; ?></p>
    			</div>
    		</div>
    		
    		<div class="row">
    			<div class="form-grup col-md-4">
    				<p>Nama</p>
    			</div>
    			<div class="form-grup col-md-4">
    				<p class="card-text"><?php echo $profile->nama; ?></p>
    			</div>
    		</div>

    		<div class="form-row">
    			<div class="form-grup col-md-4">
    				<p>Kelas</p>
    			</div>
    		    <div class="form-grup col-md-4">
    			    <p class="card-text"><?= $profile->nama_kelas.' '.$profile->kompetensi_keahlian; ?></p>
                </div>
            </div>

            <br><br>
            <center>
    		<a href="<?php echo site_url('LoginSiswa/logout') ?>" class="btn btn-sm btn-danger"><i class="fa fa-sign-out"></i>&nbsp;&nbsp;Logout</a>
            </center>
        </div>
	
</body>
</html>