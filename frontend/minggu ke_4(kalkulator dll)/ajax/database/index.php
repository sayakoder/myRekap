<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Document</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
</head>
<body>
	<div class="row">

		<div class="container">

			<nav class="navbar navbar-default">

				<div class="container-fluid">

					<!-- Brand and toggle get grouped for better mobile display -->

					<div class="navbar-header">

						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">

							<span class="sr-only">Toggle navigation</span>

							<span class="icon-bar"></span>

							<span class="icon-bar"></span>

							<span class="icon-bar"></span>

						</button>

						<a class="navbar-brand" href="#">
							<img src="images/coollogo_com-163351554.png" alt="Logo" style="width: 100px;">

						</a>

					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->

					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

						<ul class="nav navbar-nav">

							<li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>

							<li><a href="#">Link</a></li>

							<li class="dropdown">

								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Menu <span class="caret"></span></a>

								<ul class="dropdown-menu">

									<li><a href="tambah.php">Tambah data</a></li>

									<!-- <li><a href="#">Another action</a></li>

									<li><a href="#">Something else here</a></li>

									<li role="separator" class="divider"></li>

									<li><a href="#">Separated link</a></li>

									<li role="separator" class="divider"></li>

									<li><a href="#">One more separated link</a></li>
 -->
								</ul>

							</li>

						</ul>



						<form class="navbar-form navbar-left" action="index.php" method="GET">

							<div class="form-group">

								<input type="text" class="form-control" placeholder="Search" name="q" value="<?php echo @$_GET['q']?>">

							</div>

							<button type="submit" class="btn btn-default">Submit</button>

						</form>

<!-- 	      <ul class="nav navbar-nav navbar-right">

	        <li><a href="#">Link</a></li>

	        <li class="dropdown">

	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>

	          <ul class="dropdown-menu">
	            <li><a href="tambah.php">Tambah Data</a></li>

	            <li><a href="#">Another action</a></li>

	            <li><a href="#">Something else here</a></li>

	            <li role="separator" class="divider"></li>

	            <li><a href="#">Separated link</a></li>

	          </ul>

	        </li>

	    </ul> -->

	</div><!-- /.navbar-collapse -->

</div><!-- /.container-fluid -->

</nav>




<?php
require_once('config.php');
$sql = 'select 
pegawai.id_pegawai as id,
pegawai.nama as nama_pegawai,
posisi.nama,
tab_kota.nama_kota,
pegawai.telp,
kelamin.nama_kelamin

from 
pegawai,
posisi,
tab_kota,
kelamin

where 
pegawai.id_posisi=posisi.id_posisi

and 
pegawai.kota=tab_kota.id_kota

and
pegawai.kelamin=kelamin.id';
if (@$_GET['q']) {
	$search =$_GET['q'];
	$sql = $sql ." and (pegawai.nama like '%{$search}%' or
	posisi.nama like '%{$search}%')";
}
	// echo $sql;
	// exit();
$result = mysql_query($sql); ?>

<fieldset>
	<legend><a href="#"><strong>Form data pegawai</strong></a></legend> 
	<table class="table">
		<thead>
			<tr class="warning" align="center">
				<th>Nama</th>
				<th>Jenis kelamin</th>
				<th>Posisi</th>
				<th>Telepon</th>
				<th>kota</th>
				<th>edit</th>
				<th>Aksi</th>
				<th>tindakan</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			while ($data=mysql_fetch_array($result)) {
				?>
				<tr>
					<td class="success">
						<?php echo $data['nama_pegawai']; ?>
					</td>
					<td class="warning">
						<?php echo $data['nama_kelamin']; ?>
					</td>

					<td class="danger">
						<?php echo $data['nama']; ?>
					</td>
					<td class="active">
						<?php echo $data['telp']; ?>
					</td>
					<td class="warning">
						<?php echo $data['nama_kota']; ?>
					</td>
					<td class="success">
						<a 
						href="update.php?id=<?php 
						echo $data['id'] ?>"><b><i>update </i></b><?php 
						$data['id'] ?>							
					</a>
				</td>
				<td class="danger">
					<a 
					href="delete.php?id=<?php 
					echo $data['id'] ?>"><b><i>Delete </i></b><?php 
					$data['id'] ?>							
				</a>
			</td>
			<td class="success">
				<a 
				href="detail.php?id=<?php 
				echo $data['id'] ?>"><b><i>detail</i></b><?php 
				$data['id'] ?>							
			</a>
		</td>
	</tr>
	<?php } ?>

</tbody>
</table>
</fieldset>
</div>
</div>
<script src="js/script.js"></script>
</body>
</html>