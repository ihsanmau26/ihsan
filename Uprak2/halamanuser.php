<?php 
require "databaseuser.php";
$menu = query("SELECT * FROM daftar");

if ( isset($_POST["makanan"]) ) {
	$menu = cari("makanan");
}
else if ( isset($_POST["minuman"])) {
	$menu = cari("minuman");
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Halaman Menu User</title>
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
			<p><a href="menu2.php">Home</a></p>
			<p><a class="active" href="halamanuser.php">Menu Makanan</a></p>
			<p><a href="contact2.php">Contact Us</a></p>		
	</div>
	<div class="sidebar2"><br>
		<ul>
			<form action="" method="post">
				<button type="submit" name="makanan" id="btn"><h5>Daftar Makanan</h5></button><br><br>
				<button type="submit" name="minuman" id="btn"><h5>Daftar Minuman</h5></button>
			</form>
		</ul>
	</div>
			<div class="content">
			<table width=100% border="1" cellpadding="10" cellspacing="0">
				<tr>
					<th>No.</th>
					<th>Gambar</th>
					<th>Nama</th>
					<th>Harga</th>
				</tr>

				<?php $i = 1; ?>
				<?php foreach ($menu as $row) : ?>
				<tr>
					<td align="center"><?= $i; ?>.</td>
					<td align="center" ><img src="img/<?= $row["gambar"]; ?>" width="80" heigth="40"></td>
					<td><?= $row["nama"]; ?></td>
					<td><?= $row["harga"]; ?></td>
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