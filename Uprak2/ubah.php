<?php  
require 'databaseadmin.php';

// ambil data dari URL
$id = $_GET["id"];

// query data siswa berdasarkan id
$swa = query("SELECT * FROM daftar WHERE id = $id")[0];

// cek apakah tombol submit sudah ditekan apa belum
if (isset($_POST["submit"])) {

	// cek apakah data berhasil ditambahkan atau tidak
	if(ubah($_POST) > 0){
		echo "
			<script>
				alert('data berhasil diubah');
				document.location.href = 'halamanadmin.php';
			</script>
		";
	}else{
		echo "
			<script>
				alert('data gagal diubah');
				document.location.href = 'halamanadmin.php';
			</script>
		";
	}
};
?>

<!DOCTYPE html>
<html>
<head>
	<title>Ubah data Makanan/Minuman</title>
</head>
<body>
	<div class="ubah">
	<h1>Ubah data Makanan/Minuman</h1>

	<form action="" method="post">
		<input type="hidden" name="id" value="<?= $swa['id'] ?>">
		<table width=50% border="1" cellpadding="10" cellspacing="0">
			<tr>
				<td><label for="nama">Nama Makanan/Minuman: </label></td>
				<td><input type="text" name="nama" id="nama" value="<?= $swa['nama'] ?>" required></td>
			</tr>
			<tr>
				<td><label for="harga">Harga: </label></td>
				<td><input type="text" name="harga" id="harga" value="<?= $swa['harga'] ?>" required></td>
			</tr>
			<tr>
				<td><label for="gambar">Gambar: </label></td>
				<td><input type="text" name="gambar" id="gambar" value="<?= $swa['gambar'] ?>" required></td>
			</tr>
			
		</table><br>
		<tr>
				<td><button type="submit" name="submit">Ubah Data</button></td>
			</tr>
		<br><br>
		<a href="halamanadmin.php">Kembali Ke Halaman Awal</a>
	</form>
	</div>
</body>
</html>