<!DOCTYPE html>
<html>
<head>
	<title>Latihan 5d</title>
	<style>
		.kotak{
			
			height: 30px;
			width: 30px;
			text-align: center;
			line-height: 30px;
			border: 1px black solid;
			float: left;
			margin:  2px;
			color: black;
		}
		.kotak1{
			background-color:#57e65a;
			height: 30px;
			width: 30px;
			text-align: center;
			line-height: 30px;
			border: 1px black solid;
			float: left;
			margin:  2px;
			color: black;
		}
		.clear{
			clear: both;

		}
	</style>
</head>
<body>
	<form action="" method="POST">
		Masukkan Angka <input type="text" name="bintang">
		<input type="submit" name="submit" value="Tampilkan">
	</form>
	<br>
	<?php
		if (isset($_POST['submit'])) {
		$bint = $_POST['bintang'];

		for ( $i = $bint ; $i >= 1; $i--) { 
			for ($j = 1; $j <= $i; $j++) { 
				if ($i % 2) {
					echo "<div class='kotak'>$i</div>";
				} else {
					echo "<div class='kotak1'>$i</div>";
				}
			}
			echo "<div class='clear'></div>";
		}
		}
	?>
</body>
</html>