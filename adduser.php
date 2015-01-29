
<html>
	<head>
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
				<div style="margin-left:50px;">
					<h1>Admin - Add User</h1>
				</div>
				<form action="addproses.php" method = "POST" autocomplete="off">
				<table style="margin-left:50px;">
				<tr>
					<td>
						Masukkan User ID
					</td>
					<td>
						<input type ="text" name="id" value="">
					</td>
				</tr>
				<tr>
					<td>
						Masukkan Nama
					</td>
					<td>
						<input type ="text" name="nama" value="">
					</td>
				</tr>
				<tr>
					<td>
						Gender
					</td>
					<td>
						<select name="gender" width="50px">
						<option value="" selected>Select Gender</option>
						<option value="Male">Male</option>
						<option value="Female">Famale</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>
						Pilih Level
					</td>
					<td>
						 <select name="level">
						<option value="" selected>Select Status</option>
						<option value="1">Admin</option>
						<option value="2">User</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>
						Pilih Status 
					</td>
					<td>
						<select name="status">					
						 <option value="" selected>Select Status</option>
						 <option value="Lecturer">Lecturer</option>
						 <option value="College Student">College Student</option>
						 <option value="Employee">Employee</option>
						 </select>
					</td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type ="submit" name ="adduser" value="Add User"> &nbsp <a href= "admin.php"style="text-decoration:none"><input type ="button" name ="back" value="Back" /></a>
					</td>
				</tr>
				</table>
				</form>
			</div>
		</div>
<?php require_once("footer.php"); ?>