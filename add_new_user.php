<?php
	include("koneksi.php");
	require_once("functiion.php");
	
	$user_id = $_POST['user_id'];
	$name = $_POST['name'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	$gender = $_POST['gender'];
	$status = $_POST['status'];
	//$upload = $_FILES['upload'];
	$bio = $_POST['bio'];
	
	/* echo $password;	
	//$pass = pass_crypt($password);
	
	//$file = $_FILES['upload'];
		
		$file_name = $file['name'];
		$file_tmp = $file['tmp_name'];
		$file_size = $file['size'];
		$file_error = $file['error'];
		
		$ext = explode('.', $file['name']);
		$ext = strtolower(end($ext));
		
		echo $ext;
		
		$sumber = $file['tmp_name'];
		$tujuan = "gambar/" . $file_name;
		
			move_uploaded_file($sumber, $tujuan); */
	if(!mysqli_query($sql= "INSERT INTO user (id,name) VALUES ('$user_id','$name')"))
	{
	echo ("error desc: " . mysqli_error($sql));
	}
	//$sql = "INSERT INTO user (id, name, email, password, gender, status, foto, bio) VALUES ('$user_id','$name','$email','$pass','$gender','$status','$tujuan','$bio')";
	mysqli_query($koneksi, $sql);
	header('Location: signup.php');
?>