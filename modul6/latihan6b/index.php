<?php 
require 'php/function.php';
$smartphone = query("SELECT * FROM smartphone");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Latihan 6b</title>
	<style>
		.aa {
			background-color: orange;
		}
		.content img{
			width: 100px;
			height: 100px;
		}
		h1 {
			text-align: center;
		}
	</style>
</head>
<body>
	<?php $a=1; ?>
	<div class="container">
		<h1>Daftar Smartphone Terbaru 2019</h1>
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
		<?php foreach ($smartphone as $smart ) : ?>
		<div class="content">
				<tr>
					<td align="center"><?= $a++ ?></td>
					<td align="center"><img src="img/<?= $smart['gambar'] ?>"></td>
					<td><?= $smart["nama"]; ?></td>
					<td><?= $smart["netcon"]; ?></td>
					<td><?= $smart["descreen"]; ?></td>
					<td><?= $smart["softhard"] ?></td>
					<td><?= $smart["memory"] ?></td>
					<td><?= $smart["camera"] ?></td>
					<td><?= $smart["battery"] ?></td>
					<td><?= $smart["features"] ?></td>
					<td><?= $smart["harga"]; ?></td>
				</tr>
		</div>
		<?php endforeach; ?>
		</table>
	</div>
</body>
</html>