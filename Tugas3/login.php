<?php 
// cek apakah tombol submit sudah tekan atau belum 
if ( isset($_POST["submit"])) {
	// cek username dan password
	if ( $_POST["username"] == "admin" && $_POST["password"] == "123") {
		//  jika benar, redict ke halaman admin
		header("Location: halaman/admin.php");
		exit;
	} else if ( $_POST["username"] == "user" && $_POST["password"] == "321") {
		//  jika benar, redict ke halaman admin
		header("Location: halaman/user.php");
		exit;
	}else {
		// jika salah, tampilkan pesan kesalahan
		$error = true;
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/login3.css">
</head>
<body>
	<div class="content">
		<h1 align="center"><em>Login</em></h1>
		<center><img src="img/1.jpg"></center>

		<?php if( isset($error)) : ?>
		<center><p style="color: red; font-style: italic; font-size: 18px;">Username / Password Salah</p></center>
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
	<div class="catatan">
		<table>
			<tr>
				<td>
					Catatan
				</td>
				<td>
					:
				</td>
			</tr>
			<tr>
				<td>
					1. User
				</td>
				<td>
					=
				</td>
				<td>
					(Username : user dan Password : 321)
				</td>
			</tr>
			<tr>
				<td>
					2. Admin
				</td>
				<td>
					=
				</td>
				<td>
					(Username : admin dan Password : 123)
				</td>
			</tr>
		</table>
	</div>
</body>
</html>