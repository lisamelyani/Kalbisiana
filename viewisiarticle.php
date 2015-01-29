<?php session_start(); ?>
<?php include ("koneksi.php"); ?>
	

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
				

<?php
// 3. Menampilkan data dari Query
	$id = $_GET['nim'];
	$sql = "SELECT * FROM artikel WHERE id = '$id'";
	$hasil = mysqli_query($koneksi, $sql);
	$baris = mysqli_fetch_array($hasil);
	$a = $baris['judul'];
	$b = $baris['isi'];
	
?>
				
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
		
<?php
// // 3. Menampilkan data dari Query
// while ($baris = mysqli_fetch_assoc($hasil)){
	// echo "<tr>";
	// echo "<td>" . $baris ['judul']."</td>";
	// echo "<td>" . $baris ['isi']."</td>";
	// echo "</tr>";
	
// }
// ?>
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