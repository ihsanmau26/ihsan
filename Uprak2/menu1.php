<?php 
	session_start();

	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		echo '<script language="javascript">alert("Anda harus Login!"); document.location="logout.php";</script>';
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Menu Utama Admin</title>
	<link rel="stylesheet" type="text/css" href="stylemenu.css">
</head>
<body>

	<div class="logo">
		<img src="YFR.png">
	</div>
	<div class="navbar">
			<p><a class="active" href="#">Home</a></p>
			<p><a href="halamanadmin.php">Menu Makanan</a></p>
			<p><a href="contact.php">Contact Us</a></p>		
	</div>
	<div class="sidebar">
		<br><h5>Artikel Nasi Goreng</h5>
		<p>Nasi goreng adalah sebuah makanan berupa nasi yang digoreng dan diaduk dalam minyak goreng, margarin, atau mentega. Biasanya ditambah kecap manis, bawang merah, bawang putih, asam jawa, lada dan bumbu-bumbu lainnya; seperti telur, ayam, dan kerupuk.<p>
	</div>
	<div class="main">
		<h1>Nasi Goreng</h1>
		<p>
			Nasi goreng juga dikenal sebagai masakan nasional Indonesia. Dari sekian banyak hidangan dalam khazanah Masakan Indonesia, hanya sedikit yang dapat dianggap sebagai makanan nasional sejati. Masakan nasional Indonesia ini tidak mengenal batasan kelas sosial. Nasi goreng dapat dinikmati secara sederhana di warung tepi jalan, gerobak penjaja keliling, hingga restoran dan meja prasmanan dalam pesta.<br>
		</p><p>
			Pada tahun 2011, sebuah polling Internet yang diadakan oleh CNN International dan diikuti oleh 35.000 orang menempatkan Nasi Goreng pada peringkat dua dalam daftar '50 Makanan Terlezat di Dunia' setelah rendang.
		</p>

		<h1>Sejarah Nasi Goreng</h1>
		<p>
			Nasi adalah sebuah bagian penting dari masakan tradisional Tionghoa, menurut catatan sejarah sudah mulai ada sejak 4000 SM. Nasi goreng kemudian tersebar ke Asia Tenggara dibawa oleh perantau-perantau Tionghoa yang menetap di sana dan menciptakan nasi goreng khas lokal yang didasarkan atas perbedaan bumbu-bumbu dan cara menggoreng. Nasi goreng sebenarnya muncul dari beberapa sifat dalam kebudayaan Tionghoa, yang tidak suka mencicipi makanan dingin dan juga membuang sisa makanan beberapa hari sebelumnya. Makanya, nasi yang dingin itu kemudian digoreng untuk dihidangkan kembali di meja makan.
		</p>
	</div>

</body>
</html>