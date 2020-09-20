<?php
require 'functions.php';

// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {
	
	// cek apakah data berhasil di tambahkan atau tidak
	if( tambah($_POST) > 0 ) {
		echo "
			<script>
				alert('data berhasil ditambahkan!');
				document.location.href = 'halaman/admin.php';
			</script>
		";
	} else {
		echo "
			<script>
				alert('data gagal ditambahkan!');
				document.location.href = 'halaman/admin.php';
			</script>
		";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Tambah Data</title>
	<link rel="stylesheet" type="text/css" href="css/tambah3.css">
</head>
<body>
	<div class="container">
		<h1>Tambah Data Smartphone</h1>
		<div class="content">
			<form action="" method="post">
				<table cellpadding="6">
					<tr>
						<th><label for="gambar">Gambar</label></th>
						<td width="5">:</td>
						<td><input type="text" name="gambar" id="gambar" required></td>
					</tr>
					<tr>
						<th><label for="nama">Nama</label></th>
						<td width="5">:</td>
						<td><input type="text" name="nama" id="nama"></td>
					</tr>
					<tr>
						<th><label for="netcon">Network & Connectivity</label></th>
						<td width="5">:</td>
						<td><input type="text" name="netcon" id="netcon"></td>
					</tr>
					<tr>
						<th><label for="descreen">Desain & Screen</label></th>
						<td width="5">:</td>
						<td><input type="text" name="descreen" id="descreen"></td>
					</tr>
					<tr>
						<th><label for="softhard">Platform</label></th>
						<td width="5">:</td>
						<td><input type="text" name="softhard" id="softhard"></td>
					</tr>
					<tr>
						<th><label for="memory">Memory</label></th>
						<td width="5">:</td>
						<td><input type="text" name="memory" id="memory"></td>
					</tr>
					<tr>
						<th><label for="camera">Camera</label></th>
						<td width="5">:</td>
						<td><input type="text" name="camera" id="camera"></td>
					</tr>
					<tr>
						<th><label for="battery">Battery :</label></th>
						<td width="5">:</td>
						<td><input type="text" name="battery" id="battery"></td>
					</tr>
					<tr>
						<th><label for="features">Other Features</label></th>
						<td width="5">:</td>
						<td><input type="text" name="features" id="features"></td>
					</tr>
					<tr>
						<th><label for="harga">Harga</label></th>
						<td>:</td>
						<td><input type="text" name="harga" id="harga"></td>
					</tr>
					<tr>
						<td>
							<center><button type="submit" name="submit">Tambah Data!</button></center>
						</td>
						<td colspan="2">
							<center><button><a href="halaman/admin.php">Kembali!</a></button></center>
						</td>
					</tr>
				</table>
			</form>
		</div>
	</div>
</body>
</html>