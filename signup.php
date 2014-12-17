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
					</table>
				</div>
				
				<!-- tengah -->
				<div style="margin-left:20px;">
				<h3>PENDAFTRAN</h3>
					<table>
						<tr>
							<td>
								User-Id:
							</td>
							<td>
								<input type="text" name="id" value=""/>
							</td>
						</tr>
						<tr>
							<td>
								Name:
							</td>
							<td>
								<input type="text" name="name" value=""/>
							</td>
						</tr>
						<tr>
							<td>
								Email:
							</td>
							<td>
								<input type="email" name="email" value=""/>
							</td>
						</tr>
						<tr>
							<td>
								Password:
							</td>
								<td>
									<input type="password" name="pass" value=""/>
								</td>
						</tr>
						<tr>
							<td>
								Re-enter Password:
							</td>
							<td>
								<input type="password" name="repass" value=""/>
							</td>
						</tr>
						<tr>
							<td>
								Gender:
							</td>
							<td>
								<select name="gender">
									<option name="female">Female </option>
									<option name="male">Male </option>
								</select>
							</td>
						</tr>
						<tr>
							<td>
								Who Are You?
							</td>
							<td>
								<select name="status">
									<option name="lecturer">Lecturer</option>
									<option name="college_stundent">College Student</option>
									<option name="employee">Employee</option>
								</select>
							</td>
						</tr>
						<tr>
							<td align="right" valign="bottom">
								<input type="submit" name="create" value="Create" />
							</td>
							<td align="right" valign="bottom">
								<input type="submit" name="cancel" value="Cancel" />
							</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
<?php require_once("footer.php"); ?>