<?php require_once("body.php"); ?>
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
					<div class="isi_tengah">
						<!-- isi tengah -->
						Isi Berita BEM 1
					</div>
					<div class="isi_tengah">
						Isi Berita BEM 2
					</div>
					<div class="isi_tengah">
						Isi Berita BEM 3
					</div>
					<div class="isi_tengah">
						Isi Berita BEM 4
					</div>
					<div class="isi_tengah">
						Isi Berita BEM 5
					</div>
				</div>
				
				<!-- bawah -->
				<div>
					<div id="outer_article">
						<div class="main_article">
							<div>
								<img id ="artikel" src="css/images/new_artikel.jpg" >
							</div>
							<!--aartikel kanan bawah-->
							<div id= "artikel1">
								<div>
									<table>
										<tr>
											<td>
												<a href="#">Android Versi Terbaru</a>
											</td>
											<td>
												<img src="css/images/foto1.jpg" width="50px" height="50px"; >
											</td>
										</tr>
										<tr>
											<td>
												<a href="#">Gaya Busana 2015</a>
											</td>
											<td>
												<img src="css/images/foto1.jpg" width="50px" height="50px"; >
											</td>
										</tr>
									</table>
								</div>
							</div>
						</div>
						
						<div class="main_article">
							<img id ="artikel" src="css/images/trending.jpg" >
							<div id= "artikel1">
								<div>
									<table>
										<tr>
											<td>
												<a href="#">Android Versi Terbaru</a>
											</td>
											<td class="foto_bawah">
												<img src="css/images/foto1.jpg" width="50px" height="50px"; >
											</td>
										</tr>
										<tr>
											<td>
												<a href="#">Gaya Busana 2015</a>
											</td>
											<td id="foto_bawah" >
												<img src="css/images/foto1.jpg" width="50px" height="50px"  >
											</td>
										</tr>
									</table>
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
				
				<?php require_once ("outer_kanan.php");?>
				
			</div>
<?php require_once("footer.php"); ?>