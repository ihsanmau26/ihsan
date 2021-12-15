<?php  
require 'koneklogin.php';
// cek apakah tombol submit sudah ditekan apa belum

// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		echo '<script language="javascript">alert("Anda harus Login!"); document.location="logout.php";</script>';
	}

if (isset($_POST["submit"])) {

	// cek apakah data berhasil ditambahkan atau tidak
	if(kontak($_POST) > 0){
		echo "
			<script>
				alert('data berhasil ditambahkan');
				document.location.href = 'menu1.php';
			</script>
		";
	}else{
		echo "
			<script>
				alert('data gagal ditambahkan');
				document.location.href = 'menu1.php';
			</script>
		";
	}

};
?>

<!DOCTYPE html>
<html>
<head>
	<title>Contact Us Admin</title>
	<link rel="stylesheet" type="text/css" href="stylecontact.css">
</head>
<body>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="frm">
			<h1>Contact Us</h1>
		<table>
			<tr>
				<td><label for="nama">Nama : </label></td>
				<td><input type="text" name="nama" id="nama" required="required"></td>
			</tr>
			<tr>
				<td><label for="email">Email : </label></td>
				<td><input type="email" name="email" id="email" required="required"></td>
			</tr>
			<tr>
				<td><label for="pesan">Pesan : </label></td>
				<td><textarea type="box" name="pesan" id="pesan" required="required" rows="10" cols="30"></textarea></td>
			</tr>
			<tr>
				<td><button type="submit" name="submit" id="btn">Tambah Data!</button>

				</td>
			</tr>
		</table>	
		<br><br>
		<a href="menu1.php">Kembali Ke Halaman Home</a>
	</form>
</div>
</body>
</html>