<?php 
$conn = mysqli_connect("localhost", "root", "") or die("koneksi ke DB gagal!");
mysqli_select_db($conn, "pw_183040099") or die("Database salah!");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Latihan 6a</title>
	<style>
		.aa {
			background-color: orange;
		}
		.content img{
			width: 100px;
			height: 100px;
		}
	</style>
</head>
<body>
	<?php $a=1; ?>
	<div class="container">
		<em><center><h1>Daftar Smartphone Terbaru 2019</h1></center></em>
		<div class="content">
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
				<?php 
				$result = mysqli_query($conn, "SELECT * FROM smartphone");
				while( $row = mysqli_fetch_assoc($result) ){
				?>
				<tr>
					<td align="center"><?= $a++ ?></td>
					<td align="center"><img src="img/<?= $row['gambar'] ?>"></td>
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
				<?php } ?>
			</table>
		</div>
		
	</div>
</body>
</html>