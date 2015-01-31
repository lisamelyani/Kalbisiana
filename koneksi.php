<?php 
	
	$host = "mysql.idhostinger.com";
	$user = "u488099494_kalbi";
	$pass = "1234567890qwerty";
	$name = "u488099494_kalbi";
	
	$koneksi = mysqli_connect($host, $user, $pass, $name);
	
	if(mysqli_connect_errno()) {
		echo "Koneksi Gagal:";
		echo mysqli_connect_error();
		echo "(" . mysqli_connect_errno() . ")";
		die();
	} else {
		//echo "Koneksi Database Berhasil.";
	}
?>