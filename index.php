<html>
	<head>
		<link type="text/css" rel="stylesheet" href="Css/Style.css" />
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
					<div id="slide_images">
						<!-- image -->
						<img src="css/images/test.jpg" = width="97%" height="100%">
					</div>
				</div>
				
				<!-- bawah -->
				<div>
					<div id="outer_article">
						<div class="main_article">
							<div>
								<img id ="artikel" src="css/images/new_artikel.jpg" >
							</div>
							<!--aartikel kanan bawah-->
							<div id= "artikel1">
								<div>

								</div>
							</div>
						</div>
						
						<div class="main_article">
							<img id ="artikel" src="css/images/trending.jpg" >
						</div>
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
									User ID
								</td>
								<td class="input" align="right">
									<input class="LoginInput" type="text" name="user_id" value=""/>
								</td>
							</tr>
							<tr>
								<td>
									Password 
								</td>
								<td class="input" align="right">
									<input class="LoginInput" type="password" name="password" value=""/>
								</td>
							</tr>
							<tr id="TombolSignIn">
								<td colspan="2" align="right" valign="bottom">
									<input type="submit" name="submit" value="Sign In" />
								</td>
							</tr>
							<tr id="SignUp">
								<td colspan="2" align="right" valign="bottom">
									New to Kalbisiana ? <a href="#">Sign Up Now >></a>
								</td>
							</tr>
						</table>
					</div>
				</div>
				<!--sebelah kanan artikel-->
				<div id="content_right">
					<div class="line">
						<table>
							<tr>
								<td>
									<img src="css/images/1.jpg" >
								</td>
								<td>
									Menjadi reseller fashion termurah...
								</td>
							</tr>
						</table>
					</div>
					<div class="line1">
						<table>
							<tr>
								<td>
									<img id="line2" src="css/images/2.jpg" >
								</td>
								<td>
									Reparasi komputermudi "Great Tekno"....
								</td>
							</tr>
						</table>
					</div>
				</div>
				<div id="info">
				<!--logo info dan annoucment-->
					<div>
						<table>
							<tr>
								<td>
									<div>
										<img src="css/images/info.jpg" width="50px" >
									</div>
								</td>
								<td>
									<div>
										<img src="css/images/annoucment.jpg" width="116px" >
									</div>
								</td>
							</tr>
						</table>
					</div>
				<!--info dan annoucment-->	
				<div>
					<a href="#">=> MRT Presented "How be Good Announcer"</a>
				</div>
				</div>
			</div>
		</div>
<?php require_once("footer.php"); ?>