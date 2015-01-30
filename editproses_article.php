<?php
	include("koneksi.php");
	$id_artikel = $_POST['id'];
	$judul = $_POST['judul'];
	$tipe = $_POST['tipe'];
	$tanggal = $_POST['tanggal'];
	$isi = $_POST['isi'];
	$sql = "UPDATE artikel SET judul = '$judul', tipe = '$tipe', tanggal = '$tanggal', isi = '$isi' where id_artikel = '$id_artikel'";
		mysqli_query($koneksi, $sql);
	
		header('location: user.php');
	
	
?>