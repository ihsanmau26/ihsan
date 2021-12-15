<?php

session_start();

if($_SESSION['level'] != 'admin'){

	if($_SESSION['level'] == 'user'){
		header("Location:menu1.php");
	}

	else if($_SESSION['level'] == ''){
		echo '<script language="javascript">alert("Anda harus Login!"); document.location="../logout.php";</script>';
	}
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

function tambahmakan($data){ //untuk menambah data
	$conn = mysqli_connect("localhost", "root", "", "login");

	// ambil data dari tiap elemen dalam form jadikan variabel
	$nama = htmlspecialchars($data["nama"]); //html... untuk mencegah masuknya script
	$harga = htmlspecialchars($data["harga"]);
	$gambar = htmlspecialchars($data["gambar"]);

	// query insert data
	$query = "INSERT INTO daftar VALUES('', '$nama', '$harga', '$gambar', 'makanan')";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function tambahminum($data){ //untuk menambah data
	$conn = mysqli_connect("localhost", "root", "", "login");

	// ambil data dari tiap elemen dalam form jadikan variabel
	$nama = htmlspecialchars($data["nama"]); //html... untuk mencegah masuknya script
	$harga = htmlspecialchars($data["harga"]);
	$gambar = htmlspecialchars($data["gambar"]);

	// query insert data
	$query = "INSERT INTO daftar VALUES('', '$nama', '$harga', '$gambar', 'minuman')";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function ubah($data){
	$conn = mysqli_connect("localhost", "root", "", "login");

	// ambil data dari tiap elemen dalam form jadikan variabel
	$id = $data["id"];
	$nama = htmlspecialchars($data["nama"]); //html... untuk mencegah masuknya script
	$harga = htmlspecialchars($data["harga"]);
	$gambar = htmlspecialchars($data["gambar"]);

	// query insert data
	$query = "UPDATE daftar SET nama = '$nama', harga = '$harga', gambar = '$gambar' WHERE id = $id";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function hapus($id){
	$conn = mysqli_connect("localhost", "root", "", "login");
	mysqli_query($conn, "DELETE FROM daftar WHERE id = $id");

	return mysqli_affected_rows($conn);
}
?>