<?php
	session_start();
	
	include '../db.php';
	
    
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>K.O. | Daftar</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
</head>
<body>
	<div id="bg-login">
		<div class="box-login" style="width: 500px;">
			<h1 align="center">Daftar</h1>
			<form method="POST">
				<h4>
					<label class="title">Nama</label>
					<div><input type="text" class="col-input" name="nama" required></div><br>
					<label class="title">NIS/NIK</label>
					<div><input type="text" class="col-input" name="user" required></div><br>
					<label class="title">Password</label>
					<div><input type="text" class="col-input" name="pass" required></div><br>
					<label class="title">Telepon</label>
					<div><input type="text" class="col-input" name="telepon" required></div><br>
					<label class="title">Kelas</label>
					<div><input type="text" class="col-input" name="class" required></div><br>
					<div style="float: right;"><button class="btn" name="daftar">Daftar</button></div>
				</h4>
			</form>
			<?php 

				if(isset($_POST['daftar'])){
					$nama 		= $_POST['nama'];
					$user 		= $_POST['user'];
					$pass 		= $_POST['pass'];
					$telepon 	= $_POST['telepon'];
					$kelas	 	= $_POST['class'];

					$ambil = $conn->query("SELECT * FROM tb_user WHERE username = '$user'");
					$cek = $ambil->num_rows;
					if($cek==1){
						echo '<script>alert("NIS/NIK telah digunakan!")</script>';
						echo '<script>window.location="daftar.php"</script>';
					}else{
						$conn->query("INSERT INTO tb_user (user_name, username, password, user_telp, user_class) VALUES (
							'".$nama."',
							'".$user."',
							'".$pass."',
							'".$telepon."',
							'".$kelas."') ");

						echo '<script>alert("Pendaftaran sukses, silahkan login! ")</script>';
						echo '<script>window.location="login-user.php"</script>';
					}
				}

			?>
		</div>
	</div>

</body>
</html>