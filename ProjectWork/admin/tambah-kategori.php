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
	<title>K.O. | Tambah Data Kategori</title>
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
			<h3>Tambah Data Kategori</h3>
			<div class="box">
				<form action="" method="POST">
					<input type="text" name="nama" placeholder="Nama Kategori" class="input-control" required>
					<input type="submit" name="submit" value="Submit" class="btn">
				</form>
				<?php
					if(isset($_POST['submit'])){

						$nama = ucwords($_POST['nama']);

						$insert = mysqli_query($conn, "INSERT INTO tb_category VALUES(
												null,
												'".$nama."') ");
						if($insert){
							echo '<script>alert("Tambah data berhasil!")</script>';
							echo '<script>window.location="data-kategori.php"</script>';
						}else{
							echo 'gagal '.mysqli_error($conn);
						}
					}
				?>
			</div>
		</div>
	</div>

	<div class="footer" style="width: 100%; position: absolute; bottom: 0px;">
		<div class="container">
			<small>Copyright &copy; 2021 - Kantin Online</small>
		</div>
	</div>
	
</body>
</html>