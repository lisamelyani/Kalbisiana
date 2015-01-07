<?php
	include("koneksi.php");
	include("functiion.php");
	
	$user_id = $_POST["user_id"];
	$password = $_POST["password"];

	$sql = "SELECT * FROM user WHERE id = '$user_id'";
	$hasil = mysqli_query($koneksi, $sql);

	
	if(mysqli_num_rows($hasil)){
		$pass = pass_crypt($password);
		$upass = mysqli_fetch_assoc($hasil);
		if($pass == $upass['password']){
			header('Location: user.php');
		}
		else{
			header('Location: login.php');
		}
	}
	else{
		header('Location: login.php');
	}
?>