
<?php 
include ('config.php');

date_default_timezone_set('asia/jakarta');

$nama = $_POST['jeneng'];
$posisi = $_POST['posisi'];
$kelamin = $_POST['kelamin'];
$kota = $_POST['kota'];
$telp = $_POST['telp'];

// $id = md5(date('ymdhms').rand());

$sql = "insert into
pegawai(id_pegawai,nama,id_posisi,kelamin,kota,telp)
values('$id','$nama','$posisi',$kelamin,$kota,$telp)";

mysql_query($sql);

header("location: index.php");

?>