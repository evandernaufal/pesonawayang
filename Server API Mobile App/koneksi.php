<?php
$servername = "localhost:3306";
$database = "pesonawa_admin";
$username = "pesonawa_admin";
$password = "pesonawayangadmin";

// membuat koneksi
$koneksi = mysqli_connect($servername, $username, $password, $database);
// mengecek koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
// echo "Koneksi berhasil";
// mysqli_close($koneksi);
?>