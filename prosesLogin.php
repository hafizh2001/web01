<?php
	include "koneksi.php";

	$username=$_POST['name'];
	$password=$_POST['pass'];

	$query="SELECT * FROM admin WHERE username='$username' and password='$password'";
	$hasil=mysqli_query($koneksi,$query);
	$cek=mysqli_num_rows($hasil);

	if($cek){
	header("Location:side.php");	
		
		
	}
	else{
		header("Location:formLogin.html");
		echo mysqli_error ($koneksi);
	}
	?>