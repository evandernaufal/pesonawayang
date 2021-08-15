<?php
header("Content-type: application/json; charset=ISO-8859-1");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

include_once "koneksi.php";
$EncondeData = file_get_contents('php://input');
$DecodeData = json_decode($EncondeData, TRUE);

$username = $_GET['username'];
$email = $_GET['email'];

// $sql = "select * from users";
// $sql = "UPDATE users SET password='123' WHERE username='$username' AND email='$email'";
$sql = "UPDATE `users` SET `password` = '123' WHERE `users`.`email` = '".$email."' AND `users`.`username` = '".$username."'";
$query = mysqli_query($koneksi,$sql);
 
if (!$query) {
    echo json_encode("Username atau Email Salah");
}
else {
    echo json_encode("Password anda telah direset menjadi 123");
}
mysqli_close($koneksi);
 
?>