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
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
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
                        <li class="active"><a href="#">Subjek Pajak</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Tagihan<i class="fa fa-angle-down" style="padding-left:8px;"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="daftar-tagihan.php">Daftar Tagihan</a></li>
                                <li><a href="tambah-tagihan.php">Tambah Tagihan</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Admin<i class="fa fa-angle-down" style="padding-left:8px;"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="daftar-admin.php">Daftar Admin</a></li>
                                <li><a href="tambah-admin.php">Tambah Admin</a></li>
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
                <h2>Daftar Subjek Pajak</h2>
                <p class="lead">Pajak Bumi dan Bangunan</p>
            </div>
            <div class="row contact-wrap">
            	<div class="col-sm-12"> 
                	<div class="col-sm-5">
                    </div>
                    <div class="col-sm-5">
                    </div>
                    <div class="col-sm-2">
                        <label>Cari</label>
                    	<input type="search" id="search" name="search" placeholder="Nomor KTP" class="form-control left" maxlength="20" onKeyUp="search()">
                    </div>
                </div>
            </div>
            <div id="hasil" class="row contact-wrap">
            	<table class="table">
                	<tbody>
                    <?php
						$link = koneksi_db();
						$sql = "select * from datasubjek";
						$res = $link->query($sql);
						if(mysqli_num_rows($res)==0){
					?>
                    	<tr class="table-row">
                            <td>
                            	<p class="center">Data Tidak Ditemukan</p>
                            </td>
                        </tr>
                    <?php
						} else {				
							while($row = mysqli_fetch_array($res)){
					?>
                        <tr class="table-row">
                            <td class="table-text">
                                <h4><?php echo $row['ktp_subjek'];?></h4>
                                <p><?php echo $row['nama_subjek'];?></p>
                            </td>
                            <td>
                            	<p></p>
                            </td>
                            <td>
                            	<p></p>
                            </td>
                            <td style="width:10px;padding:20px;padding-right:50px;">
                                <a href="ubah-subjek-pajak.php?ktp_subjek=<?php echo $row['ktp_subjek'];?>"><i class="fa fa-check-square-o icon_9"></i></a>
                            </td>
                            <td style="width:10px;padding:20px;">
                            	<a href="../libs/hapus-subjek-pajak.php?ktp_subjek=<?php echo $row['ktp_subjek'];?>"><i class="fa fa-times icon_9"></i></a>
                            </td>
                        </tr>
                        <?php } 
						} ?>
                	</tbody>
           		</table>
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
    <script>
		function search() {
			var ktp_subjek = document.getElementById("search").value;
			
			if (window.XMLHttpRequest) {
				// code for IE7+, Firefox, Chrome, Opera, Safari
				xmlhttp = new XMLHttpRequest();
			} else {
				// code for IE6, IE5
				xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}
			xmlhttp.onreadystatechange = function() {
				if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
					document.getElementById("hasil").innerHTML = xmlhttp.responseText;
				}
			};
			xmlhttp.open("GET","../libs/cari-subjek-pajak.php?ktp_subjek="+ktp_subjek,true);
			xmlhttp.send();
		}
	</script>
</body>
</html>
<?php
	}
	else{
		header("Location: login.php");
	}
?>
