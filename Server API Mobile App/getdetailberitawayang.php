<?php
header("Content-type: application/json; charset=ISO-8859-1");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
include_once "koneksi.php";

$EncondeData = file_get_contents('php://input');
$DecodeData = json_decode($EncondeData, TRUE);

$id = $_GET['id_berita'];

$sql = "select * from berita_wayang where id_berita='$id'";
// echo json_encode($sql); die();
$query = mysqli_query($koneksi,$sql);
 
$arrKategori = array();
while ($row = mysqli_fetch_assoc($query)) {
    $arrKategori[] = $row;
}
echo json_encode($arrKategori); //menampilkan data berupa json
mysqli_close($koneksi);
 
?>