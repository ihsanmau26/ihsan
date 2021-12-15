<?php 
    session_start();
    error_reporting(0);
    include '../db.php';
    if($_SESSION['status_login']!= true){
       echo '<script>window.location="login-admin.php"</script>';
    }

	$kontak = mysqli_query($conn, "SELECT admin_telp, admin_email, admin_address FROM tb_admin WHERE admin_id = 1");
	$a = mysqli_fetch_object($kontak);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>K.O. | Detail Pembelian</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
</head>
<body>
	<header>
		<div class="container">
			<img src="../img/logo.png" style="width: 200px; margin-top: 5px;">
			<ul>
				<li><a href="dashboard.php">Dashboard</a></li>
				<li><a href="profil.php">Profil</a></li>
				<li><a href="data-kategori.php">Data Kategori</a></li>
				<li><a href="data-produk.php">Data Produk</a></li>
				<li><a href="pesanan.php">Pesanan</a></li>
				<li><a href="logout-admin.php">Logout</a></li>
			</ul>
		</div>
	</header>

	<div class="section">
		<div class="container">
			<h3>Pesanan</h3>
			<div class="box">
				<?php 

					$dapat	= mysqli_query($conn, "SELECT * FROM tb_purchase JOIN tb_user ON tb_purchase.user_id = tb_user.user_id WHERE tb_purchase.purchase_id = '".$_GET['id']."' ");
					$detail	= mysqli_fetch_assoc($dapat);

				?>	
				<!-- <pre><?php print_r($detail) ?></pre> -->		
				<!-- <pre><?php print_r($detail) ?></pre> -->
				<strong><p style="text-align: center; font-size: 20px;">ID Pembelian : <span style="color: #3356FF;"><?php echo $detail['purchase_id'] ?></span></p><br>	
				<p style="float: left;"></strong>
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
				</table><br>
				<form action="" method="POST" enctype="multipart/form-data">
							<button type="submit" name="status" value="1" class="btn3">Selesai</button>
						</form>
						<?php

							if(isset($_POST['status'])){

								$status = $_POST['status'];
								$update = mysqli_query($conn, "UPDATE tb_purchase SET purchase_status = '".$status."' WHERE purchase_id = '".$_GET['id']."' ");
								if($update){
										echo '<script>alert("Transaksi Selesai!")</script>';
										echo '<script>window.location="pesanan.php"</script>';
									}else{
										echo 'gagal '.mysqli_error($conn);
									}
							}

						?>
					</tbody>
			</div>
		</div>
	</div>

	<div style="width: 100%; position: absolute; bottom: 0px;" class="footer">
		<div class="container">
			<small>Copyright &copy; 2021 - Kantin Online</small>
		</div>
	</div>
	
</body>
</html>