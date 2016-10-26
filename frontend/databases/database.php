<?php 
//untuk menghubungkan ke config.php
require_once('config.php');
//menyimpan data
$sql = 'select * from pegawai';
$result = mysql_query($sql);

//menampilkann data berbentuk bullet
echo "<ul>";
while($data=mysql_fetch_array($result)){
	echo "<li>".$data['nama']."</li>";
}

 ?>