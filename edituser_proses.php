<?php
	include("koneksi.php");
	$id = $_POST['idku'];
	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$bio = $_POST['bio'];
	
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
	
	$sql = "UPDATE user SET nama = '$nama', email = '$email', bio = '$bio', foto='$tujuan' where id = '$id'";
	mysqli_query($koneksi, $sql);
	
	header('location: user.php');
	
	
?>