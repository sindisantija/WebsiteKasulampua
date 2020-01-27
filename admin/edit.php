<?php
    require 'functions.php';

    $id = $_GET["id"];

    $brt = query("SELECT * FROM olah_data  WHERE id=$id")[0];

    if ( isset($_POST["submit"])){
        if (edit($_POST) > 0){
            echo "
                <script>
                    alert('data berhasil diedit!');
                    document.location.href = 'dashboard.php';
                </script>
            ";
        }else{
            echo "
                <script>
                    alert('data gagal diedit!');
                    document.location.href = 'dashboard.php';
                </script>
            ";
        }
    }

?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Light Bootstrap Dashboard by Creative Tim</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">

    <!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->


    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text">
                    Halaman Admin
                </a>
            </div>

            <ul class="nav">
                <li>
                    <a href="dashboard.php">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard Admin</p>
                    </a>
                </li>
                <li class="active">
                    <a href="tambahberita.php">
                        <i class="pe-7s-user"></i>
                        <p>Tambah Data</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>

    <div class="main-panel">
		<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Edit Berita</h4>
                            </div>
                            <div class="content">
                                <form action="" method="post">
                                    <input type="hidden" name="id" value="<?= $brt["id"]; ?>">
                                    <ul>
                                        <li>
                                            <label for="judul">Judul :</label>
                                            <input type="text" name="judul" id="judul" required 
                                            value="<?= $brt["judul"]; ?>">
                                        </li>
                                        <li>
                                            <label for="waktu">Waktu :</label>
                                            <input type="datetime-local" name="waktu" id="waktu" required value="<?= $brt["waktu"]; ?>">
                                        </li>
                                        <li>
                                            <label for="penulis">Penulis :</label>
                                            <input type="text" name="penulis" id="penulis" required value="<?= $brt["penulis"]; ?>">
                                        </li>
                                        <li>
                                            <label for="headline">Headline :</label>
                                            <input type="text" name="headline" id="headline" required value="<?= $brt["headline"]; ?>">
                                        </li>
                                        <li>
                                            <label for="isi">Isi :</label>
                                            <input type="text" name="isi" id="isi" required value="<?= $brt["isi"]; ?>">
                                        </li>
                                        <li>
                                            <label for="gambar">Gambar :</label>
                                            <input type="text" name="gambar" id="gambar" required value="<?= $brt["gambar"]; ?>">
                                        </li>
                                        <li>
                                            <button type="submit" name="submit">Edit Berita</button>
                                        </li>
                                    </ul>
                                </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>

</html>
