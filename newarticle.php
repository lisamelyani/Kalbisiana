<?php include ("body.php");?>
<?php include("header.php");?>
	<div>
		<table>
			<tbody>
				<tr>
					<td><img width=100 height=100 src="1.jpg"/></td>
					<td valign="top" style="padding-left:10px;">
						<a href=#>Upload Pictures</a>
					</td>
					<td valign="top" style="padding-left:10px;">/</td>
					<td valign="top" style="padding-left:10px;">
						<a href=#>Delete Current Pictures</a>
					</td>
				<tr>
					<td valign="top" style="padding-left:10px;">
						<div>
							<td><a href=#>Edit Profiles</a>
							</td></div>
						</td>
				</tr>
				<tr>
					<td>
							<div>
										<td valign="top" style="padding-left:10px;">
											<a href=#>Create New Article</a>
										</td>
										<td valign="top" style="padding-left:10px;">/</td>
										<td valign="top" style="padding-left:10px;">
											<a href=#>View Articles</a>
										</td></div>
									</td>
								</tr>
						<tr>
							<td>
								<div>
										<td valign="top" style="padding-left:10px;">
											<a href=#>Create Event</a>
										</td></div>
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