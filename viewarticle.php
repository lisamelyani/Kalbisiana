<?php
include ("koneksi.php");	
	
// 2. Lakukan Query utk Data yang sudah ada
$id = $_GET['id'];
$sql = "SELECT * FROM artikel WHERE nim='$id'"; 
$hasil = mysqli_query($koneksi, $sql);
if(!$hasil)
{
	die("Query database gagal.");
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>View Article</title>
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
								<div style="margin-left:40px;">
								26 November 2014
								</div>
							</td>
						</tr>
					</table>
				</div>
				
				<div style="margin-left:20px;">
					<h1>Your Articles</h1>
<?php
// 3. Menampilkan data dari Query
if(mysqli_num_rows($hasil)>0){
	?>
		<table border = "1" >
			<thead>
				<tr>
					<th>Judul</th>
					<th>Tipe</th>
					<th>Tanggal</th>
					<th> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Action &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </th>
				</tr>
			</thead>
			<tbody>
	<?php
		while ($baris = mysqli_fetch_assoc($hasil)){
		?>
		<tr>
			<td><?php echo $baris ['judul']?></td>
			<td><?php echo $baris['tipe']?></td>
			<td><?php echo $baris ['tanggal']?></td>
			<td>
				<a href="viewisiarticle.php?ID=<?php echo $baris['id_artikel'];?>&idm=<?php echo $id;?>">View &nbsp  </a>
				<a href="editarticle.php?ID=<?php echo $baris['id_artikel'];?>"> Edit </a><br>
			</td>
		</tr>
		<?php
			}
}
else{
	echo " <br />You Haven't Article<br />";
}
?>
<tr>
	<a href = "user.php"> Back </a>
</tr>
</tbody>
</table>

</div>
</body>




<?php
// 4. Free up memori dgn mysqli_free_result
mysqli_free_result($hasil);

// 5. Menutup Database
mysqli_close($koneksi);
?>

</html>
		



		