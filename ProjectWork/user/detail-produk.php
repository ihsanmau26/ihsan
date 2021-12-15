<?php 
	session_start();
	error_reporting(0);
	include '../db.php';
    
	$kontak = mysqli_query($conn, "SELECT admin_telp, admin_email, admin_address FROM tb_admin WHERE admin_id = 1");
	$a = mysqli_fetch_object($kontak);

	$produk = mysqli_query($conn, "SELECT * FROM tb_product WHERE product_id = '".$_GET['id']."' ");
	$p = mysqli_fetch_object($produk);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>K.O. | Produk</title>
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

	<div class="search">
		<div class="container">
			<form action="produk.php" >
				<input type="text" name="search" placeholder="Cari Produk" value="<?php echo $_GET['search'] ?>">
				<input type="hidden" name="kat" value="<?php echo $_GET['kat'] ?>">
				<input type="submit" name="cari" value="Cari Produk">

			</form>
		</div>
	</div>

	<div class="section">
		<div class="container">
			<h3>Detail Produk</h3>
			<div class="box">
				<div class="col-2">
					<img src="../produk/<?php echo $p->product_image ?>" width="100%">
				</div>
				<div class="col-2">
					<h3><?php echo $p->product_name ?></h3>
					<h4>Rp. <?php echo number_format($p->product_price) ?></h4>
					<p>Deskripsi: <br>
						<?php echo $p->product_description ?>
					</p>
					<form method="POST">
					<input type="number" min="1" class="col-input" name="jumlah" style="width: 73%; margin-top:5px; text-align: center; font-size: 18px;">
					<button class="btn3" style="width: 25%; height: 33px;float: right;" name="beli">Beli</button>
					</form>
					<?php 

						if (isset($_POST['beli'])) {
							$id_produk = $_GET['id'];
							$jumlah = $_POST['jumlah'];
							$_SESSION['keranjang'][$id_produk] = $jumlah;

							echo '<script>alert("Produk berhasil ditambahkan ke keranjang belanja!")</script>';
							echo '<script>window.location="keranjang.php"</script>';
						}

					?>
				</div>
			</div>
		</div>
	</div>

	

	<div class="footer">
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