<?php
	include("koneksi.php");
	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$gender = $_POST['gender'];
	$status = $_POST['status'];
	$level = $_POST['level'];
	$sql = "UPDATE user SET nama = '$nama', email = '$email', gender = '$gender', status = '$status',level = '$level' where id = '$id'";
		mysqli_query($koneksi, $sql);
	
		header('location: admin.php');
	
	
?>