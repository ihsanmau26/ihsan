<?php  
require 'databaseadmin.php';
// cek apakah tombol submit sudah ditekan apa belum

if (isset($_POST["submit"])) {

	// cek apakah data berhasil ditambahkan atau tidak
	if(tambahminum($_POST) > 0){
		echo "
			<script>
				alert('data berhasil ditambahkan');
				document.location.href = 'halamanadmin.php';
			</script>
		";
	}else{
		echo "
			<script>
				alert('data gagal ditambahkan');
				document.location.href = 'halamanadmin.php';
			</script>
		";
	}

};
?>


<!DOCTYPE html>
<html>
<head>
	<title>Tambah Menu Minuman</title>
	<link rel="stylesheet" type="text/css" href="tambah.css">
</head>
<body>
	<form action="" method="post">
		<div class="frm">
			<h1>Tambah Minuman</h1>
		<table>
			<tr>
				<td><label for="nama">Nama Minuman : </label></td>
				<td><input type="text" name="nama" id="nama" required="required"></td>
			</tr>
			<tr>
				<td><label for="harga">Harga Minuman : </label></td>
				<td><input type="text" name="harga" id="harga" required="required"></td>
			</tr>
			<tr>
				<td><label for="gambar">Gambar : </label></td>
				<td><input type="text" name="gambar" id="gambar" required="required"></td>
			</tr>
			<tr>
				<td><button type="submit" name="submit" id="btn">Tambah Data</button>

				</td>
			</tr>
		</table>	
		<br><br>
		<a href="halamanadmin.php">Kembali Ke Halaman Awal</a>
	</form>
</div>
</body>
</html>