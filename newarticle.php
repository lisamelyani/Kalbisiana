<?php include ("body.php");?>
<?php include("header.php");?>

	<div id="foto">
		<table>
			<td><img width=100 height=100 src="1.jpg"/></td>
					</table>
				</div>
	<div id = "geser">
	<table>
			<tbody>
				
				<tr>
					<td>
						<a href=#>Upload Pictures</a>
					</td>
				</tr>
				<tr>	
					<td><a href=#>Edit Profiles</a>
							</td>
					</tr>
				<tr>
					<td>
							<a href=#>Create New Article</a>
						</td>
					</tr>
				<tr>
					<td>
						<a href=#>Create Event</a>
						</td>
					</tr>
				<tr>
					<td>
							<div>
										
										<td valign="top" style="padding-left:10px;">/</td>
										<td valign="top" style="padding-left:10px;">
											<a href=#>View Articles</a>
										</td></div>
									</td> 
								</tr>
						<br/>
						<tr>
							<td>
								<div>
										</div>
									</td>
								</tr>
									</tbody>
							</table>
						</div>
<div>
	<table>
		<tr>
			<td>Theme</td>
			<td><select name = "Theme" id = "Theme">
			<option value = "business">Business</option>
			<option value = "fashion">Fashion</option>
			<option value = "education">Education</option></td>
		</tr>
		<tr>
			<td>Title</td>
			<td><input type = "text" name = "title" value = ""></td>
		</tr>
		<tr>
			<td>Upload Picture</td>
			<td><input type = "Button" name ="cari" value ="Browse"></td>
		</tr>
		<tr>
			<td></td>
		</tr></table></div>
	
<div id = "Kanan">
	<table>
		<tr>
			<td>Content</td>
		</tr>
		<tr>
			<td><textarea name ="isi" rows = "15" cols = "30" ></textarea></td>
		</tr>
		<tr>
			<td><input type ="submit" name ="submit" value = "POST"></td>
			<td><input type ="button" name ="submit" value = "CANCEL"></td>
		</tr>
	</table>
	
