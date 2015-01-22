<?php
	session_start();
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
			$lqs = "SELECT id, nama FROM user WHERE id = '$user_id'";
			$hasill = mysqli_query($koneksi, $sql);
			mysqli_num_rows($hasill);
			$baris = mysqli_fetch_assoc($hasill);
			
			$id = $baris['id'];
			$nama = $baris['nama'];
			
			$_SESSION['idNIM'] = $id;
			$_SESSION['namaUser'] = $nama;
			
			
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