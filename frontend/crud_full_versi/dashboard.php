<?php session_start(); ?>
<?php if(isset($_SESSION['userdata'])): ?>
<h1>SELAMAT DATANG DI WAWAN.NET</h1>

<a href="logout.php">Logout</a>

<?php else: ?>
	maaf dilarang masuk.
	<a href="login.php">kembali</a>
<?php endif; ?>