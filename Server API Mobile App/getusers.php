<?php
header("Content-type: application/json; charset=ISO-8859-1");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

include_once "koneksi.php";
$EncondeData = file_get_contents('php://input');
$DecodeData = json_decode($EncondeData, TRUE);

$username = $_GET['username'];
$password = $_GET['password'];

// $sql = "select * from users";
$sql = "select * from users where username='$username' AND password='$password'";
$query = mysqli_query($koneksi,$sql);
 
if (mysqli_num_rows($query) == 0) {
    echo json_encode("Username atau Password Salah");
}
else {
    echo json_encode("Login Berhasil");
}
mysqli_close($koneksi);
 
?>