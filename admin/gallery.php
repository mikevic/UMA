<?php
require 'includes/core.inc.php';
require 'includes/dbconnect.inc.php';
if(!loggedin()){
  header('Location: login.php');
}
require 'menu.php';
?>
