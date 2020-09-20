<?php 
// cek apakah tidak ada data di $_GET
if(	!isset($_GET["no"])) {
	// redirect
	header("Location: Latihan5b.php");
	exit;
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Spesifikasi Smartphone</title>
	<style>
		.aa {
			background-color: orange;
		}
	</style>
</head>
<body>
	<table border="1" cellspacing="0" cellpadding="3">
		<tr align="center" class="aa">
			<td>No</td>
			<td>Gambar</td>
			<td width="110">Basic Info</td>
			<td width="110">Network & Connectivity</td>
			<td>Design & Screen</td>
			<td width="135">Platform</td>
			<td width="100">Memory</td>
			<td width="165">Camera</td>
			<td width="110">Battery</td>
			<td>Other Features</td>
			<td width="90">Harga</td>
		</tr>
		<tr>
			<td align="center"><?= $_GET["no"] ?></td>
			<td align="center"><img src="img/<?= $_GET["gambar"]; ?>"></td>
			<td><?= $_GET["basic%info"] ?></td>
			<td><?= $_GET["netcon"] ?></td>
			<td><?= $_GET["descreen"] ?></td>
			<td><?= $_GET["softhard"] ?></td>
			<td><?= $_GET["memory"] ?></td>
			<td><?= $_GET["camera"] ?></td>
			<td><?= $_GET["battery"] ?></td>
			<td><?= $_GET["otherfeatures"] ?></td>
			<td><?= $_GET["harga"] ?></td>
		</tr>
	</table>
	<a href="Latihan5b.php">kembali</a>
</body>
</html>