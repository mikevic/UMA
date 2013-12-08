<?php
require 'core.inc.php';
require 'dbconnect.inc.php';
$id = $_GET['id'];
mysql_query("DELETE FROM images WHERE id=$id");
header('Location: ../gallery.php?message=success');
?>