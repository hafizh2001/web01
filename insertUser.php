<?php
	include "koneksi.php";

	
	$usernama = $_GET['username'];
	$password = $_GET['password'];

	$sql = "INSERT INTO admin( username,password,level)
			VALUE('$username', '$password',2 )";

	if (mysqli_query($koneksi, $sql)) {
		echo "Record  berhasil ditambahkan";
	}		
	else {
		echo "Record gagal ditambahkan <br>" . mysqli_error($koneksi);
	}

	mysqli_close($koneksi);
?>	