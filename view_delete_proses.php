<?php require_once("koneksi.php");?>
<?php
	$id = $_GET['status'];
	$sql="DELETE FROM user WHERE id ='$id'";
	mysqli_query($koneksi, $sql);
	header("Location: admin.php");
		
?>