<?php
header("Content-type: application/json; charset=ISO-8859-1");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
include_once "koneksi.php";
$sql = "select * from berita_wayang";
$query = mysqli_query($koneksi,$sql);
 
$arrKategori = array();
while ($row = mysqli_fetch_assoc($query)) {
    $arrKategori[] = $row;
}
echo json_encode($arrKategori); //menampilkan data berupa json
mysqli_close($koneksi);
 
?>