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
		<h3>Upload image to gallery</h3>
		<div id="result">
		<?php
			if(isset($_GET['message'])){
				if($_GET['message']=='success'){
					echo '<p>Success!</p>';
				}
			}
		?>
		</div>
		<div id="form-question">
			<form role="form" id="add-image" action="includes/add-image-server.php" method="POST" enctype="multipart/form-data">
			  <div class="form-group">
			    <input type="text" class="form-control" id="title" name="title" placeholder="Enter title of the image">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputFile">Select Image</label>
			    <input type="file" id="image" name="image">
			  </div>
			  <button type="submit" class="btn btn-default">Upload</button>
			</form>
		</div>
	</div>
</div>
<?php
require 'footer.php';
?>