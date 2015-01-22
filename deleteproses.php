<?php
ob_start();
session_start();
?>

<?php
	include("koneksi.php");
	$id_user = $_GET['id'];
	$sql = mysqli_query($koneksi,"delete from user where Id = '$id_user'") or die(mysql_error());
	
	if($sql)
	{
		
		header('location: admin.php');
	}
	else
	{
		//echo $sql ;
		header('location: admin.php');
	}
	
?>