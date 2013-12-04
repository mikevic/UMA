<?php
require 'includes/core.inc.php';
if(!loggedin()){
  header('Location: login.php');
}
?>
<?php
require 'menu.php';
require 'footer.php';
?>



