<?php 
include ('config.php');
$id = $_GET['id'];
$sql = "delete from pegawai where id_pegawai = '{$id}'";

mysql_query($sql);

// echo "sukses melakukan delete id {$id}";
header('location: index.php');
 ?>