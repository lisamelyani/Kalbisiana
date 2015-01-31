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
					<div id="viewAtas">
						<!-- image -->
						<table width="70%">
						<tr>
							<td width="150px">
								<img src="css/images/kucing.jpg" = width="120px" height="130px">
							</td>
							<td><h3>
									About<br />
									View Article<br />
									Send Message
								</h3>
							</td>
						</tr>
						</table>
					</div>
				</div>
				
				<!-- bawah -->
				<div>
					<div id="outer_article">
						<div class="kirimpesan">
							<table width="100%">
							
								<tr>
									<td><b>Title</b></td>
									<td><input type="text" name="judulmessage" value="" /></td>
								</tr>
								<tr>
									<td colspan="2">
										<textarea name="isipesan" rows="12" cols="120">
										</textarea>
									</td>
								</tr>
								<tr>
									<td colspan="2" align="right">
									<input type="submit" name="kirim" value="Send">
									</td>
								</tr>
							</table>
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
									<h2>Hi,<br />DISYA</h2>
								</td>
								<td class="input" align="right">
									<img id ="fotoUser" src="css/images/kucing.jpg" >
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