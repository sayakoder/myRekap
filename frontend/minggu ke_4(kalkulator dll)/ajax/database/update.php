<html>
<?php 
include('config.php');
?>
<?php  
$sql_posisi = "select * from posisi";
$result_posisi = mysql_query($sql_posisi);

$sql_kota = "select * from tab_kota";
$result_kota = mysql_query($sql_kota);

$id = $_GET['id'];

$sql = "select 
pg.id_pegawai as id_pegawai,
pg.nama as nama_pegawai,
pg.telp,
pg.kota,
kl.nama_kelamin as jenis_kelamin,
po.nama as posisi,
po.id_posisi as posisi_id,
kt.id_kota as kota_id,
kl.id as kel
from 
pegawai pg, kelamin kl, posisi po,tab_kota kt
where 
pg.id_pegawai = '{$id}' and
pg.kelamin = kl.id and
pg.id_posisi = po.id_posisi and 
pg.kota = kt.id_kota and
pg.kelamin=kl.id";

$result_pegawai= mysql_query($sql);
$data_pegawai = mysql_fetch_array($result_pegawai);
?>
<h1>update data pegawai</h1>
<a href="index.php">kembali</a>

<form action="proses_update.php" method="POST">
	<input type="hidden" name="id" value="<?php echo $id; ?>">

	nama: <input type="text" name="jeneng" value="<?php echo $data_pegawai['nama_pegawai'] ?>">
	<br>

	posisi: <select name="posisi"><?php 
	while ($data_posisi = mysql_fetch_array(
		$result_posisi)) {
			?>
			<option value="<?php echo $data_posisi['id_posisi'] ?>"<?php if($data_pegawai['posisi_id'] == $data_posisi['id_posisi']) echo "selected" ?>>
				<?php 
				echo $data_posisi['nama'] 
				?>	
			</option>
			<?php  }?>

		</select>
		<br>
		kota: <select name="kota"><?php 
		while ($data_kota = mysql_fetch_array(
			$result_kota)) {
				?>
				<option value="<?php echo $data_kota['id_kota'] ?>"<?php if($data_pegawai['kota_id'] == $data_kota['id_kota']) echo "selected" ?>>
					<?php 
					echo $data_kota['nama_kota'] 
					?>	
				</option>
				<?php  }?>

			</select>
			<br>
			jenis kelamin:
			<input type="radio" name="kelamin" value="1" <?php if ($data_pegawai['kel']==1) 
			{
				echo 'checked';
			}
			?>>laki-laki
			
			<input type="radio" name="kelamin" value="2"<?php if ($data_pegawai['kel']==2) 
			{
				echo 'checked';
			}
			?>>perempuan
			<br>
			Nomor Telephone:
			<input type="text" name="telp" value="<?php echo $data_pegawai['telp'] ?>"><br>
			<input type="submit" value="update data">
		</form>

		</html>