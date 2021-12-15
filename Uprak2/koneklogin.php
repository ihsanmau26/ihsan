<?php 
session_start();
 
// variabel kosong untuk menyimpan pesan error
$form_error = '';
 
// cek apakah tombol sumit sudah di klik atau belum
if(isset($_POST['submit'])){
    
    // cek apakah username atau password tidak kosong    
    if (empty($_POST['username']) || empty($_POST['password'])) {
        // nilai variabel ini akan ditampilkan di halaman login jika kosong
        $form_error = '<p>Username atau Password tidak boleh kosong!</p>';
    }

    else{
        // menyimpan data yang dikirim dari metode POST ke masing-masing variabel
        $username = $_POST['username'];
        $password = $_POST['password'];
        

        // koneksi ke database
        $conn = mysqli_connect("localhost","root","","login");

        // ambil data username dan password dari database
        $hasil = mysqli_query($conn,"SELECT * FROM akun WHERE username = '$username' AND password = '$password'");

        $rows = mysqli_num_rows($hasil);

        // validasi login benar atau salah
        if($rows == 1){
     
            $akun = mysqli_fetch_assoc($hasil);

            // cek jika yang login admin
            if($akun['level'] == "admin"){
                $_SESSION['level'] = "admin";
                header("Location:menu1.php");// arahkan ke homepage
            }

            // cek jika yang login user
            else if($akun['level'] == "user"){
                $_SESSION['level'] = "user";
                header("Location:menu2.php");// arahkan ke homepage
            }

            else{
                $error = 'Username / Password Salah!';  
            }
        }

        else{
     
            // jika login salah maka variabel form_error diisi value seperti dibawah
            // nilai variabel ini akan ditampilkan di halaman login jika salah
            $form_error = '<p>Password atau Username yang kamu masukkan salah</p>';
        }
    }
}

function kontak($data){ //untuk menambah data
    $conn = mysqli_connect("localhost", "root", "", "login");

    // ambil data dari tiap elemen dalam form jadikan variabel
    $nama = htmlspecialchars($data["nama"]); //html... untuk mencegah masuknya script
    $email = htmlspecialchars($data["email"]);
    $pesan = htmlspecialchars($data["pesan"]);

    // query insert data
    $query = "INSERT INTO kontak VALUES('', '$nama', '$email', '$pesan')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

?>