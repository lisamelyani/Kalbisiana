<?php
	include("koneksi.php");
	require_once("functiion.php");
	
	$user_id = $_POST['user_id'];
	$name = $_POST['name'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	$gender = $_POST['gender'];
	$status = $_POST['status'];
	$bio = $_POST['bio'];
	
	$pass = pass_crypt($password);
	if(isset($_FILES['file'])) {
	$file = $_FILES['file'];
		
		$file_name = $file['name'];
		$file_tmp = $file['tmp_name'];
		$file_size = $file['size'];
		$file_error = $file['error'];
		
		$ext = explode('.', $file['name']);
		$ext = strtolower(end($ext));
		
		$sumber = $file['tmp_name'];
		$tujuan = "gambar/" . $file_name;
		
			move_uploaded_file($sumber, $tujuan);
	}
	$sql = "INSERT INTO user (id, nama, email, password, gender, status, bio, foto, level) VALUES ($user_id,'$name','$email','$pass','$gender','$status','$bio','$tujuan', '2')";
	echo "<br /><br />" . $sql;
	mysqli_query($koneksi, $sql);
	header('Location: sukses.php');
?>