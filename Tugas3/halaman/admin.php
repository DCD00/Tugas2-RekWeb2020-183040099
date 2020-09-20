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
	<title>Halaman Admin</title>
	<link rel="stylesheet" type="text/css" href="../css/admin3.css">
</head>
<body>
<div class="container">

	<div class="log">
		<a href="../login.php">Logout</a>
	</div>

	<h1>Daftar Smartphone</h1>
	
	<span class="tambah"><a href="../tambah.php">Tambah data smartphone</a></span>
	<br><br>

	<div class="cari">
		<form action="" method="post">

		<input type="text" name="keyword" size="40" autofocus placeholder="masukkan keyword pencarian.." autocomplete="off">
		<button type="submit" name="cari">Cari!</button>
		
		</form>
	</div>

	<br>

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
				<a class="ubah" href="../ubah.php?id=<?= $row["id"]; ?>"><span>ubah</span></a> <a class="hapus" href="../hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('Anda yakin ingin menghapus data ini?')"><span>hapus</span></a>
			</td>
			<td align="center"><img width="75" src="../img/<?= $row['gambar'] ?>"></td>
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
</div>
</body>
</html>