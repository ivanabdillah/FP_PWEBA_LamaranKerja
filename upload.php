<!-- <?php
// Load file koneksi.php
//include "connect.php";
// Ambil Data yang Dikirim dari Form
//$nama_file = $_FILES['pelamar']['name'];
// Set path folder tempat menyimpan gambarnya
//$path = "image/".$nama_file;
//$query = "INSERT INTO gambar(nama,ukuran,tipe) VALUES('".$nama_file."')";
//$sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query
?> -->

<?php
    session_start();

    require('connect.php');
    $nama = $_POST['nama'];
    $pendidikan = $_POST['pendidikan_terakhir'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];
    $telp = $_POST['no_telepon'];
    $cv = $_POST['cv'];

    $sql = "insert into pelamar (nama, pendidikan_terakhir, email, alamat, no_telepon, cv) values ('$nama', '$pendidikan', '$email', '$alamat', '$telp', '$cv')";
    $query = mysqli_query($connect, $sql);

    if ($query) {
        $_SESSION['username'] = $username;
        header('Location: index.php');
        echo("Selamat, Anda berhasil upload berkas lamaran!");
    }
?>