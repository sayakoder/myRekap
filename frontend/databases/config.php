<?php  error_reporting();

$host = 'localhost';
$user = 'root';
$pass = '';
$conn = mysql_connect($host,$user,$pass);

// if ($conn) {
// 	echo "konek jeh";
// } else {
// 	echo "ga iso konek bos";
// }
//memilih databases
mysql_select_db('cendana');

?>