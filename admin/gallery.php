<?php
require 'includes/core.inc.php';
require 'includes/dbconnect.inc.php';
if(!loggedin()){
  header('Location: login.php');
}
require 'menu.php';
?>
<div class="container">
	<div class="row">
		<a href="add-new-image.php">Add new image</a>
		<hr>
		<h4>Manage Images</h4>
		<div id="result">
		<?php
			if(isset($_GET['message'])){
				if($_GET['message']=='success'){
					echo '<p>Operational Successful!</p>';
				}
			}
		?>
		</div>
		<table class="table">
			<tr>
				<th>ID</th>
				<th>Title</th>
				<th></th>
				<th></th>
			</tr>
		<?php
			$result = mysql_query("SELECT * FROM images ORDER BY id DESC");
			while($row = mysql_fetch_assoc($result)){
				echo '<tr>';
				echo '<td>'.$row['id'].'</td>';
				echo '<td>'.$row['title'].'</td>';
				echo '<td><a href="../img/gallery/uploaded-images/'.$row['id'].'.jpg" target="_blank">View Image</a>';
				echo '<td><a href="includes/delete-image.php?id='.$row['id'].'">Delete Image</a>';
				echo '</tr>';
			}
		?>
		</table>
	</div>
</div>
