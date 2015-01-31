<?php session_start();?>
<?php include ("koneksi.php")?>
<html>
	<head>
		<title>View Profile</title>
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
								<div style="margin-left:40px;">
								<!-- buat tanggal -->
								26 November 2014
								</div>
							</td>
						</tr>
					</table>
				</div>
				
				<!-- bawah -->
				<div>
				<?php
// 3. Menampilkan data dari Query
	$id = $_GET['id'];
	$sql = "SELECT * FROM user WHERE id = '$id'";
	$hasil = mysqli_query($koneksi, $sql);
	$baris = mysqli_fetch_array($hasil);
	$a = $baris['nama'];
	$b = $baris['gender'];
	$c = $baris['email'];
	$d = $baris['status'];
	$e = $baris['bio'];
?>

					<div id="outer_article">
					<form action="view_user.php" method="POST">
						<div class="tentangUser">
							<table width="100%">
								<tr>
									<td>
										<table>
											<tr>
												<td><b>NIM</b></td>
												<td><span><?php echo "$id"; ?></span></td>
											</tr>
											<tr>
												<td><b>Name</b></td>
												<td><span><?php echo $a;?></span></td>
											</tr>
											<tr>
												<td><b>Gender</b></td>
												<td><span><?php echo $b; ?></span></td>
											</tr>
											<tr>
												<td><b>Email</b></td>
												<td><span><?php echo $c; ?></span></td>
											</tr>
											<tr>
												<td><b>Status</b></td>
												<td><span><?php echo $d; ?></span></td>
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
														<span><?php echo $e; ?></span>
													</td>
												</tr>
											</table>
									</td>
								</tr>
								<tr>
									<td><a href ="user.php">Back</td></a>
								</tr>
							</table>
						</div>
						</form>
					</div>
				</div>
			</div>
			<!-- kanan -->
			<?php include ("outer_kanan_user.php")?>
			
<?php require_once("footer.php"); ?>