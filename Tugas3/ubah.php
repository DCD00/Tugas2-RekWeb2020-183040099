<?php
require 'functions.php';

// ambil data di URL
$id = $_GET["id"];

// query data smartphone berdasarkan id
$smart = query("SELECT * FROM smartphone WHERE id = $id")[0];


// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {
	
	// cek apakah data berhasil diubah atau tidak
	if( ubah($_POST) > 0 ) {
		echo "
			<script>
				alert('data berhasil diubah!');
				document.location.href = 'halaman/admin.php';
			</script>
		";
	} else {
		echo "
			<script>
				alert('data gagal diubah!');
				document.location.href = 'halaman/admin.php';
			</script>
		";
	}


}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Ubah data smartphone</title>
	<link rel="stylesheet" type="text/css" href="css/ubah3.css">
</head>
<body>
	<div class="container">
		<h1>Ubah Data Smartphone</h1>
		<div class="content">
			<form action="" method="post">
				<input type="hidden" name="id" value="<?= $smart["id"]; ?>">
				<table cellpadding="6">
					<tr>
						<td>
							<label for="gambar">Gambar</label>
						</td>
						<td>:</td>
						<td>
							<input type="text" name="gambar" id="gambar" required value="<?= $smart["gambar"]; ?>">
						</td>
					</tr>
					<tr>
						<td>
							<label for="nama">Nama</label>
						</td>
						<td>:</td>
						<td>
							<input type="text" name="nama" id="nama" value="<?= $smart["nama"]; ?>">
						</td>
					</tr>
					<tr>
						<td>
							<label for="netcon">Network & Connectivity</label>
						</td>
						<td>:</td>
						<td>
							<input type="text" name="netcon" id="netcon" value="<?= $smart["netcon"]; ?>">
						</td>
					</tr>
					<tr>
						<td>
							<label for="descreen">descreen</label>
						</td>
						<td>:</td>
						<td>
							<input type="text" name="descreen" id="descreen" value="<?= $smart["descreen"]; ?>">
						</td>
					</tr>
					<tr>
						<td>
							<label for="softhard">softhard</label>
						</td>
						<td>:</td>
						<td>
							<input type="text" name="softhard" id="softhard" value="<?= $smart["softhard"]; ?>">
						</td>
					</tr>
					<tr>
						<td>
							<label for="memory">memory</label>
						</td>
						<td>:</td>
						<td>
							<input type="text" name="memory" id="memory" value="<?= $smart["memory"]; ?>">
						</td>
					</tr>
					<tr>
						<td>
							<label for="camera">camera</label>
						</td>
						<td>:</td>
						<td>
							<input type="text" name="camera" id="camera" value="<?= $smart["camera"]; ?>">
						</td>
					</tr>
					<tr>
						<td>
							<label for="battery">battery</label>
						</td>
						<td>:</td>
						<td>
							<input type="text" name="battery" id="battery" value="<?= $smart["battery"]; ?>">
						</td>
					</tr>
					<tr>
						<td>
							<label for="features">features</label>
						</td>
						<td>:</td>
						<td>
							<input type="text" name="features" id="features" value="<?= $smart["features"]; ?>">
						</td>
					</tr>
					<tr>
						<td>
							<label for="harga">harga</label>
						</td>
						<td>:</td>
						<td>
							<input type="text" name="harga" id="harga" value="<?= $smart["harga"]; ?>">
						</td>
					</tr>
					<tr>
						<td>
							<center><button type="submit" name="submit">Ubah Data!</button></center>
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