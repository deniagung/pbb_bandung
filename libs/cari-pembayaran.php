<!DOCTYPE html>
<html>
<head>
	<!-- core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    <link href="../css/animate.min.css" rel="stylesheet">
    <link href="../css/prettyPhoto.css" rel="stylesheet">
    <link href="../css/main.css" rel="stylesheet">
    <link href="../css/responsive.css" rel="stylesheet">
</head>
<body>
	<?php
		$status = $_GET['status'];
		$sql = "select * from pembayaran where status = '$status' order by id_pembayaran";
		include("koneksi.php");
	?>
	<table class="table">
    	<tbody>
        <?php
			$link = koneksi_db();
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
                    <h4>Pembayaran #<?php echo $row['id_pembayaran'];?></h4>
                    <h6>NOP <?php echo $row['nop'];?> - <?php echo $row['tahun_pajak'];?></h6>
                </td>
                <td>
                    <p></p>
                </td>
                <td>
                    <p></p>
                </td>
                <td>
                    <p></p>
                </td>
                <td style="width:10px;padding:20px;">
                    <a href="data-pembayaran.php?id_pembayaran=<?php echo $row['id_pembayaran'];?>"><i class="fa fa-check-square-o icon_9"></i></a>
                </td>
            </tr>
		<?php }
        } ?>
        </tbody>
    </table>
</body>
</html>