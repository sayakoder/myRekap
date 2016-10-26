<?php 
session_start();

include_once('config.php');
mysql_select_db('cendana');

$user = $_POST['user'];
$pass = md5($_POST['pass']);

$sql = "select * from login 
where username = '{$user}'";

$query = mysql_query($sql);

if(mysql_num_rows($query)==1){
	$dataLoginDB = mysql_fetch_array($query);
if ($pass = $dataLoginDB['password']) {
	$_SESSION['userdata']=$dataLoginDB;
	header('location : dashboard.php');
} else {
	header('location: login.php');
}}
else{
	header('location: login.php');
}

?>