<?php
require 'admin/includes/core.inc.php';
require 'admin/includes/dbconnect.inc.php';
?>
<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->
<?php require 'includes/functions.inc.php'; ?>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Gallery</title>
<meta name="description" content="">
<meta name="author" content="">
<meta name="viewport" content="width=device-width">
<link rel="stylesheet/less" href="less/style.less">
<script src="js/libs/less-1.3.0.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<link rel="stylesheet/css" href="css/jquery.tweet.css">
<script src="js/cufon-yui.js" type="text/javascript"></script>
<script src="js/fonts/Celine_Dion_Handwriting_400.font.js" type="text/javascript"></script>
<script src="js/script.js"></script>
<script src="js/jquery.tweet.js"></script>
<script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.2.min.js"><\/script>')</script>
<script src="js/libs/bootstrap/bootstrap.min.js"></script>
<script src="js/jquery.scrollTo-min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/media.js"></script>
<script>
</script>

<!-- Use SimpLESS (Win/Linux/Mac) or LESS.app (Mac) to compile your .less files
  to style.css, and replace the 2 lines above by this one:

  <link rel="stylesheet" href="less/style.css">
   -->

<script src="js/libs/modernizr-2.5.3-respond-1.1.0.min.js"></script>
</head>
<body>
<!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->

<?php require 'menu.php'; ?>
<div class="container">
  <div class="row">
   <div class="span8">
   <table width="100%">
   <?php
      $query = "SELECT * from images LIMIT 0, 12";
      $result = mysql_query($query);
      $i = 1;
      while($row = mysql_fetch_assoc($result)){
        if(($i-1)%4==0){
          echo '<tr>';
        }
        echo '<td><img src="img/gallery/thumbnails/'.$row['id'].'.jpg" width="190px"></td>'; 
        if($i%4==0){
          echo '</tr>';
        }
        $i = $i + 1;
      }
   ?>
    </table>
   </div>
   <div class="span4">
    <div class="hero-unit content_box" id="content_box1">
   <h3>Vision</h3>
   <p>Usha Menon Management Consultancy envisions a world where social impact organisations have achieved their mission, through those who work and volunteer in them.</p>
    </div>
    <div class="hero-unit content_box" id="content_box2">
   <h3>Mission</h3>
   <p>Usha Menon Management Consultancy will transform the performance and create value for the non-profit organisations. We do this by strengthening their skills, abilities, processes and resources.</p>
    </div>
        <div class="hero-unit content_box" id="content_box3">
        <h3>Collaboration</h3>
   <p>Usha Menon Management Consultancy partners with UK-based <b><a href="http://www.managementcentre.co.uk/mc-international-network" target="_blank" style="color:white;">Management Centre (=mc)</a></b>, the leading training and consulting provider for not-for-profit organisations, with network partners from Brazil, the Middle East and the USA.</p>
    </div>
   </div>
  </div>
  <hr>
  <footer>
    <div class="row" >
        <div class="span4" style="margin-left:60px;">
        <b>Developed and maintained by <a href="http://commutatus.com" target="_blank">Commutatus</a></b>
        </div>
          <div align="right">
        <a class="btn" onClick="window.print()"  id="print-btn"><img src="img/print-icon.png" /></a>
        <a class="btn" href="http://www.linkedin.com/pub/usha-menon/14/4ab/144" target="_blank"><img src="img/linkedin.png"></a>
        <a class="btn" href="https://www.facebook.com/UshaMenonManagementConsultancyAsia" target="_blank"><img src="img/facebook.png"></a>
        <a href="https://twitter.com/ushamenon_asia" class="btn" id="twitter-btn" data-show-count="false" data-size="large" target="_blank"><img src="img/tweet.png" /> Follow @ushamenon_asia</a>
        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
        <span class="st_sharethis_custom btn"><img src="img/share.jpg" /> Share this page</span>
        <script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
        <script type="text/javascript">
          stLight.options({
            publisher:'12345',
          });
        </script>
    </div>
        </div>
      </footer>
</div>
<!-- /container -->


<script>
  var _gaq=[['_setAccount','UA-34493045-1'],['_trackPageview']];
  (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
  g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
  s.parentNode.insertBefore(g,s)}(document,'script'));
</script>
</body>
</html>