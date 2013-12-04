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
<meta name="description" content="">
<meta name="author" content="">
<meta name="viewport" content="width=device-width">
<?php require 'includes/fontloader.php'; ?>
<title><?php wp_title(' | ', true, 'right'); ?><?php bloginfo('name'); ?></title>
<link rel="stylesheet/less" href="less/style.less">
<script src="js/libs/less-1.3.0.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<link rel="stylesheet/css" href="css/jquery.tweet.css">
<script src="js/script.js"></script>
<script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.2.min.js"><\/script>')</script>
<script src="js/libs/bootstrap/bootstrap.min.js"></script>
<script src="js/plugins.js"></script>
<!-- Use SimpLESS (Win/Linux/Mac) or LESS.app (Mac) to compile your .less files
	to style.css, and replace the 2 lines above by this one:

	<link rel="stylesheet" href="less/style.css">
	 -->

<script src="js/libs/modernizr-2.5.3-respond-1.1.0.min.js"></script>
<script>
$(document).ready(function() {
	 fix_flash();
	 	 });
</script>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1&appId=341875552570182";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
</head>
<body>
<!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->

<?php require 'menu.php'; ?>
<div class="container">
  <div class="row">
   <div class="span8">
<div class="hero-unit about_us_box">
   <article id="content">
<?php the_post(); ?>
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<h3 class="umheading"><?php the_title(); ?></h3>
<div class="entry-content">
<?php the_content(); ?>
<?php wp_link_pages('before=<div class="page-link">' . __( 'Pages:', 'blankslate' ) . '&after=</div>') ?>
<?php edit_post_link( __( 'Edit', 'blankslate' ), '<span class="edit-link">', '</span>' ) ?>
</div>
</div>
<?php comments_template( '', true ); ?>
</article>
</div>
</div>




   <div class="span4">

 <?php get_sidebar(); ?>
   </div>
  </div>
  <hr>
  <footer>
    <div class="row" align="right"> <a class="btn" onClick="window.print()"  id="print-btn"><img src="img/print-icon.png" /></a> <a class="btn" href="http://www.linkedin.com/pub/usha-menon/14/4ab/144" target="_blank"><img src="img/linkedin.png"></a> <a class="btn" href="http://www.facebook.com/usha.menon1" target="_blank"><img src="img/facebook.png"></a> <a href="https://twitter.com/ushamenon_asia" class="btn" id="twitter-btn" data-show-count="false" data-size="large"><img src="img/tweet.png" /> Follow @ushamenon_asia</a> 
      <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script> 
      <span class="st_sharethis_custom btn"><img src="img/share.jpg" /> Share this page</span> 
      <script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script> 
      <script type="text/javascript">
					stLight.options({
						publisher:'12345',
					});
				</script> 
    </div>
  </footer>
</div>
<!-- /container -->


<script>
	var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
	(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
	g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
	s.parentNode.insertBefore(g,s)}(document,'script'));
</script>
</body>
</html>