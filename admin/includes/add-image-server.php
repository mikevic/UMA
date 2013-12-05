<?php
require 'core.inc.php';
require 'dbconnect.inc.php';
$allowedExts = array("gif", "jpeg", "jpg", "png");
$temp = explode(".", $_FILES["image"]["name"]);
$extension = end($temp);
if ((($_FILES["image"]["type"] == "image/gif")
|| ($_FILES["image"]["type"] == "image/jpeg")
|| ($_FILES["image"]["type"] == "image/jpg")
|| ($_FILES["image"]["type"] == "image/pjpeg")
|| ($_FILES["image"]["type"] == "image/x-png")
|| ($_FILES["image"]["type"] == "image/png"))
&& in_array($extension, $allowedExts))
  {
  if ($_FILES["image"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["image"]["error"] . "<br>";
    }
  else
    {
      $img = $_FILES['image']['tmp_name'];
      $title = $_POST['title'];
      $desc = $_POST['desc'];
      $img_info = getimagesize($img);
      $width = $img_info[0];
      $height = $img_info[1];


      mysql_query("INSERT INTO images (title, descp) VALUES ('$title', '$desc')");
      $id = mysql_insert_id();
      switch ($img_info[2]) {
        case IMAGETYPE_GIF  : $src = imagecreatefromgif($img);  break;
        case IMAGETYPE_JPEG : $src = imagecreatefromjpeg($img); break;
        case IMAGETYPE_PNG  : $src = imagecreatefrompng($img);  break;
        default : die("Unknown filetype");
      }
      move_uploaded_file($_FILES["image"]["tmp_name"],"../../img/gallery/uploaded-images/" . $id . '.'. $extension);
      header('Location: ../add-new-image.php?message=success');
    }
  }
else
  {
  echo "Invalid file";
  }
?>