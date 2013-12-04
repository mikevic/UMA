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
<div id="nav-above" class="navigation">
<p class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">&laquo;</span> %title' ) ?></p>
<p class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">&raquo;</span>' ) ?></p>
</div>
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<h2 class="entry-title"><?php the_title(); ?></h3>
<hr>
<div class="entry-meta">
<span class="meta-prep meta-prep-author"><?php _e('By ', 'blankslate'); ?></span>
<span class="author vcard"><a class="url fn n" target="_blank" href="http://ushamenonasia.com/media/UshaMenonCV.pdf" title="<?php printf( __( 'About Usha Menon', 'blankslate' )); ?>"><?php the_author(); ?></a></span>
<span class="meta-sep"> | </span>
<span class="meta-prep meta-prep-entry-date"><?php _e('Published ', 'blankslate'); ?></span>
<span class="entry-date"><abbr class="published" title="<?php the_time('Y-m-d\TH:i:sO') ?>"><?php the_time( get_option( 'date_format' ) ); ?></abbr></span>
<?php edit_post_link( __( 'Edit', 'blankslate' ), "<span class=\"meta-sep\"> | </span>\n\t\t\t\t\t\t<span class=\"edit-link\">", "</span>\n\t\t\t\t\t" ) ?>
</div>
<div class="entry-content">
<?php 
if ( has_post_thumbnail() ) {
the_post_thumbnail();
} 
?>
<?php the_content(); ?>
<?php wp_link_pages('before=<div class="page-link">' . __( 'Pages:', 'blankslate' ) . '&after=</div>') ?>
</div>
<div class="entry-utility">
<div class="fb-like" data-send="true" data-width="450" data-show-faces="true"></div><a href="https://twitter.com/share" class="twitter-share-button">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
<br />
<?php printf( __( 'This article was posted in %1$s%2$s. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>. Follow comments with the <a href="%5$s" title="Comments RSS to %4$s" rel="alternate" type="application/rss+xml">RSS feed for this post</a>.', 'blankslate' ),
get_the_category_list(', '),
get_the_tag_list( __( ' and tagged ', 'blankslate' ), ', ', '' ),
get_permalink(),
the_title_attribute('echo=0'),
get_post_comments_feed_link() ) ?>
<?php if ( ('open' == $post->comment_status) && ('open' == $post->ping_status) ) : // ?>
<?php printf( __( '<a class="comment-link" href="#respond" title="Post a Comment">Post a Comment</a> or leave a trackback: <a class="trackback-link" href="%s" title="Trackback URL for your post" rel="trackback">Trackback URL</a>.', 'blankslate' ), get_trackback_url() ) ?>
<?php elseif ( !('open' == $post->comment_status) && ('open' == $post->ping_status) ) : // ?>
<?php printf( __( 'Comments are closed, but you can leave a trackback: <a class="trackback-link" href="%s" title="Trackback URL for post" rel="trackback">Trackback URL</a>.', 'blankslate' ), get_trackback_url() ) ?>
<?php elseif ( ('open' == $post->comment_status) && !('open' == $post->ping_status) ) : // ?>
<?php _e( 'Trackbacks are closed, but you can <a class="comment-link" href="#respond" title="Post a Comment">Post a Comment</a>.', 'blankslate' ) ?>
<?php elseif ( !('open' == $post->comment_status) && !('open' == $post->ping_status) ) : // ?>
<?php _e( ' Both comments and trackbacks are closed.', 'blankslate' ) ?>
<?php endif; ?>
<?php edit_post_link( __( 'Edit', 'blankslate' ), "\n\t\t\t\t\t<span class=\"edit-link\">", "</span>" ) ?>
</div>
</div>
<div id="nav-below" class="navigation">
<p class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">&laquo;</span> %title' ) ?></p>
<p class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">&raquo;</span>' ) ?></p>
</div>
<?php comments_template('', true); ?>
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
	var _gaq=[['_setAccount','UA-34493045-1'],['_trackPageview']];
	(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
	g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
	s.parentNode.insertBefore(g,s)}(document,'script'));
</script>
</body>
</html>