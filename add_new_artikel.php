<?php
	include("koneksi.php");
	
	$nim = $_POST['nim'];
	$judul = $_POST['judul'];
	$tipe = $_POST['tipe'];
	$content = $_POST['content'];
	
	$sql = "INSERT INTO artikel (nim,judul , isi, tipe, tanggal) VALUES ($nim,'$judul','$content','$tipe',NOW())";
	//"<br /><br />" . $sql;
	mysqli_query($koneksi, $sql);
	header('Location: sukses_artikel.php');
?>