<?php 
include ('config.php');
$id = $_POST['id'];
$nama = $_POST['jeneng'];
$posisi = $_POST['posisi'];
$kelamin = $_POST['kelamin'];
$kota = $_POST['kota'];
$telp = $_POST['telp'];

$sql = mysql_query("update pegawai set nama = '$nama', id_posisi = '$posisi', kelamin=$kelamin, kota='$kota',telp='$telp' where id_pegawai =$id");
// echo "<pre>";
// print_r($sql);
// exit();
// mysql_query($sql);

header("location: index.php");

?>