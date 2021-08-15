<?php
header("Content-type: application/json; charset=ISO-8859-1");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

include_once "koneksi.php";

$EncondeData = file_get_contents('php://input');
$DecodeData = json_decode($EncondeData, TRUE);

$id_users = $_GET['id_users'];
$oldPassword = $_GET['oldPassword'];
$newPassword = $_GET['newPassword'];
$checkNewPassword = $_GET['checkNewPassword'];

if($newPassword == $checkNewPassword){
    $sqlSelect = "SELECT * FROM users WHERE id_users='".$id_users."'";
    $querySelect = mysqli_query($koneksi,$sqlSelect);
    while($data = mysqli_fetch_array($querySelect)){
        $password = $data["password"];
    }
    if($password == $oldPassword){
        $sql = "UPDATE `users` SET `password` = '$newPassword' WHERE `id_users` = '$id_users'";
        $query = mysqli_query($koneksi,$sql);
         
        if (!$query) {
            echo json_encode("Password Gagal Diganti");
        }
        else {
            echo json_encode("Password Anda Berhasil Diubah, Silahkan Login Kembali");
        }
    }
    else {
        echo json_encode("Maaf Password Lama yang anda masukkan Salah!");
    }
}
else {
    echo json_encode("Password yang anda masukkan tidak sama");
}

mysqli_close($koneksi);
 
?>