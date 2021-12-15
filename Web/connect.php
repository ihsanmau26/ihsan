<?php
session_start();

$form_error = '';

function kontak($data){ //untuk menambah data
    $conn = mysqli_connect("localhost", "root", "", "komentar");

    // ambil data dari tiap elemen dalam form jadikan variabel
    $nama = htmlspecialchars($data["nama"]); //html... untuk mencegah masuknya script
    $email = htmlspecialchars($data["email"]);
    $pesan = htmlspecialchars($data["pesan"]);

    // query insert data
    $query = "INSERT INTO kritiksaran VALUES('', '$nama', '$email', '$pesan')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
?>