<?php
// Load file koneksi.php
include "connect.php";
// Ambil Data yang Dikirim dari Form
$nama_file = $_FILES['pelamar']['name'];
// Set path folder tempat menyimpan gambarnya
$path = "image/".$nama_file;
 query = "INSERT INTO gambar(nama,ukuran,tipe) VALUES('".$nama_file."')";
$sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query
      
      
}
?>