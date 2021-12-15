<?php 
require "databaseadmin.php";
$menu = query("SELECT * FROM daftar");

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Halaman Menu Admin</title>
	<link rel="stylesheet" type="text/css" href="stylemenu.css">
</head>
<body>

	<div class="logo">
		<img src="YFR.png">
		<ul>
			<h5><li><a href="logout.php">Logout</a></li></h5>
		</ul>
	</div>
	<div class="navbar">
			<p><a href="menu1.php">Home</a></p>
			<p><a class="active" href="halamanadmin.php">Menu Makanan</a></p>
			<p><a href="contact.php">Contact Us</a></p>		
	</div>
	<div class="sidebar2">
		<div class="bar-item">
			<ul>
				<li><a href="makananadmin.php"><button type="submit" name="makanan" id="btn"><h5>Tambah Makanan</h5></button></a></li><br>
				<li><a href="minumanadmin.php"><button type="submit" name="makanan" id="btn"><h5>Tambah Minuman</h5></button></a></li>
			</ul>
		</div>
	</div>
			<div class="content">
			<table width=100% border="0" cellpadding="10" cellspacing="0">
				<tr>
					<th>No.</th>
					<th>Gambar</th>
					<th>Nama</th>
					<th>Harga</th>
					<th>Edit</th>
				</tr>

				<?php $i = 1; ?>
				<?php foreach ($menu as $row) : ?>
				<tr>
					<td><?= $i; ?>.</td>
					<td><img src="img/<?= $row["gambar"]; ?>" width="50" heigth="10"></td>
					<td><?= $row["nama"]; ?></td>
					<td><?= $row["harga"]; ?></td>
					<td>
						<a href="ubah.php?id=<?= $row["id"]; ?>">Ubah</a> 
						<a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('apakah anda yakin ingin menghapus data?');">Hapus</a>
					</td>
				</tr>
				<?php $i++; ?>
				<?php endforeach; ?>
			</table>
		</div>
		</div>
	
		
	<div class="clear"></div>
		
	</div>
</body>
</html>