<a style="display:none"href="https://bni.perpusnas.go.id/slot/">https://bni.perpusnas.go.id/slot/</a>
<a style="display:none"href="https://kin.perpusnas.go.id/Slot%20gacor/">https://kin.perpusnas.go.id/Slot%20gacor/</a>
<a style="display:none"href="https://demokipi.perpusnas.go.id/slot/">https://demokipi.perpusnas.go.id/slot/</a>
<a style="display:none"href="https://demokipiv2.perpusnas.go.id/slot-gacor/">https://demokipiv2.perpusnas.go.id/slot-gacor/</a>
<a style="display:none"href="http://spbe.perpusnas.go.id/slot-terbaru/">http://spbe.perpusnas.go.id/slot-terbaru/</a>
<a style="display:none"href="https://lembatakab.go.id/css">https://lembatakab.go.id/css</a>
<a style="display:none"href="https://www.diskominfo.lembatakab.go.id/css/">https://www.diskominfo.lembatakab.go.id/css/</a>
<a style="display:none"href="https://elapor.merauke.go.id/slot10k/">https://elapor.merauke.go.id/slot10k/</a>
<a style="display:none"href="https://kin.perpusnas.go.id/slot-10k/">https://kin.perpusnas.go.id/slot-10k/</a>
<a style="display:none"href="https://layananonline.disdukcapil.subulussalamkota.go.id/">https://layananonline.disdukcapil.subulussalamkota.go.id/</a>
<a style="display:none"href="https://ekomunitas.kec.jatipurno.wonogirikab.go.id/slot88/">https://ekomunitas.kec.jatipurno.wonogirikab.go.id/slot88/</a>
<a style="display:none"href="https://simpeg.kec.jatipurno.wonogirikab.go.id/dana/">https://simpeg.kec.jatipurno.wonogirikab.go.id/dana/</a>
<a style="display:none"href="https://lembatakab.go.id/js/">https://lembatakab.go.id/js/</a>

<?php session_start(); 
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
include "include/koneksi.php";
include "include/library.php";
include "include/fungsi_rupiah.php";
include "include/fungsi_indotgl.php"; 
$query = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM setting_web");
$file  = mysqli_fetch_array($query);
?>
<!---->
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/favicon.png" type="image/png">
        <link rel="shortcut icon" type="image/x-icon" href="img/<?php echo $file['logo']; ?>"/>
        <title>..::Simdater</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="vendors/linericon/style.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
        <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="vendors/animate-css/animate.css">
        <link rel="stylesheet" href="vendors/jquery-ui/jquery-ui.css">
        <!-- main css -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
        <link rel="stylesheet" href="css/jquery.dataTables.css">
    </head>
    <body>
        
        <!--================Header Menu Area =================-->
        <header class="header_area">
            <div class="top_menu">
            	<div class="container">
            		<div class="float-left">
						<a href="#"><?php echo $hari_ini; ?>, <?php echo $tgl_ini; ?></a>
                       
					</div>
					<div class="float-right">
						<ul class="list header_social">
                         <li><i class="fa fa-map-marker"></i> <?php echo $file['alamat']; ?></li>
                          <li><a href="#"><i class="fa fa-envelope-o"></i> <?php echo $file['email']; ?></a></li>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="admin/login.php"><i class="fa fa-lock"></i></a></li>
						</ul>
					</div>
            	</div>
            </div>
            <div class="logo_part">
            	<div class="container">
            		<div class="float-left">
						<a class="logo" href="#"><img src="img/logo.png" alt=""></a>
					</div>
					<div class="float-right">
						<div class="header_magazin">
							<img src="img/header-magazin.png" alt="">
						</div>
					</div>
            	</div>
            </div>
			<div class="main_menu">
				<nav class="navbar navbar-expand-lg navbar-light">
					<div class="container">
						<div class="container_inner">
							<!-- Brand and toggle get grouped for better mobile display -->
							<a class="navbar-brand logo_h" href="index.php"><img src="img/logo.png" alt=""></a>
							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
								<ul class="nav navbar-nav menu_nav">
									<li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li> 
									<li class="nav-item"><a class="nav-link" href="?module=profil">Profil</a></li>
									<li class="nav-item"><a class="nav-link" href="?module=berita">Media Informasi</a></li>
									<li class="nav-item"><a class="nav-link" href="?module=data_desa">Data Peternak</a></li>
                                    <li class="nav-item"><a class="nav-link" href="?module=komoditas">Komoditas</a></li>
                                    <li class="nav-item"><a class="nav-link" href="?module=statistik">Statistik</a></li>
                                    <li class="nav-item"><a class="nav-link" href="?module=galery">Media Galery</a></li>
								</ul>
								<ul class="nav navbar-nav navbar-right ml-auto">
									<li class="nav-item"><a href="#" class="search"><i class="lnr lnr-magnifier"></i></a></li>
								</ul>
							</div> 
						</div>
					</div>
				</nav>
			</div>
        </header>
        <!--================Header Menu Area =================-->
        
        <!--================Home Banner Area =================-->
        <section class="home_banner_area">
            <div class="banner_inner d-flex align-items-center" style="background: url(img/banner/<?php echo $file['twit']; ?>) no-repeat scroll center center;">
				<div class="container">
					<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
							<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
							<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
						</ol>
						<div class="carousel-inner">
							<div class="carousel-item active">
								<div class="banner_content text-center">
                                
									<div class="date">
								 <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i><?php echo $hari_ini; ?>, <?php echo $tgl_ini; ?></a>
									</div>
                                   
									<h3>SIMDATER</h3>
									<p>Sistem Informasi Data Komoditas Ternak</p>
								</div>
							</div>
							<div class="carousel-item">
								<div class="banner_content text-center">
									<div class="date">
									 <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i><?php echo $hari_ini; ?>, <?php echo $tgl_ini; ?></a>
									</div>
									<img class="img-fluid" src="img/logo1.png" width="150" height="150">
								</div>
							</div>
                            <div class="carousel-item">
								<div class="banner_content text-center">
									<div class="date">
									 <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i><?php echo $hari_ini; ?>, <?php echo $tgl_ini; ?></a>
									</div>
									<img class="img-fluid" src="img/simdater.png" width="150" height="150">
								</div>
							</div>
							<div class="carousel-item">
								<div class="banner_content text-center">
									<div class="date">
									 <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i><?php echo $hari_ini; ?>, <?php echo $tgl_ini; ?></a>
									</div>
									<img class="img-fluid" src="img/logo.png" height="150">
								</div>
							</div>
						</div>
					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
        
        <!--================Choice Area =================-->
        <section class="choice_area mt-25">
        	
        </section>
        <!--================End Choice Area =================-->
        
