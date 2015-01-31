<?php
include ("koneksi.php");	
// 2. Lakukan Query utk Data yang sudah ada
$sql = "SELECT * FROM artikel"; 
$hasil = mysqli_query($koneksi, $sql);
if(!$hasil)
{
	die("Query database gagal.");
}

?>

<html>
	<head>
		<link type="text/css" rel="stylesheet" href="css/style_admin.css" />
		<title>View Article</title>
		<?php
			$id = $_GET['ID'];
			$idm = $_GET['idm'];
			$sql = "SELECT * FROM artikel WHERE id_artikel = '$id'";
			$hasil = mysqli_query($koneksi, $sql);
			$baris = mysqli_fetch_array($hasil);
			$judul = $baris['judul'];
			$isi = $baris['isi'];
			$tanggal = $baris['tanggal'];
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
				
				<!-- tengah -->
				<form action="viewisiarticle.php" method="POST">
					<div style="margin-left:40px;">
						<h1>Isi Artikel</h1>
					</div>
					<table style="margin-left:40px;">
					
					<tr>
						
						<td><span><b><?php echo $baris['judul']; ?></b></span></td>
					</tr>
					<tr>
						
						<td><span>(<?php echo $baris['tanggal']; ?>)</span>
						</td>
					</tr>
					<tr>
						
						<td><span><?php echo $baris['isi']; ?></span>
								</td>
					</tr>
					<tr>
						<td>
							<a href="viewarticle.php?id=<?php  echo $idm;?>">Back</a>
						</td>
					</tr>
					</table>
				</form>
			</div>
		</div>
		
				
	
	
</tbody>
</body>

<?php
// 4. Free up memori dgn mysqli_free_result
mysqli_free_result($hasil);

// 5. Menutup Database
mysqli_close($koneksi);
?>

</html>

<?php require_once("footer.php"); ?>