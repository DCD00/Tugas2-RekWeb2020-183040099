<?php 
require '../functions.php';
// cek apakah tidak ada data di $_GET
if(	!isset($_GET["id"])) {
	// redirect
	header("Location: user.php");
	exit;
}

$id = $_GET['id'];

$smart = query("SELECT * FROM smartphone WHERE id = $id")[0];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Profil</title>
	<link rel="stylesheet" type="text/css" href="../css/profil3.css">
</head>
<body>
	<div class="container">
		<h1>Spesifikasi Smartphone</h1>

		<div class="content">
			<div class="desc">
				<table cellspacing="0" cellpadding="4">
					<tr>
						<td class="gambar" colspan="3" align="center">
							<img src="../img/<?= $smart['gambar'] ?>" width="150">
						</td>
					</tr>
					<tr>
						<td width="130">Nama Produk</td>
						<td width="5">:</td>
						<td class="nama"><?= $smart["nama"]; ?></td>
					</tr>
					<tr>
						<td>Network & Conectivity</td>
						<td>:</td>
						<td><?= $smart["netcon"]; ?></td>
					</tr>
					<tr>
						<td>Desain & Screen</td>
						<td>:</td>
						<td width="300"><?= $smart["descreen"]; ?></td>
					</tr>
					<tr>
						<td>Software & Hardware</td>
						<td>:</td>
						<td><?= $smart["softhard"]; ?></td>
					</tr>
					<tr>
						<td>Camera</td>
						<td>:</td>
						<td><?= $smart["camera"] ?></td>
					</tr>
					<tr>
						<td>Memory</td>
						<td>:</td>
						<td><?= $smart["memory"] ?></td>
					</tr>
					<tr>
						<td>Battery</td>
						<td>:</td>
						<td><?= $smart["battery"] ?></td>
					</tr>
					<tr>
						<td>Other Features</td>
						<td>:</td>
						<td><?= $smart["features"] ?></td>
					</tr>
					<tr>
						<td>Harga</td>
						<td>:</td>
						<td><?= $smart["harga"]; ?></td>
					</tr>
				</table>
			</div>

			<div class="a">
				<center><p><a href="user.php">Kembali</a></p></center>
			</div>
			
		</div>
	</div>
</body>
</html>