<?php 
    session_start();
    error_reporting(0);
    include '../db.php';
    if($_SESSION['status_login']!= true){
       echo '<script>window.location="login-admin.php"</script>';
    } 

    $kategori = mysqli_query($conn, "SELECT * FROM tb_category WHERE category_id = '".$_GET['id']."' ");
    if(mysqli_num_rows($kategori) == 0){
    	echo '<script>window.location="data-kategori.php"</script>';
    }
    $k = mysqli_fetch_object($kategori);

    $kontak = mysqli_query($conn, "SELECT admin_telp, admin_email, admin_address FROM tb_admin WHERE admin_id = 1");
	 $a = mysqli_fetch_object($kontak);

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>K.O. | Edit Data Kategori</title>
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
			<h3>Edit Data Kategori</h3>
			<div class="box">
				<form action="" method="POST">
					<input type="text" name="nama" placeholder="Nama Kategori" class="input-control" value="<?php echo $k->category_name ?>" required>
					<input type="submit" name="submit" value="Submit" class="btn">
				</form>
				<?php
					if(isset($_POST['submit'])){

						$nama = ucwords($_POST['nama']);

						$update = mysqli_query($conn, "UPDATE tb_category SET
												category_name = '".$nama."'
												WHERE category_id =  '".$k->category_id."' ");

						if($update){
							echo '<script>alert("Edit data berhasil!")</script>';
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