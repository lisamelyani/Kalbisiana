<?php 
session_start();
require_once("koneksi.php"); ?>
<html>
	<head>
		<link type="text/css" rel="stylesheet" href="css/style_admin.css" />
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
					<table>
					<form action="add_new_artikel.php" method="POST">
						<tr><!--buka TR atas-->
							<td>
								Judul
								
								<input class="LoginInput" type="text" name="judul" value=""/>
								
								Tipe
								<select name="tipe">
												<option name="bisnis">Business</option>
												<option name="sport">Sport</option>
												<option name="hidup">Lifestyle</option>
								</select>
								<input style="opacity:0;" name="nim" value="<?php echo htmlentities($_SESSION['idNIM']);?>"/>
							</td>
						</tr><!--tutup TR atas-->
						<tr>
							<td>
								<textarea name="content" rows="20" cols="94"></textarea>
							</td>
							
						</tr>
						<tr>
							<td>
								<input type="submit" name="isi" value="Create" />
							</td>
						</tr>
					</form>
					</table>
					<!--<h1>create article!</h1>-->
				</div>
			</div>
		</div>
		<?php require_once ("outer_kanan_user.php");?>
<?php require_once("footer.php"); ?>