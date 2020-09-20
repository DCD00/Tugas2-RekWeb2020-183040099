<?php 
require '../functions.php';

$smartphone = query("SELECT * FROM smartphone");

if( isset($_POST["cari"]) ) {
	$smartphone = cari($_POST["keyword"]);
}


?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman User</title>
	<link rel="stylesheet" type="text/css" href="../css/user3.css">
</head>
<body>
	<div class="log"><a href="../login.php">Logout</a></div>
	<em><h1>Daftar Smartphone Murah Terbaru April 2019</h2></em>
	<div class="cari">
		<form action="" method="post">

		<input type="text" name="keyword" size="40" autofocus placeholder="masukkan keyword pencarian.." autocomplete="off">
		<button type="submit" name="cari">Cari!</button>
		
		</form>
	</div>

	<br>
	<div class="container">
		<ul>
			<?php foreach ($smartphone as $smart ) : ?>
			<div class="content">
				<img width="80" src="../img/<?= $smart["gambar"]; ?>">
				<p class="nama">
					<a href="profil.php?id=<?= $smart['id'] ?>"><?= $smart['nama']; ?></a>
				</p>
				<p class="c"><?= $smart['harga'] ?></p>
			</div>
			<?php endforeach; ?>
		</ul>
	</div>
</body>
</html>