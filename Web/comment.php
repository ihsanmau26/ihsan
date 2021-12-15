<?php  
require 'connect.php';

	if (isset($_POST["submit"])) {

	if(kontak($_POST) > 0){
		echo "
			<script>
				alert('KRITIK dan/atau SARAN berhasil tersampaikan.');
				document.location.href = 'index.php';
			</script>
		";
	}else{
		echo "
			<script>
				alert('KRITIK dan/atau SARAN berhasil gagal tersampaikan.');
				document.location.href = 'index.php';
			</script>
		";
	}

};
?>

<!DOCTYPE html>
<html>
<head>
	<title>Comment</title>
	<link rel="stylesheet" type="text/css" href="stylecomment.css">
</head>
<body>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="frm">
			<h1>KRITIK & SARAN</h1>
		
			<p>
				<label for="nama">Nama</label>
				<input type="text" name="nama" id="nama" required="required">
			</p>
			<p>
				<label for="email">Email</label>
				<input type="email" name="email" id="email" required="required">
			</p>
			<p>
				<label for="pesan">Pesan</label>
				<textarea type="box" name="pesan" id="pesan" required="required" rows="10" cols="30"></textarea>
			</p>
			<p>
				<button type="submit" name="submit" id="btn">SUBMIT</button>
			</p>
			<a href="index.php">
				<ul>
					<li>HOME</li>
				</ul>
			</a>
		</div>
	</form>

</body>
</html>