<?php include "koneksi.php" ?>

<?php
	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$level = $_POST['level'];
	$status = $_POST['status'];
	$gender = $_POST['gender'];
	//$email = $_POST['email'];
	
	$pass= "1234";
	$format = "$2a$10$";
	$hash   = "tebakpasswordsayahahaha20";
	$salt   = $format . $hash;
	
	$new_pass = crypt($pass, $salt);
	
	if($id == "" || $name == "" || $status ==""/*|| $email == ""*/)
	{
		header('Location:adduser.php');
		//echo "TIDAK BISA";
	}
	else
	{
		$sql = "INSERT INTO user (id , nama ,level, status, password, gender) VALUES ('$id','$nama','$level','$status', '$new_pass', '$gender')";
		$hasil = mysqli_query($koneksi, $sql);
		header('Location:adduser.php');
		
	}
	//echo "$id - $name - $status";
?>