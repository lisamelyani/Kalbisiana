<?php require_once ("koneksi.php");?>
<?php require_once ("view_proses.php");?>




<!DOCTYPE html>
<html>
<head>
	<title>View User</title>
	<link type="text/css" rel="stylesheet" href="Css/style_admin.css" />
</head>


<body>
<!-- Header --->
		<div id="outer_header">
			<!-- Logo -->
			<center>
				<table id="TabelHeader">
					<tr>
						<td>
							<div id="logo">
								<a href="index.php">
									<img id="ImageLogo" src="css/images/logo.jpg" height="62px">
								</a>
							</div>
						</td>
						<td>
							<a href="https://www.facebook.com/"><img src="css/images/fb.png" width="45px"></a>
						</td>
						<td>
							<a href="https://www.twitter.com/"><img src="css/images/twitter.png" width="45px"></a>
						</td>
					</tr>
				</table>
			</center>
		</div>
		
		<!-- Content -->
		<div id="outer_content">
			<!-- kiri -->
			<div id="outer_kiri" class="conten_kanan_kiri">
				<!-- atas -->
				<div style="margin-left:20px;">
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
				<div style="margin-left:20px;">
					<h1>Welcome to Admin Page!</h1>
					 <a href = "adduser.php" style="text-decoration:none"><input type="button" name="insert" value="Add User" /></a>
					<br />
					<br />
	<table border = "1">
	<thead>
	<tr>
		<th>ID</th>
		<th>Nama</th>
		<th>Password</th>
		<th>Email</th>
		<th>Gender</th>
		<th>Status</th>
		<th>Bio</th>
		<th>Foto</th>
		<th>Level</th>
		<th>Action</th>
	</tr>
	</thead>
	<tbody>

<?php
// 3. Menampilkan data dari Query
while ($baris = mysqli_fetch_assoc($hasil)){
?>
	<tr>
	<td><?php echo $baris ['id']?></td>
	<td><?php echo $baris ['nama']?></td>
	<td><?php echo $baris ['password']?></td>
	<td><?php echo $baris ['email']?></td>
	<td><?php echo $baris ['gender']?></td>
	<td><?php echo $baris ['status']?></td>
	<td><?php echo $baris ['bio']?></td>
	<td><?php echo $baris ['foto']?></td>
	<td><?php echo $baris ['level']?></td>
	<td><a href ="edituser.php?ID=<?php echo $baris['id'];?>"> Edit </a>
	<a href="view_delete_proses.php?status=<?php echo $baris['id'];?>"> Delete</a></td>
	</tr>
<?php	
}
?>
</tbody>
</table>
</body>


<?php
// 4. Free up memori dgn mysqli_free_result
mysqli_free_result($hasil);

// 5. Menutup Database
mysqli_close($koneksi);
?>

</html>
		



		