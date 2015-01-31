<html>
	<head>
		<link type="text/css" rel="stylesheet" href="css/Style.css" />
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
					<div id="result">
						<!-- image -->
						Result
					</div>
				</div>
				
				<!-- bawah -->
				<div>
					<div id="outer_article">
						<div class="hasilcari">
							kami tidak menemukan apa-apa
						</div>
						
					</div>
				</div>
			</div>
			<!-- kanan -->
			<div id="outer_kanan" class="conten_kanan_kiri">
				<div id="form_login">
					<div id="insert_login">
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
									<a href="#">Menjadi reseller fashion termurah...</a>
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
									<a href="#">Reparasi komputermudi "Great Tekno"....</a>
								</td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>
<?php require_once("footer.php"); ?>