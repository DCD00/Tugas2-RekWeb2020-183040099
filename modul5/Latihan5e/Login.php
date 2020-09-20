<?php 
// cek apakah tombol submit sudah tekan atau belum 
if ( isset($_POST["submit"])) {
	// cek username dan password
	if ( $_POST["username"] == "admin" && $_POST["password"] == "123") {
		//  jika benar, redict ke halaman admin
		header("Location: admin.php");
		exit;
	} else {
		// jika salah, tampilkan pesan kesalahan
		$error = true;
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<style type="text/css">
		img{
			width: 100px;
			height: 100px;
			border-radius: 50%
			
		}
		div{
			border: 1px solid white;
			width: 300px;
			height: 350px;
			background-color: #A9A9A9;
			margin: 20px auto;
			box-shadow: 5px 5px 5px rgba(0,0,0,.75);
		}
		div h1 {
			font-family: "times new roman", times, serif;
		}
	</style>
</head>
<body>
	<div>
		<h1 align="center"><em>Login Admin</em></h1>
		<center><img src="1.jpg"></center>

		<?php if( isset($error)) : ?>
		<center><p style="color: red; font-style: italic;">username / password salah</p></center>
		<?php endif; ?>

		<br>
		<form action="" method="post" align="center">
			<table align="center">
				<tr>
					<td>
						<label for="username"><em>Username </em></label>
					</td>
					<td>:</td>
					<td>
						<input type="text" name="username" id="username">
					</td>
				</tr>
				<tr>
					<td>
						<label for="password"><em>Password </em></label>
					</td>
					<td>:</td>
					<td>
						<input type="password" name="password" id="password">
					</td>
				</tr>
				<tr>
					<td>
						<button type="submit" name="submit">Login</button>
					</td>
					<td></td>
					<td></td>
				</tr>
			</table>
		</form>

	</div>


</body>
</html>