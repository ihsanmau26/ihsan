<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TJA MATERI 2</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
  <body>
    <nav>
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
      <label class="logo">Roosevelt</label>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a class="active" href="course.php">Course</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="comment.php">Comment</a></li>
      </ul>
    </nav>
    <div class="badan">
    <div class="foto">
      <img src="tja-gambar2.png">
    </div>
    <h1 class="judul">Arsitektur FTTH (Fiber To The Home)</h1> <br><br>
    <p>
      Secara umum arsitektur  jaringan FTTH mulai dari pusat layanan sampai dengan pelanggan
      adalah sebagai berikut:
    </p>
    <p>
      1.  OLT = Optical Line Terminal, atau perangkat yang mempunyai fungsi;<br>
      a.  Titik Hubung dengan provider layanan Telepon, Internet/Data dan TV/IP TV.<br>
      b.  Pusat penyambungan dan distribusi layanan yang dikirim ke pelanggan.<br>
      c.  Pengaturan dan monitoring jaringan pelanggan.<br>
      d.  Mengkonversi sinyal layanan ke dalam bentuk sinyal optik.
    </p>
    <p>
      2.  ODF = Optical Distribution Frame, atau Rak dan frame yang berfungsi;<br>
      a.  Tempat Spliter untuk mendistribusikan Fiber Optik ke ODC untuk melayani beberapa area.<br>
      b.  Tempat melakukan pengukuran dan monitoring Jaringan Fiber Optik.<br>
      c.  Tempat terminasi fisik jaringan luar Fiber Optik.
    </p>
    <p>
      3.  Feeder Cables = Kabel Fiber Optik penghantar Layanan, yang mempunyai fungsi;<br>
      a.  Kabel Fiber Optik Penghubung Utama dari ODF ke ODC<br>
      b.  Ada tiga jenis kabel Fiber Optik yang digunakan, yaitu Kabel Duct, Kabel Tanah Tanam Langsung (Burried Cables), Kabel Udara (Aireal Cable).
    </p>
    <p>
      4.  ODC = Optical Distribuion Cabinet atau perangkat Lemari Kabel Fiber Optik  fungsi;<br>
      a.  Titik sambung untuk penyebaran layanan ke beberapa area yang lebih kecil.<br>
      b.  Tempat splitter untuk yaitu dari satu Fiber optik ke beberapa fiber optik.<br>
      c.  Tempat koneksi dari Kabel Feeder ke Kabel Distribution. 
    </p>
    <p>
      5.  Kabel Distribution = Kabel Fiber Optik yang mendistribusikan layanan ke area yang lebih kecil<br>
      a.  Kabel tipe Single Core Single Tube atau SCST.<br>
      b.  Sebagai penghubung antara ODC dengan ODP.
    </p>
    <p>
      6.  ODP = Optical Distribution Point atau kotak distribusi layanan ke pelanggan, fungsinya adalah;<br>
      a.  Sebagai titik terminasi kabel dropp optik ke arah pelanggan.<br>
      b.  Sebagai titik distribusi kabel distribusi menjadi beberapa saluran drop optik dengan menggunakan splitter.<br>
      c.  Ada 3 jenis ODP, yaitu ODP Pedestal, ODP Pole/Wall, ODP Closure.
    </p>
    <p>
      7.  Dropp Optic = yaitu saluran penanggal atau penghubung instalasi rumah.<br>
      a.  Penghubung antara ODP dengan instalasi Rumah.<br>
      b.  Menggunakan jenis insensitive bending, atau tahan dengan tekukan.<br>
      c.  Kapasitas 1, 2 dan 4 core.<br>
      d.  Panjang maksimum 250 meter.<br>
      e.  Kedua ujungnya dipasang konektor.<br>
      f.  Antar kedua ujung konektor tidak boleh terdapat sambungan atau lecet. 
    </p>
    <p>
      8.  OTP = Optical Termination Premises, yaitu perangkat pasive yang ditempatkan pada instalasi rumah pelanggan. Fungsi dari OTP adalah sebagai berikut;<br>
      a.  Titik terminasi atau titik tambat akhir dropp optik di sisi pelanggan.<br>
      b.  Tempat koneksi kabel dropp optik dengan kabel indooor optic (patchcord). 
    </p>
    <p>
      9.  Indoor Fiber Optic Cables adalah kabel fiber optik yang diinstalasi untuk dalam rumah, pada umumnya, disebut juga patchcord, dimana kedua ujungnya sudah tersambung dengan konektor.
    </p>
    <p>
      10. Roset Optic atau kotak tempat penghubung antara indoor optik cables dengan kabel optik arah CPE (Customer Premises Equipment) dalam bentuk ONT/ONU.
    </p>
    <p>
      11. ONT/ONU = Optical Network Terminal atau Optical Network Unit. Fungsinya adalah;<br>
      a.  Melakukan konversi layanan dalam sinyal optik menjadi sinyal elektrik.<br>
      b.  Sebagai alat demultiplexer layanan.<br>
      c.  Output layanan ONT/ONU adalah Voice, Video/IP TV Data Internet.
    </p>
    <p>
      Perbedaan antara ON dan ONU, adalah ONT hanya melayani satu pelanggan saja. ONU dapat melayani beberapa pelanggan dalam satu kluster, misal untuk Pertokoan, Mall dan Apartemen.
    </p>
	</div>
</body>
</html>
