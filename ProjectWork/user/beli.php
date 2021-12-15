<?php 
	session_start();
	error_reporting(0);
	include '../db.php';
	$id_produk = $_GET['id'];

	if(isset($_SESSION['keranjang'][$id_produk])){
		$_SESSION['keranjang'][$id_produk] +=1;
	}else{
		$_SESSION['keranjang'][$id_produk] = 1;
	}

	// echo "<pre>";
	// print_r($_SESSION);
	// echo "</pre>";

	echo '<script>window.location="keranjang.php"</script>';

?>