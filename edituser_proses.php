<?php
	include("koneksi.php");
	$id = $_POST['idku'];
	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$bio = $_POST['bio'];
	$sql = "UPDATE user SET nama = '$nama', email = '$email', bio = '$bio' where id = '$id'";
	mysqli_query($koneksi, $sql);
	
	header('location: user.php');
	
	
?>