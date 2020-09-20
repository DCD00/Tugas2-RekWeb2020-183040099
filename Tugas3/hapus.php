<?php

require 'functions.php';

// cek apakah tombol submit sudah ditekan atau belum
$id = $_GET['id'];
	
	// cek apakah data berhasil di tambahkan atau tidak
	if( hapus($id) > 0 ) {
		echo "
			<script>
				alert('data berhasil dihapus!');
				document.location.href = 'halaman/admin.php';
			</script>
		";
	} else {
		echo "
			<script>
				alert('data gagal dihapus!');
				document.location.href = 'halaman/admin.php';
			</script>
		";
	}


?>