<?php

session_start();

if($_SESSION['level'] == ''){
	echo '<script language="javascript">alert("Anda harus Login!"); document.location="../logout.php";</script>';
}

function query($query){
	$conn = mysqli_connect("localhost", "root", "", "login");
	$result = mysqli_query($conn, $query);
	$rows = [];
	while( $row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;
	}

	return $rows;
}

function cari($keyword){
	$query = "SELECT * FROM daftar WHERE kategori LIKE '%$keyword%'";
	return query($query);
}
?>