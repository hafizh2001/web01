<?php
	include "koneksi.php";

	$id = $_GET['id'];
	$tim1 = $_GET['tim_1'];
	$tim2 = $_GET['tim_2'];
	$date = $_GET['data'];
	$query = "UPDATE jadwal_pertandingan SET tim_1 = '$tim1', tim_2 = '$tim2',data = '$date' WHERE id = '$id'";
	$result = mysqli_query($koneksi, $query);

	if($result) {
		header("Location:index.php");
	} else {
		echo "Gagal update data" . mysqli_error($koneksi);
	}
?>	