<?php 
require 'functions.php';
$smartphone = query("SELECT * FROM smartphone");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
	<link rel="stylesheet" type="text/css" href="css/index7c.css">
</head>
<body>

	<h1>Daftar Smartphone</h1>

	<span class="tambah"><a href="tambah.php">Tambah data smartphone</a></span>
	<br><br>

	<table border="1" cellpadding="10" cellspacing="0">

		<tr class="jud">
			<th>No.</th>
			<th width="125">Aksi</th>
			<th>Gambar</th>
			<th width="100">Basic Info</th>
			<th width="80">Network & Connectivity</th>
			<th width="170">Design & Screen</th>
			<th width="120">Platform</th>
			<th width="110">Memory</th>
			<th width="150">Camera</th>
			<th width="60">Battery</th>
			<th>Other Features</th>
			<th width="90">Harga</th>
		</tr>

		<?php $i = 1; ?>
		<?php foreach( $smartphone as $row ) : ?>
		<tr>
			<td align="center"><?= $i; ?></td>
			<td>
				<a class="ubah" href=""><span>ubah</span></a> <a class="hapus" href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('Anda yakin ingin menghapus data ini?')"><span>hapus</span></a>
			</td>
			<td align="center"><img width="75" src="assets/img/<?= $row['gambar'] ?>"></td>
			<td><?= $row["nama"]; ?></td>
			<td><?= $row["netcon"]; ?></td>
			<td><?= $row["descreen"]; ?></td>
			<td><?= $row["softhard"] ?></td>
			<td><?= $row["memory"] ?></td>
			<td><?= $row["camera"] ?></td>
			<td><?= $row["battery"] ?></td>
			<td><?= $row["features"] ?></td>
			<td><?= $row["harga"]; ?></td>
		</tr>
		<?php $i++; ?>
		<?php endforeach; ?>
		
	</table>

</body>
</html>