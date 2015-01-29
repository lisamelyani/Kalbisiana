<?php
	include ("koneksi.php");
?>
<html>
	<head>
		<link type="text/css" rel="stylesheet" href="Css/style_admin.css" />
		<title>Edit User</title>
		<?php
			$id = $_GET['ID'];
			$sql = "SELECT * FROM user WHERE id = '$id'";
			$hasil = mysqli_query($koneksi, $sql);
			$baris = mysqli_fetch_array($hasil);
		?>
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
				<form action="editproses.php" method="POST">
					<div style="margin-left:20px;">
						<h1>Admin - Edit User</h1>
					</div>
					<table>
					<tr>
						<td>User ID : </td>
						<td><input type ="text" name="id" value="<?php echo $baris['id']; ?>"></td>
					</tr>
					<tr>
						<td>Name</td>
						<td><input type ="text" name="nama" value="<?php echo $baris['nama']; ?>"></td>
					</tr>
					<tr>
						<td>Email</td>
						<td><input type ="text" name="email" value="<?php echo $baris['email']; ?>"></td>
					</tr>
					<tr>
						<td>Gender</td>
						<td><select name="gender" value="<?php echo $baris['gender']; ?>">
								<option name="Male" value="Male">Male</option>
								<option name="Female" value="Female">Female</option>
							</select></td>
					</tr>
					<tr>
						<td>Status</td>
						<td><select name="status" value="<?php echo $baris['status']; ?>">
								<option name="Lecturer" value="Lecturer">Lecturer</option>
								<option name="College Student" value="College Student">College Student</option>
								<option name="Employee" value="Employee">Employee</option>
							</select></td>
					</tr>
					<tr>
						<td>Level User</td>
						<td>
							<select name="level" value="<?php echo $baris['level']; ?>">
								<option name="1" value="1">Level 1</option>
								<option name="2" value="2">Level 2</option>
							</select>
						</td>
					</tr>
					<tr>
						<td></td>
						<td><input type ="submit" name ="update" value="Update"></td>
					</tr>
					</table>
				</form>
			</div>
		</div>
		
<?php require_once("footer.php"); ?>