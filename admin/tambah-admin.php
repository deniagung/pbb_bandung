<?php
	session_start();
	if(($_SESSION['sudahloginadmin']==true)&&($_SESSION['nama_admin']!="")){
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php
		include("../libs/koneksi.php");
	?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Disyanjak Kota Bandung</title>

	<!-- core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    <link href="../css/animate.min.css" rel="stylesheet">
    <link href="../css/prettyPhoto.css" rel="stylesheet">
    <link href="../css/main.css" rel="stylesheet">
    <link href="../css/responsive.css" rel="stylesheet">
    <link rel="shortcut icon" href="../images/ico/bdg.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../images/ico/bdg.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../images/ico/bdg.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../images/ico/bdg.png">
    <link rel="apple-touch-icon-precomposed" href="../images/ico/bdg.png">
    
</head><!--/head-->

<body class="homepage">

   <header id="header">

        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php">Daftar Pengajuan</a></li>
                        <li><a href="daftar-pembayaran.php">Daftar Pembayaran</a></li>
                        <li><a href="daftar-objek-pajak.php">Objek Pajak</a></li>
                        <li><a href="daftar-subjek-pajak.php">Subjek Pajak</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Tagihan<i class="fa fa-angle-down" style="padding-left:8px;"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="daftar-tagihan.php">Daftar Tagihan</a></li>
                                <li><a href="tambah-tagihan.php">Tambah Tagihan</a></li>
                            </ul>
                        </li>
                        <li class="active dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Admin<i class="fa fa-angle-down" style="padding-left:8px;"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="daftar-admin.php">Daftar Admin</a></li>
                                <li class="active"><a href="#">Tambah Admin</a></li>
                            </ul>
                        </li>
                        <li class=" dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $_SESSION['nama_admin'];?><i class="fa"><img src="../images/user.png" alt="" style="width:20px;height:20px;margin-left:15px; margin-bottom:4px;"></i></a>
                            <ul class="dropdown-menu">
                            	<li><a href="ubah-admin.php?nip=<?php echo $_SESSION['nip'];?>">Ubah Profil</a></li>
                                <li><a href="../libs/logout-admin.php">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
    </header><!--/header-->

    <section id="contact-page">
        <div class="container" style="min-height:420px;">
            <div class="center">
            	<h2></h2> 
                <h2>Tambah Data Admin</h2>
                <p class="lead">Pajak Bumi dan Bangunan</p>
            </div>
            <div class="row contact-wrap">
                <div class="col-sm-6 col-sm-offset-3">
	            	<form class="contact-form" method="post" action="../libs/tambah-admin.php">
                        <div class="form-group">
                            <label>NIP *</label>
                            <input type="text" name="nip" class="form-control" required maxlength="16" onkeypress="return event.charCode >= 48 && event.charCode <= 57"> 	
                        </div>
                        <div class="form-group">
                            <label>Password *</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Nama Lengkap *</label>
                            <input type="name" name="nama_admin" class="form-control" required onKeyPress="return (event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || event.charCode == 32">
                        </div>
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-primary btn-lg">Tambah</button>
                            <button type="Reset" name="Reset" class="btn btn-primary btn-lg">Reset</button>
                        </div>
                	</form>
                </div>
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#contact-page-->

    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div align="center">
                    &copy; 2016 <a target="_blank">Pajak Bumi Bangunan</a>.
                </div>
            </div>
        </div>
    </footer><!--/#footer-->

    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.prettyPhoto.js"></script>
    <script src="../js/jquery.isotope.min.js"></script>
    <script src="../js/main.js"></script>
    <script src="../js/wow.min.js"></script>
</body>
</html>
<?php
	}
	else{
		header("Location: login.php");
	}
?>
