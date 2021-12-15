<?php 
   session_start();
	include '../db.php';
	error_reporting(0);
	$koneksi = new mysqli("localhost", "root", "", "db_kantin");

	if(!isset($_SESSION['pelanggan'])){
		echo '<script>alert("Silahkan login!")</script>';
		echo '<script>window.location="login-user.php"</script>';
	}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>K.O. | Nota</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
</head>
<body>
	<div class="alert">
	  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
	  <strong>Info!</strong> Screenshot halaman ini, sebagai bukti pemesanan untuk ditunjukan kepada penjual.
	</div>

	<div class="section">
		<div class="container">
			<div class="box">
				<img src="../img/logo2.png" align="center" style="width: 250px; display: block; margin-left: auto; margin-right: auto;">
				<?php 

					$dapat	= mysqli_query($conn, "SELECT * FROM tb_purchase JOIN tb_user ON tb_purchase.user_id = tb_user.user_id WHERE tb_purchase.purchase_id = '".$_GET['id']."' ");
					$detail	= mysqli_fetch_assoc($dapat);

				?>	
				<!-- <pre><?php print_r($detail) ?></pre> -->
				<strong><p style="text-align: center; font-size: 20px; border-top: 1px solid #ccc; padding-top: 25px;">ID Pembelian : <span style="color: #3356FF;"><?php echo $detail['purchase_id'] ?></span></p><br>
				<p style="float: left;">
					Nama : <strong><?php echo $detail['user_name']; ?></strong><br>
					NIS/NIK : <?php echo $detail['username'] ?>
				</p>
				<p style="float: right;">
					Total : <span style="color: red;">Rp. <?php echo number_format($detail['purchase_total']); ?></span><br>
					Tanggal : <?php echo $detail['purchase_date']; ?>
				</p>
				<p style="float: right; margin-bottom: 10px; margin-right: 275px;">
					Kelas : <?php echo $detail['user_class']; ?><br>
					Telepon : <?php echo $detail['user_telp']; ?>
				</p>
				
				<table border="1" cellspacing="0" class="table">
					<thead>
							<tr>
							<th>No.</th>
							<th>Nama Produk</th>
							<th>Harga</th>
							<th>Jumlah</th>
							<th>Subharga</th>
						</tr>
					</thead>
					<tbody>
						<?php $no = 1; ?>
						<?php $ambil = mysqli_query($conn, "SELECT * FROM tb_product_purchase JOIN tb_product ON tb_product_purchase.product_id = tb_product.product_id WHERE tb_product_purchase.purchase_id = '".$_GET['id']."' "); ?>
						<?php while($pecah = mysqli_fetch_assoc($ambil)){ ?>
						<tr>
							<td><?php echo $no++; ?></td>
							<td><?php echo $pecah['product_name']; ?></td>
							<td><?php echo number_format($pecah['product_price']); ?></td>
							<td><?php echo $pecah['jumlah']; ?></td>
							<td><?php echo number_format($pecah['product_price']*$pecah['jumlah']); ?></td>
						</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>

	<a href="logout-user.php" class="btn" style="float: right; margin: -30px 140px 0px 0px;">Logout</a>

</body>
</html>
<?php session_destroy(); ?>