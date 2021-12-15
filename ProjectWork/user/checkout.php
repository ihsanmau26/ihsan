<?php 

	session_start();
	include '../db.php';

	$koneksi = new mysqli("localhost", "root", "", "db_kantin");

	if(!isset($_SESSION['pelanggan'])){
		echo '<script>alert("Silahkan login!")</script>';
		echo '<script>window.location="login-user.php"</script>';
	}
	if(empty($_SESSION['keranjang']) OR !isset($_SESSION['keranjang'])){
		echo '<script>window.location="index.php"</script>';
    }

	$kontak = mysqli_query($conn, "SELECT admin_telp, admin_email, admin_address FROM tb_admin WHERE admin_id = 1");
	$a = mysqli_fetch_object($kontak);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>K.O. | Checkout</title>
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
						</tr>
						<?php $totalbelanja += $subharga; ?>
						<?php endforeach ?>
					</tbody>
					<tfoot>
						<tr style="text-align: left;">
							<th colspan="4" style="padding-left: 5px;">Total Belanja</th>
							<th style="padding-left: 10px;">Rp. <?php echo number_format($totalbelanja) ?></th>
						</tr>
					</tfoot>
				</table><br>

				<form action="" method="POST">
					
					<div class="row">
							<input type="text" readonly class="input-control" value="<?php echo $_SESSION['pelanggan']['user_name'] ?>" style="width: 32.5%;">
							<input type="text" readonly class="input-control" value="<?php echo $_SESSION['pelanggan']['user_telp'] ?>" style="width: 32.5%; float: right;">
							<input type="text" readonly class="input-control" value="<?php echo $_SESSION['pelanggan']['user_class'] ?>" style="width: 32.5%; float: right; margin-right: 13px;">
					</div>
					<button class="btn" name="submit">Checkout</button>
				</form>

				<?php 

					if(isset($_POST['submit'])){
						$id_pelanggan = $_SESSION['pelanggan']['user_id'];
						$tanggal_pembelian = date("Y-m-d");
						$status = 0;
						$insert = mysqli_query($conn, "INSERT INTO tb_purchase VALUES (
							null, 
							'".$id_pelanggan."',
							'".$tanggal_pembelian."',
							'".$totalbelanja."',
							'".$status."') ");
						
						$id_pembelian = mysqli_insert_id($conn);

						foreach ($_SESSION['keranjang'] as $id_produk => $jumlah){
							$insert = mysqli_query($conn, "INSERT INTO tb_product_purchase VALUES (
							null, 
							'".$id_pembelian."',
							'".$id_produk."',
							'".$jumlah."') ");
						}

						unset($_SESSION['keranjang']);

						echo '<script>alert("Pembelian berhasil! Terima kasih telah berbelanja di toko kami. ")</script>';
						echo "<script>window.location='nota.php?id=$id_pembelian';</script>";
					}

				?>

			</div>
		</div>
	</div>

	<!-- <pre>
		<?php echo print_r($_SESSION['pelanggan']); ?>
		<?php echo print_r($_SESSION['keranjang']); ?>
	</pre> -->
	<div class="footer" style="margin-top: 16px;">
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