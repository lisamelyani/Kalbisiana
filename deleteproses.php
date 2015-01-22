<?php
//ob_start();
//session_start();
?>

<?php
	include("koneksi.php");
	$id_user = $_POST['id'];
	//$sql = mysqli_query($koneksi,"delete from user where id = '$id_user'") or die(mysql_error());
	//echo $sql;
	// if($sql)
	// {
		
		// header('location: admin.php');
	// }
	// else
	// {
		// //echo $sql ;
		// header('location: admin.php');
	// }
	
	$sql = "DELETE FROM user WHERE id = {$id_user} LIMIT 1";
	mysqli_query($koneksi,$sql);
	header('Location: admin.php');

?>