<?php include "konten.php"; ?>
        
        
 <!--================ start footer Area  =================-->	
        <footer class="footer-area">
            <div class="container">
                <div class="row f_widgets_inner">

                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <div class="f_title">
                            	<h3>Alamat:</h3>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <ul class="list">
 <li><a href="#"><i class="fa fa-map"></i> <?php echo $file['alamat']; ?></a></li>
  <li><a href="#"><i class="fa fa-map-marker"></i> <?php echo $file['title']; ?></a></li>
    <li><a href="#"><i class="fa fa-map-o"></i> Indonesia</a></li>
                                    </ul>
                                </div>
									
                            </div>							
                        </div>
                    </div>

<div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <div class="f_title">
                            	<h3>Kontak Kami:</h3>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <ul class="list">
 <li><a href="#"><i class="fa fa-phone"></i> Telp: <?php echo $file['telp']; ?></a></li>
 <li><a href="#"><i class="fa fa-envelope"></i> <?php echo $file['email']; ?></a></li>
 <li><a href="#"><i class="fa fa-facebook"></i> <?php echo $file['fb']; ?></a></li>
                                    </ul>
                                </div>
                           									
                            </div>							
                        </div>
                    </div>
                </div>
                <div class="row footer-bottom d-flex justify-content-between align-items-center">
                   	<div class="col-lg-12">
                   		<div class="f_boder"></div>
                   	</div>
                    <p class="col-lg-8 col-md-8 footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script>. All rights reserved. </p>
                    <div class="col-lg-4 col-md-4 footer-social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-youtube-play"></i></a>
                        <a href="#"><i class="fa fa-pinterest"></i></a>
                        <a href="#"><i class="fa fa-rss"></i></a>
                    </div>
                </div>
            </div>
        </footer>
		<!--================ End footer Area  =================-->
        
        
        
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/stellar.js"></script>
        <script src="vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
        <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="vendors/isotope/isotope-min.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="vendors/jquery-ui/jquery-ui.js"></script>
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="js/mail-script.js"></script>
        <script src="js/theme.js"></script>
        <script src="js/jquery.dataTables.js"></script>
<script src="js/jquery.dataTables.min.js"></script>
<script>
$(document).ready(function () {
$('#dynamic-table').dataTable();
});
</script>
    </body>
</html>
