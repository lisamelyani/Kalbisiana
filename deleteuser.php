<?php
	include ("koneksi.php");
?>
<html>
	<head>
		<link type="text/css" rel="stylesheet" href="Css/style_admin.css" />
		<meta charset="utf-8">
  <title>jQuery UI Dialog - Modal confirmation</title>
  
  <script src="jquery/jquery.js"></script>
  
  
  <script>
  $(function() {
    $( "#dialog-confirm" ).dialog({
      resizable: false,
      height:140,
      modal: true,
      buttons: {
        "Delete this user?": function() {
          $( this ).dialog( "close" );
        },
        Cancel: function() {
          $( this ).dialog( "close" );
        }
      }
    });
  });
  </script>
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
				<form action="deleteproses.php" method="POST">
					<div style="margin-left:20px;">
						<h1>Admin - Delete User</h1>
					</div>
					Masukkan User ID : <input type ="text" name="id" value="">
					<input type ="submit" name ="delete" value="Delete User" onclick="">
					<script>
						function myFunction() {
							var x;
							if (confirm("Are you sure you want to delete?") == true) {
								x = "You pressed OK!";
							} else {
								x = "You pressed Cancel!";
							}
							document.getElementById("demo").innerHTML = x;
						}
					</script>
				</form>
			</div>
		</div>
		<?php require_once ("outer_kanan_admin.php");?>
<?php require_once("footer.php"); ?>