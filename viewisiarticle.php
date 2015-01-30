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
		<link type="text/css" rel="stylesheet" href="Css/style_admin.css" />
		<title>View Article</title>
		<?php
			$id = $_GET['ID'];
			$sql = "SELECT * FROM artikel WHERE id_artikel = '$id'";
			$hasil = mysqli_query($koneksi, $sql);
			$baris = mysqli_fetch_array($hasil);
			$judul = $baris['judul'];
			$isi = $baris['isi'];
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
								<!-- buat tanggal -->
								26 November 2014
							</td>
						</tr>
					</table>
				</div>
				
				<!-- tengah -->
				<form action="viewisiarticle.php" method="POST">
					<div style="margin-left:20px;">
						<h1>Isi Artikel</h1>
					</div>
					<table>
					
					<tr>
						
						<td><input type ="text" name="tipe" value="<?php echo $baris['judul']; ?>"></td>
					</tr>
					<tr>
						
						<td><textarea name="isi" rows="20" cols="94" value=""><?php echo $baris['isi']; ?></textarea>
								</td>
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
		
				
<?php
// 3. Menampilkan data dari Query
while ($baris = mysqli_fetch_assoc($hasil)){
	echo "<tr>";
	echo "<td>" . $baris ['judul']."</td><br>";
	echo "<td>" . $baris ['isi']."</td>";
	echo "</tr>";	
}
?>		
	
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