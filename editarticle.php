<?php
session_start();
	include ("koneksi.php");
?>
<html>
	<head>
		<link type="text/css" rel="stylesheet" href="css/style_admin.css" />
		<title>Edit Article</title>
		<?php
			$id = $_GET['ID'];
			$sql = "SELECT * FROM artikel WHERE id_artikel = '$id'";
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
				<form action="editproses_article.php" method="POST">
				<input type="text" name="id" value="<?php echo $id;?>" style="display:none;"/>
					<div style="margin-left:20px;">
						<h1>Edit Article</h1>
					</div>
					<table>
					<tr>
						<td>Judul Artikel :</td>
						<td><input type ="text" name="judul" value="<?php echo $baris['judul']; ?>"></td>
					</tr>
					<tr>
						<td>Tipe</td>
						<td><input type ="text" name="tipe" value="<?php echo $baris['tipe']; ?>"></td>
					</tr>
					<tr>
						<td>Tanggal</td>
						<td><input type ="text" name="tanggal" value="<?php echo $baris['tanggal']; ?>"></td>
					</tr>
					<tr>
						<td>Isi Artikel</td>
						<td><textarea name="isi" rows="20" cols="94" value=""><?php echo $baris['isi']; ?></textarea>
								</td>
					</tr>
					<tr>
						<td></td>
						<td><input type ="submit" name ="edit" value="Edit"></td>
					</tr>
					<tr>
						<td>
							<a href="viewarticle.php">Back</a>
						</td>
					</tr>
					</table>
				</form>
			</div>
		</div>
		
<?php require_once("footer.php"); ?>