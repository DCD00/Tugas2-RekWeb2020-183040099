<?php 
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "pw_183040099");


function query($query) {
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while( $row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;
	}
	return $rows;
}


function tambah($data) {
	global $conn;

	$gambar = htmlspecialchars($data["gambar"]);
	$nama = htmlspecialchars($data["nama"]);
	$netcon = htmlspecialchars($data["netcon"]);
	$descreen = htmlspecialchars($data["descreen"]);
	$softhard = htmlspecialchars($data["softhard"]);
	$memory = htmlspecialchars($data["memory"]);
	$camera = htmlspecialchars($data["camera"]);
	$battery = htmlspecialchars($data["battery"]);
	$features = htmlspecialchars($data["features"]);
	$harga = htmlspecialchars($data["harga"]);

	$query = "INSERT INTO smartphone
				VALUES
			  ('','$gambar', '$nama', '$netcon', '$descreen', '$softhard', '$memory', '$camera', '$battery', '$features', '$harga')
			";

	//die($query);
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}


function hapus($id) {
	global $conn;
	mysqli_query($conn, "DELETE FROM smartphone WHERE id = $id");
	return mysqli_affected_rows($conn);
}


function ubah($data) {
	global $conn;

	$id = $data["id"];
	$gambar = htmlspecialchars($data["gambar"]);
	$nama = htmlspecialchars($data["nama"]);
	$netcon = htmlspecialchars($data["netcon"]);
	$descreen = htmlspecialchars($data["descreen"]);
	$softhard = htmlspecialchars($data["softhard"]);
	$memory = htmlspecialchars($data["memory"]);
	$camera = htmlspecialchars($data["camera"]);
	$battery = htmlspecialchars($data["battery"]);
	$features = htmlspecialchars($data["features"]);
	$harga = htmlspecialchars($data["harga"]);

	$query = "UPDATE smartphone SET
				gambar = '$gambar',
				nama = '$nama',
				netcon = '$netcon',
				descreen = '$descreen',
				softhard = '$softhard',
				memory = '$memory',
				camera = '$camera',
				battery = '$battery',
				features = '$features',
				harga = '$harga'
			  WHERE id = $id
			";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);	
}
?>