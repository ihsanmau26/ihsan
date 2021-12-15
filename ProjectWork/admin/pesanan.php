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
	<title>K.O. | Pesanan</title>
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
				<table border="1" cellspacing="0" class="table">
					<thead>
							<tr>
							<th>No.</th>
							<th>Nama Pembeli</th>
							<th>ID</th>
							<th>Tanggal</th>
							<th>Total</th>
							<th>Status</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php $no = 1; ?>
						<?php $ambil = mysqli_query($conn, "SELECT * FROM tb_purchase JOIN tb_user ON tb_purchase.user_id = tb_user.user_id ORDER BY purchase_id DESC"); ?>
						<?php while($pecah = mysqli_fetch_assoc($ambil)){ ?>
						<tr>
							<td><?php echo $no++; ?></td>
							<td><?php echo $pecah['user_name']; ?></td>
							<td align="center"><?php echo $pecah['purchase_id']; ?></td>
							<td><?php echo $pecah['purchase_date']; ?></td>
							<td>Rp. <?php echo number_format($pecah['purchase_total']); ?></td>
							<td><?php echo ($pecah['purchase_status'] == 0)? 'Belum Bayar':'Selesai' ?></td>
							<td>
								<a href="detail-pembelian.php?id=<?php echo $pecah['purchase_id']; ?>" class="btn3">Detail</a>
							</td>
						</tr>
						<?php } ?>
					</tbody>
				</table>
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