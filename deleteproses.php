<?php
	include("koneksi.php");
	$id_user = $_POST['id'];
	
	$sql = "DELETE FROM user WHERE id = {$id_user} LIMIT 1";
	mysqli_query($koneksi,$sql);
	header('Location: admin.php');

?>