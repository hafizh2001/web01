<?php
	include "koneksi.php";

	$username = $_GET['username'];
	$query = "DELETE FROM admin WHERE username='$username'";
	$result = mysqli_query($koneksi, $query);

	if ($result) {
		echo "Data berhasil dihapus";
?>	
	<a href="side.php">Lihat data di Tabel</a>
<?php	
	} else {
		echo "Data gagal dihapus". mysqli_error($koneksi);
	}
?>	