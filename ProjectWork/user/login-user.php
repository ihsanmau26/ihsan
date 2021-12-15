<?php 

	session_start();
	error_reporting(0);
	include '../db.php';

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>K.O. | Login User</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
</head>

<body>
	<header style="border-bottom: 1px solid #000;">
		<div class="container">
			<img src="../img/logo.png" style="width: 200px; margin-top: 5px;">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="produk.php">Produk</a></li>
				<li><a href="keranjang.php">Keranjang</a></li>
				<?php if (isset($_SESSION['pelanggan'])): ?>
					<li><a href="checkout.php">Checkout</a></li>
					<li><a href="logout-user.php">Logout</a></li>
				<?php else: ?>
					<li><a href="login-user.php">Login</a></li>
				<?php endif ?>
			</ul>
		</div>
	</header>

	<div id="bg-login-user">
		<div class="box-login">
			<h1>LOGIN</h1>
			<form action="" method="POST">
				<input type="text" name="user" placeholder="Username" class="input-control">
				<input type="password" name="pass" placeholder="Password" class="input-control">
				<p style="font-size: 15px;">belum punya akun? <a href="daftar.php">daftar</a></p>
				<button type="submit" name="submit" class="btn" style="float: right;">Masuk</button>
			</form>
		</div>
	</div>

	<?php 

		if(isset($_POST['submit'])){

			$user = $_POST['user'];
			$pass = $_POST['pass'];
			$ambil = $conn->query("SELECT * FROM tb_user
				WHERE username = '$user' AND password = '$pass' ");

			$akunyangcocok = $ambil->num_rows;

			if($akunyangcocok==1){
				$akun = $ambil->fetch_assoc();

				$_SESSION['pelanggan'] = $akun;
				echo '<script>window.location="checkout.php"</script>';
			}else{
				echo '<script>alert("Username atau Password yang Anda masukan salah!")</script>';
				echo '<script>window.location="login-user.php"</script>';
			}

		}

	?>

</body>
</html>