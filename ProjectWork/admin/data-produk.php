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
	<title>K.O. | Data Produk</title>
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
			<h3>Data Produk</h3>
			<div class="box">
				<p style="margin-left: 2px;"><a class="btn3"style="font-size: 18px;" href="tambah-produk.php">Tambah Produk</a></p>
				<table border="1" cellspacing="0" class="table">
					<thead>
						<tr>
							<th width="60px">No</th>
							<th>Kategori</th>
							<th>Nama Produk</th>
							<th>Harga</th>
							<th>Gambar</th>
							<th>Status</th>
							<th width="150px">Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php 
						$no = 1;
							$produk = mysqli_query($conn, "SELECT * FROM tb_product LEFT JOIN tb_category USING (category_id) ORDER BY product_id DESC");
							if(mysqli_num_rows($produk) > 0){
							while($row = mysqli_fetch_array($produk)){
						?>
						<tr>
							<td><?php echo $no++ ?></td>
							<td><?php echo $row['category_name'] ?></td>
							<td><?php echo $row['product_name'] ?></td>
							<td>Rp. <?php echo number_format($row['product_price']) ?></td>
							<td><a href="../produk/<?php echo $row['product_image'] ?>" target="_blank"><img src="../produk/<?php echo $row['product_image'] ?>" width="50px"></a></td>
							<td><?php echo ($row['product_status'] == 0)? 'Tidak Aktif':'Aktif' ?></td>
							<td>
								<a href="edit-produk.php?id=<?php echo $row['product_id'] ?>" class="btn3" style="width: 60px; float: left; border: none; background-color: #4BCB2E;">Edit</a>
								<a href="proses-hapus.php?idp=<?php echo $row['product_id'] ?>" onclick="return confirm('Anda yakin ingin menghapus?')" class="btn4" style="width: 60px; float: right;">Hapus</a>
							</td>
						</tr>
						<?php }}else{ ?>

							<tr>
								<td colspan="7">Tidak ada data!</td>
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