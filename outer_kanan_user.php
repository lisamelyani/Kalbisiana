<!-- kanan -->
			<div id="outer_kanan" class="conten_kanan_kiri">
				<div id="form_login">
					<div id="insert_login" border="black">
						<table>
							<tr>
								<td>
									<h2>Hi! <?php echo htmlentities($_SESSION['namaUser']);?></h2>
								</td>
								<td rowspan="2">
									<img src=" <?php echo htmlentities($_SESSION['fotoUser']);?>" height="100px" width="85px">
								</td>
							</tr>
							<tr >
								<td>
									<a href="index.php"><h3>Log Out</h3></a>
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
									<h2>What Do You Do ?</h2>
								</td>
							</tr>
							<tr>
								<td>
									<a href="create_artikel.php"><img src="css/images/u-c.png" width="100px" height="35px"></img></a>
								</td>
								<td>
									<a href="viewarticle.php?id=<?php echo htmlentities($_SESSION['idNIM']) ;?>"><img src="css/images/u-v.png" width="100px" height="35px"></img></a>
								</td>
							</tr>
							<tr>
								<td>
									<a href="edit_user.php?id=<?php echo htmlentities($_SESSION['idNIM']) ;?>"> <img src="css/images/u-e.png" width="100px" height="35px" /></a>
								</td>
								<td>
									<a href="view_user.php?id=<?php echo htmlentities($_SESSION['idNIM']) ;?>"><img src="css/images/u-d.png" width="100px" height="35px"></img></a>
								</td>
							</tr>
						</table>
					</div>
				</div>
				
				</div><!--Tutup kanan-->