<?php session_start();?>
<?php include ("koneksi.php")?>
<html>
	<head>
		<title>View Profile</title>
		<link type="text/css" rel="stylesheet" href="Css/Style.css" />
		<?php
			$id = $_GET['id'];
			$sql = "SELECT * FROM user WHERE id = '$id'";
			$hasil = mysqli_query($koneksi, $sql);
			$baris = mysqli_fetch_array($hasil);
		?>
	</head>
	<body>
		<?php require_once("header.php"); ?>
		
		<!-- Content -->
		<div id="outer_content">
			<!-- kiri -->
			<div id="outer_kiri" class="conten_kanan_kiri">
				<!-- atas -->
				<div>
					<table>
						<tr>
							<td>
								<div id="outer_search">
									<!-- buat seacrh -->
									<table>
										<tr>
											<td>
												<div id="outer_input_text_search">
													<input type="text" id="input_text_search" placeholder="Search for People, Article & Events"/>
												</div>
											</td>
											<td>
												<div id="icon_search">
													<div id="iconnya">
														<!-- icon search -->
														<img src="css/images/search.png" width="100%">
													</div>
												</div>
											</td>
										</tr>
									</table>
								</div>
							</td>
						</tr>
						<tr>
							<td>
								<!-- buat tanggal -->
								26 November 2014
							</td>
						</tr>
					</table>
				</div>
				
				<!-- tengah -->
				<div>
					<div id="viewAtas">
						<!-- image -->
						<table width="70%">
						<tr>
							<td width="150px">
								<img src="css/images/kucing.jpg" = width="120px" height="130px">
							</td>
							<td><h3>
									About<br /><br />
									View Article
								</h3>
							</td>
						</tr>
						</table>
					</div>
				</div>
				
				<!-- bawah -->
				<div>
				<?php
// 3. Menampilkan data dari Query
while ($baris = mysqli_fetch_assoc($hasil)){
?>
	<tr>
	<td><?php echo $baris ['id']?></td>
	<td><?php echo $baris ['nama']?></td>
	<td><?php echo $baris ['email']?></td>
	<td><?php echo $baris ['gender']?></td>
	<td><?php echo $baris ['status']?></td>
	<td><?php echo $baris ['bio']?></td>
	<td><?php echo $baris ['foto']?></td>
	</tr>
<?php	
}
?>
					<div id="outer_article">
					<form action="edituser_proses.php" method="POST">
						<div class="tentangUser">
							<table width="100%">
								<tr>
									<td>
										<table>
											<tr>
												<td><b>NIM</b></td>
												<td><input type="text" name="id" value="<?php echo $baris['id']; ?>"></td>
											</tr>
											<tr>
												<td><b>Name</b></td>
												<td><input type="text" name="nama" value="<?php echo $baris['nama']; ?>"></td>
											</tr>
											<tr>
												<td><b>Gender</b></td>
												<td><input type="text" name="gender" value="<?php echo $baris['gender']; ?>"></td>
											</tr>
											<tr>
												<td><b>Email</b></td>
												<td><input type="text" name="email" value="<?php echo $baris['email']; ?>"></td>
											</tr>
											<tr>
												<td><b>Status</b></td>
												<td><input type="text" name="status" value="<?php echo $baris['status']; ?>"></td>
											</tr>
										</table>
									</td>
									<td>
											<table>
												<tr>
													<td>
														<b>Biography</b>
													</td>
													<td>
														<textarea name="bio" rows="10" cols="40" value="<?php echo $baris['bio']; ?>"></textarea>
													</td>
												</tr>
											</table>
									</td>
								</tr>
								<tr>
									<td><input type="submit" name="edit" value="Edit"></td>
								</tr>
							</table>
						</div>
						</form>
					</div>
				</div>
			</div>
			<!-- kanan -->
			<div id="outer_kanan" class="conten_kanan_kiri">
				<div id="form_login">
					<div id="insert_login" border="black">
						<table>
							<tr>
								<td>
									<h1>Hi! <?php echo htmlentities($_SESSION['namaUser']);?></h1>
								</td>
							</tr>
							<tr>
								<td>
									<a href="index.php"><h3>Log Out</h3></a>
								</td>
							</tr>
						</table>
					</div>
				</div>
				
				</div><!--Tutup kanan-->
			</div>
			
<?php require_once("footer.php"); ?>