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
	<title>K.O. | Dashboard</title>
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
			<h2 align="center">Selamat datang <span style="color: #3356FF;"><?php echo $_SESSION['a_global']->admin_name ?></span> di Kantin Online!</h2>
			<h3>Produk Anda</h3>
			<div class="box">
				<h4>Makanan</h4>
				<?php 
					$produk = mysqli_query($conn, "SELECT * FROM tb_product WHERE  category_id = 1 ORDER BY product_id");
					if(mysqli_num_rows($produk)){
						while($p = mysqli_fetch_array($produk)){
				?>
						<div class="col-4">
							<img src="../produk/<?php echo $p['product_image'] ?>">
							<p class="nama"><?php echo substr($p['product_name'], 0, 30) ?></p>
							<p class="harga">Rp. <?php echo number_format($p['product_price']) ?></p>
						</div>
				<?php }}else{ ?>
						<p>Tidak ada produk</p>
				<?php } ?>
				<h4>Minuman</h4>
				<?php 
					$produk = mysqli_query($conn, "SELECT * FROM tb_product WHERE category_id = 2 ORDER BY product_id");
					if(mysqli_num_rows($produk)){
						while($p = mysqli_fetch_array($produk)){
				?>
						<div class="col-4">
							<img src="../produk/<?php echo $p['product_image'] ?>">
							<p class="nama"><?php echo substr($p['product_name'], 0, 30) ?></p>
							<p class="harga">Rp. <?php echo number_format($p['product_price']) ?></p>
						</div>
				<?php }}else{ ?>
						<p>Tidak ada produk</p>
				<?php } ?>
				<h4>Camilan</h4>
				<?php 
					$produk = mysqli_query($conn, "SELECT * FROM tb_product WHERE category_id = 3 ORDER BY product_id");
					if(mysqli_num_rows($produk)){
						while($p = mysqli_fetch_array($produk)){
				?>
						<div class="col-4">
							<img src="../produk/<?php echo $p['product_image'] ?>">
							<p class="nama"><?php echo substr($p['product_name'], 0, 30) ?></p>
							<p class="harga">Rp. <?php echo number_format($p['product_price']) ?></p>
						</div>
				<?php }}else{ ?>
						<p>Tidak ada produk</p>
				<?php } ?>
			</div>
		</div>
	</div>

	<div class="footer">
		<div class="container">
			<small>Copyright &copy; 2021 - Kantin Online</small>
		</div>
	</div>
	
</body>
</html>