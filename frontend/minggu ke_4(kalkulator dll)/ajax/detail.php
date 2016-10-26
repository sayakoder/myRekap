<?php 
include ('config.php');
$id = $_GET['id'];
$sql = "select 
			pg.nama as nama_pegawai,
			pg.telp,
			pg.kota,
			kl.nama_kelamin as jenis_kelamin,
			po.nama as posisi 
		from 
			pegawai pg, kelamin kl, posisi po
		where 
			pg.id_pegawai = '{$id}' and
			pg.kelamin = kl.id and
			pg.id_posisi = po.id_posisi";
$result = mysql_query($sql);
$data = mysql_fetch_array($result);

?>

<h1>Detail Pegawai</h1>
<a href="index.php">kembali</a>
<br>
Nama: 			<?php echo $data['nama_pegawai'] ?><br>
No Telp: 		<?php echo $data['telp'] ?><br>
Kota: 			<?php echo $data['kota'] ?><br>
Jenis kelamin: 	<?php echo $data['jenis_kelamin'] ?><br>
Posisi: 		<?php echo $data['posisi'] ?><br>
