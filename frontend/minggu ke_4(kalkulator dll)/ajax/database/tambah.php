
<html>
	<?php 
		include('config.php');
	 ?>
	 <?php  
	 	$sql_posisi = "select * from posisi";
	 	$result_posisi = mysql_query($sql_posisi);
	 	$sql_kota = "select * from tab_kota";
	 	$result_kota = mysql_query($sql_kota);
	 ?>
	<h1>form tambah data pegawai</h1>
	<a href="index.php">kembali</a>

	<form id="pegawai_form" method="POST">

		nama: <input type="text" name="jeneng">
		<br>

		posisi: <select name="posisi"><?php 
									while ($data_posisi = mysql_fetch_array(
										$result_posisi)) {
								?>
									<option value="<?php echo $data_posisi['id_posisi'] ?>">
										<?php 
											echo $data_posisi['nama'] 
										?>	
									</option>
									<?php  }?>

				</select>
				<br>
		kota:
		<select name="kota"><?php 
									while ($data_kota = mysql_fetch_array(
										$result_kota)) {
								?>
									<option value="<?php echo $data_kota['id_kota'] ?>">
										<?php 
											echo $data_kota['nama_kota'] 
										?>	
									</option>
									<?php  }?>

				</select>
				<br>
		jenis kelamin:
		<input type="radio" name="kelamin" value="1">laki-laki
		<input type="radio" name="kelamin" value="2">perempuan
		<input type="radio" name="kelamin" value="3">tidak tahu 
		<br>
		Nomor Telephone:
		<input type="text" name="telp">
		<input type="submit" value="tambah data">
	</form>

</html>