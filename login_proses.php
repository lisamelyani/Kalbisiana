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
			$lqs = "SELECT id, nama, level, foto FROM user WHERE id = '$user_id'";//tambahin untuk select level
			$hasill = mysqli_query($koneksi, $lqs);
			mysqli_num_rows($hasill);
			$baris = mysqli_fetch_assoc($hasill);
			
			$id = $baris['id'];
			$nama = $baris['nama'];
			$level = $baris ['level'];
			$foto=$baris['foto'];
			//	echo "level nya $level";
			 $_SESSION['idNIM'] = $id;
			 $_SESSION['namaUser'] = $nama;
			 $_SESSION['levelUser'] = $level;
			 $_SESSION['fotoUser'] = $foto;
			// tambahin session untuk level
			// bikin cek level menggunakan if, jika 1 masuk sebagai admin, jika 2 user 
			if($_SESSION['levelUser'] == 1){
				header('Location: admin.php');
			}else{
				header('Location: user.php');
			}
		}
		 else{ 
			header('Location: index.php');
		}
	}
	else{
		header('Location:  index.php');
	}
?>