<?php 
        session_start();
        if($_SESSION['status']!="login"){
            header("location:login/login.php?pesan=belum_login");
        }
        ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="icon" href="" type="image/x-icon" />
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Kasulampua</title>
        <link rel="stylesheet" href="css/css.css">

        <!-- Icon css link -->
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        
        <!-- Rev slider css -->
        <link rel="stylesheet" href="css/style.css">

        
        <!-- Extra plugin css -->
        <link href="css/responsive.css" rel="stylesheet">

        <!-- Script -->
        <script src="js/Chart.js"></script>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <style>
        .tp-bullet {
            visibility: hidden;
        }
        .carousel-inner img {
            width: 100%;
            height: 100%;
  }
    </style>
    <body>
        
        <!--================Header Menu Area =================-->
        <header class="main_menu_area">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="#"><b>K A S U L A M P U A</b></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
    
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item active"><a class="nav-link" href="#" style="color: black;">Beranda</a></li>
                            <li class="nav-item dropdown submenu" style="color: #000000;">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: black;">
                                Data PDRB
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li class="nav-item"><a class="nav-link" href="kalimantan.html">Kalimantan</a></li>
                                    <li class="nav-item"><a class="nav-link" href="sulawesi.html">Sulawesi</a></li>
                                    <li class="nav-item"><a class="nav-link" href="maluku.html">Maluku</a></li>
                                    <li class="nav-item"><a class="nav-link" href="papua.html">Papua</a></li>
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="#"  style="color: black;">Infografis</a></li>
                            <li>
                                <form class="form-inline my-2 my-lg-0" style="padding-left:20px;">
                                    <input class="form-control mr-sm-2" type="search" placeholder="Cari" aria-label="Search">
                                    <button class="btn btn-primary" type="submit">Cari</button>
                            </li>
                            </form>
                        </ul>
                    </div>
                </nav>
        </header>
       
       
        <!--================End Header Menu Area =================-->
        
        
        <!--================Slider Area =================-->
        <br><br><br><br><br><br>
        <div class="container">
            <div id="demo" class="carousel slide" data-ride="carousel">

                <!-- Indicators -->
                <ul class="carousel-indicators">
                  <li data-target="#demo" data-slide-to="0" class="active"></li>
                  <li data-target="#demo" data-slide-to="1"></li>
                  <li data-target="#demo" data-slide-to="2"></li>
                  <li data-target="#demo" data-slide-to="3"></li>
                </ul>
                
                <!-- The slideshow -->
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="img/header/KALIMANTAN.jpg" class="img-thumbnail" alt="Cinque Terre" style="width: 100%; height: 450px;">
                    <div class="carousel-caption">
                        <h3>Kalimantan</h3>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="img/header/sulawesi.jpg" class="img-thumbnail" alt="Cinque Terre" style="width: 100%; height: 450px;">
                    <div class="carousel-caption">
                        <h3>Sulawesi</h3>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="img/header/maluku.jpg" class="img-thumbnail" alt="Cinque Terre" style="width: 100%; height: 450px;">
                    <div class="carousel-caption">
                        <h3>Maluku</h3>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="img/header/papua.jpg" class="img-thumbnail" alt="Cinque Terre" style="width: 100%; height: 450px;">
                    <div class="carousel-caption">
                        <h3>Papua</h3>
                    </div>
                  </div>
                </div>
                
                <!-- Left and right controls -->
                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                  <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next">
                  <span class="carousel-control-next-icon"></span>
                </a>
            </div>
        </div>
        
          
        <!--================End Slider Area =================-->
        
        <!--================The best slider Area =================-->
        <div class="container-fluid" style="background: white; margin-top: 100px;">
            <div class="row">
                <div class="col-sm-1">
                </div>
                <div class="col-md-4">
                    <h6>Data Terbaru</h6>
                    <h2>Data terbaru</h2>
                    <h2>Laju Pertumbuhan Ekonomi Triwulan III 2019</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem asperiores iste sint, veniam ut sed, ex neque laboriosam in suscipit est non assumenda quaerat, corporis fugit! Rem ab doloribus nulla!</p>
                    <button style="font-size:15px">Unduh <i class="fa fa-file-pdf-o" style="color:darkblue"></i></button>
                    <button style="font-size:15px">Unduh <i class="fa fa-file-excel-o" style="color:darkblue"></i></button>                       
                </div>
                <div class="col-md-6">
                    <canvas id="popChart2"></canvas>
                        <script>
                            var popCanvas = document.getElementById("popChart2");
                                    
                            Chart.defaults.global.defaultFontFamily = "Lato";
                            Chart.defaults.global.defaultFontSize = 12;
                            Chart.defaults.global.defaultFontColor = 'blue';
                                    
                            var barChart = new Chart(popCanvas, {
                            type: 'bar',
                            data: {
                            labels: ["Sulawesi Tenggara", "Sulawesi Selatan", "Sulawesi Tengah", "Sulawesi Utara", "Gorontalo", "Maluku", "Maluku Utara", "Papua", "Papua Barat"],
                            datasets: [{
                            label: 'Triwulan III',
                            data: [6.18, 7.15 , 8.15, 6.12, 6.19, 5.13, 6.18, 9.1, 4.21],
                            backgroundColor: [
                            'rgba(3, 121, 207, 1)',
                            'rgba(3, 121, 207, 1)',
                            'rgba(3, 121, 207, 1)',
                            'rgba(3, 121, 207, 1)',
                            'rgba(3, 121, 207, 1)',
                            'rgba(3, 121, 207, 1)',
                            'rgba(3, 121, 207, 1)',
                            'rgba(3, 121, 207, 1)',
                            'rgba(3, 121, 207, 1)'
                            ]
                            }]
                            },
                            options: {                  
                                legend: {                    
                                display: true,    
                                labels: {
                                boxWidth: 50,
                                fontColor: 'rgb(0, 0, 0)'
                                }
                                },
                                scales:{
                                    xAxes : [{
                                    gridLines:{
                                        display:false
                                    }
                                    }],
                                    yAxes : [{
                                    gridLines:{
                                        display:false
                                    }
                                    }]
                                }
                                }
                            });
                            </script> 
                </div>
                <div class="col-md-1">
                </div>
            </div>

        </div>
        
        <!--================End The best slider Area =================-->
        
        <!-- bagian berita -->

        <div class="container" style="margin-top: 50px;">
            <div class="row">
                <div class="col-lg-3">
                    <div class="card">
                        <img src="img/alam.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Masjid al-alam</h5>
                          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor ipsa mollitia molest</p>
                          <div class="d-flex justify-content-between align-items-center">
                              <div class="btn-group">
                                  <button type="button" class="btn btn-sm btn-outline-secondary"><a href="berita.html">Lihat Lengkapnya</a></button>
                                  <small class="text-muted" style="color: #6c757d; font: 12px arial; margin-left: 45px; margin-top: 10px;">9 mins</small>
                              </div>
          
                          </div>
                      </div>
                      </div>
                </div>  
            </div>
            </div>
           
        </div>

        <!-- end berita -->


        <!--================Team People Area =================-->
        <section class="team_people_area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="team_people_text">
                            <div class="l_title">
                                <h2>Tentang Kasulampua</h2>
                            </div>
                            <p>Kasulampua terdiri dari empat pulau, yakni Pulau Kalimantan, Sulawesi, Maluku dan Papua. 
                                Pulau Kalimantan terdiri dari lima provinsi, yakni Provinsi Kalimantan Barat, Kalimantan Tengah, Kalimantan Selatan, Kalimantan timur, dan Kalimantan Utara.
                                Pulau Sulawesi terdiri dari enam provinsi, yakni Provinsi Sulawesi Utara, Sulawesi 
                                Tengah, Sulawesi Selatan, Sulawesi Tenggara, Sulawesi Barat dan Gorontalo. Sementara
                                 Kepulauan Maluku terdiri dari dua provinsi, yakni Provinsi Maluku dan Maluku Utara. 
                                 Sedangkan Pulau Papua terdiri dari dua provinsi, yakni Provinsi Papua dan Papua Barat.</p>
                            
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="team_img_inner">
                            <div class="row">
                                <div class="col-lg-6 col-6">
                                    <div class="team_img_item">
                                        <img src="img/tentang/kalimantan_1.jpg" alt="Avatar" class="image"  style="height: 280px;">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-6">
                                    <div class="team_img_item">
                                        <img src="img/tentang/sulawesi_1.jpg" alt="" style="height: 280px;">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-6">
                                    <div class="team_img_item">
                                        <img src="img/tentang/maluku_1.jpg" alt="" style="height: 280px;">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-6">
                                    <div class="team_img_item">
                                        <img src="img/tentang/papua_1.jpg" alt="" style="height: 280px;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Team People Area =================-->
        
        <!--================Footer Area =================-->
        <!-- Footer -->
	<section class="footer" style="background-color: rgb(0, 0, 51, 0.9)">
		<div class="container">
			<div class="row text-center text-xs-center text-sm-left text-md-left">
				<div class="col-xs-12 col-sm-4 col-md-4">
					<ul class="list-unstyled quick-links">
						<p style="color: cornsilk;">Didukung Oleh :</p style="color: cornsilk;">
					</ul>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4">
                    <h6 style="color: cornsilk;">Pemerintah Daerah Provinsi</h6>
					<ul class="list-unstyled quick-links">
						<li  style="font-size: 14px;"><a href="https://sultra.bps.go.id"><i class="fa fa-angle-double-right"></i>Sulawesi Tenggara</a></li style="font-size: 14px;">
						<li  style="font-size: 14px;"><a href="https://sulsel.bps.go.id"><i class="fa fa-angle-double-right"></i>Sulawesi Selatan</a></li style="font-size: 14px;">
						<li  style="font-size: 14px;"><a href="https://sulteng.bps.go.id"><i class="fa fa-angle-double-right"></i>Sulawesi Tengah</a></li  style="font-size: 14px;">
						<li  style="font-size: 14px;"><a href="https://sulut.bps.go.id"><i class="fa fa-angle-double-right"></i>Sulawesi Utara</a></li  style="font-size: 14px;">
						<li  style="font-size: 14px;"><a href="https://sulbar.bps.go.id"><i class="fa fa-angle-double-right"></i>Sulawesi Barat</a></li  style="font-size: 14px;">
						<li  style="font-size: 14px;"><a href="https://gorontalo.bps.go.id"><i class="fa fa-angle-double-right"></i>Gorontalo</a></li  style="font-size: 14px;">
						<li  style="font-size: 14px;"><a href="https://maluku.bps.go.id"><i class="fa fa-angle-double-right"></i>Maluku</a></li  style="font-size: 14px;">
						<li  style="font-size: 14px;"><a href="https://malut.bps.go.id"><i class="fa fa-angle-double-right"></i>Maluku Utara</a></li  style="font-size: 14px;">
						<li  style="font-size: 14px;"><a href="https://papua.bps.go.id"><i class="fa fa-angle-double-right"></i>Papua</a></li  style="font-size: 14px;">
						<li  style="font-size: 14px;"><a href="https://papuabarat.bps.go.id"><i class="fa fa-angle-double-right"></i>Papua Barat</a></li  style="font-size: 14px;">
					</ul>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4">
                    <h6 style="color: cornsilk;">Badan Pusat Statistik</h5 style="color: cornsilk;">
					<ul class="list-unstyled quick-links">
						<li style="font-size: 14px;"><a href="https://sultra.bps.go.id"><i class="fa fa-angle-double-right"></i>BPS Sulawesi Tenggara</a></li>
						<li style="font-size: 14px;"><a href="https://sulsel.bps.go.id"><i class="fa fa-angle-double-right"></i>BPS Sulawesi Selatan</a></listyle="font-size: 14px;">
						<li style="font-size: 14px;"><a href="https://sulteng.bps.go.id"><i class="fa fa-angle-double-right"></i>BPS Sulawesi Tengah</a></listyle="font-size: 14px;">
						<li style="font-size: 14px;"><a href="https://sulut.bps.go.id"><i class="fa fa-angle-double-right"></i>BPS Sulawesi Utara</a></li>
						<li style="font-size: 14px;"><a href="https://sulbar.bps.go.id"><i class="fa fa-angle-double-right"></i>BPS Sulawesi Barat</a></li>
						<li style="font-size: 14px;"><a href="https://gorontalo.bps.go.id"><i class="fa fa-angle-double-right"></i>BPS Gorontalo</a></li>
						<li style="font-size: 14px;"><a href="https://maluku.bps.go.id"><i class="fa fa-angle-double-right"></i>BPS Maluku</a></li>
						<li style="font-size: 14px;"><a href="https://malut.bps.go.id"><i class="fa fa-angle-double-right"></i>BPS Maluku Utara</a></li>
						<li style="font-size: 14px;"><a href="https://papua.bps.go.id"><i class="fa fa-angle-double-right"></i>BPS Papua</a></li>
						<li style="font-size: 14px;"><a href="https://papuabarat.bps.go.id"><i class="fa fa-angle-double-right"></i>BPS Papua Barat</a></li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-4">
					<ul class="list-unstyled list-inline social text-center">
						<li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-facebook"></i></a></li>
						<li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-instagram"></i></a></li>
						<li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-google-plus"></i></a></li>
						<li class="list-inline-item"><a href="javascript:void();" target="_blank"><i class="fa fa-envelope"></i></a></li>
					</ul>
				</div>
				</hr>
			</div>	
		</div>
	</section>
	<!-- ./Footer -->
        <!--================End Footer Area =================-->
        
        
        
        
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquery-3.2.1.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <!-- Rev slider js -->
        <script src="vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
        <script src="vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.actions.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.video.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <!-- Extra plugin css -->
        <script src="vendors/counterup/jquery.waypoints.min.js"></script>
        <script src="vendors/counterup/jquery.counterup.min.js"></script> 
        <script src="vendors/counterup/apear.js"></script>
        <script src="vendors/counterup/countto.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="vendors/magnify-popup/jquery.magnific-popup.min.js"></script>
        <script src="js/smoothscroll.js"></script>
        
        <script src="js/theme.js"></script>
    </body>
</html>