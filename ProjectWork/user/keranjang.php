<?php
	session_start();
	
	include '../db.php';
    $produk = mysqli_query($conn, "SELECT * FROM tb_product, tb_category, tb_user, tb_purchase, tb_purchase_product");

    if(empty($_SESSION['keranjang']) OR !isset($_SESSION['keranjang'])){

    	echo '<script>alert("Keranjang kosong, silahkan belanja terlebih dahulu!")</script>';
		echo '<script>window.location="index.php"</script>';

    }

	$kontak = mysqli_query($conn, "SELECT admin_telp, admin_email, admin_address FROM tb_admin WHERE admin_id = 1");
	$a = mysqli_fetch_object($kontak);

	// echo "<pre>";
	// print_r($_SESSION['keranjang']);
	// echo "</pre>";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>K.O. | Keranjang Belanja</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
</head>
<body>
	<header>
		<div class="container">
			<img src="../img/logo.png" style="width: 200px; margin-top: 5px;">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="produk.php">Produk</a></li>
				<li><a href="keranjang.php">Keranjang</a></li>
				<?php if (isset($_SESSION['pelanggan'])): ?>
					<li><a href="checkout.php">Checkout</a></li>
					<li><a href="logout-user.php">Logout</a></li>
				<?php else: ?>
					<li><a href="login-user.php">Login</a></li>
				<?php endif ?>
			</ul>
		</div>
	</header>

	<div class="section">
		<div class="container">
			<h3>Keranjang Belanja</h3>
			<div class="box">
				<table border="1" cellspacing="0" class="table">
					<thead>
						<tr>
							<th>No</th>
							<th>Produk</th>
							<th>Harga</th>
							<th>Jumlah</th>
							<th>Subharga</th>
							<th width="110px">Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php $no = 1; ?>
						<?php $totalbelanja = 0; ?>
						<?php foreach ($_SESSION['keranjang'] as $id_produk => $jumlah): ?>
						<?php

							$ambil 		= mysqli_query($conn, "SELECT * FROM tb_product WHERE product_id = $id_produk");
							$pecah 		= mysqli_fetch_assoc($ambil);
							$subharga 	= $pecah['product_price']*$jumlah;

						?>
						<tr>
							<td><?php echo $no++; ?></td>
							<td><?php echo $pecah['product_name']; ?></td>
							<td>Rp. <?php echo number_format($pecah['product_price']); ?></td>
							<td><?php echo $jumlah; ?></td>
							<td>Rp. <?php echo number_format($subharga); ?></td>
							<td>
								<!-- <a href="?kurangi=<?php echo $id_produk ?>" class="btn4" style="width: 30px; margin-right: 5px;">-</a>
								<a href="?tambah=<?php echo $id_produk ?>" class="btn4" style="width: 30px">+</a>  style="width: 61%; float:right;"-->
								<a href="hapus-keranjang.php?id=<?php echo $id_produk ?>" class="btn4">Hapus</a>
							</td>
							<!-- <?php 

								if(isset($_GET['kurangi']) && is_numeric($_GET['kurangi'])){
									$_SESSION['keranjang'][$_GET['kurangi']]--;
								}elseif(isset($_GET['tambah']) && is_numeric($_GET['tambah'])){
									$_SESSION['keranjang'][$_GET['tambah']]++;
								};

							?> -->
						</tr>
						<?php endforeach ?>
					</tbody>
				</table><br>

				<a href="index.php" class="btn2">Lanjutkan Belanja</a>
				<a href="checkout.php" class="btn">Checkout</a>

			</div>
		</div>
	</div>

	<div style="width: 100%; position: absolute; bottom: 0px;" class="footer">
		<div class="container">
			<h4>Alamat</h4>
			<p><?php echo $a->admin_address ?></p>

			<h4>No. HP</h4>
			<p><?php echo $a->admin_telp ?></p>

			<h4>Email</h4>
			<p><?php echo $a->admin_email ?></p>

			<small>Copyright &copy; 2020 - Kantin Online</small>
		</div>
	</div>
	
</body>
</html>