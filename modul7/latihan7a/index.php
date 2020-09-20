<?php 
require 'functions.php';
$smartphone = query("SELECT * FROM smartphone");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
	<style>
		h1 {
			text-align: center;
		}

		.jud {
			background-color: orange;
		}
		.ubah {
			border-radius: 15%;
			height: 20px;
			width: 30px;
			padding: 5px;
			background-color: green;
			color: black;
			text-decoration: none;
		}
		.ubah:hover, .hapus:hover{
			background-color: black;
		}
		.hapus {
			border-radius: 15%;
			height: 20px;
			width: 37px;
			padding: 5px;
			background-color: red;
			color: black;
			text-decoration: none;
		}
		.hapus span:hover, .ubah span:hover{
			color: white;
		}
	</style>
</head>
<body>

<h1>Daftar Smartphone</h1>

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
			<a class="ubah" href=""><span>ubah</span></a> <a class="hapus" href=""><span>hapus</span></a>
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