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
<title>Contact</title>
<meta name="description" content="">
<meta name="author" content="">
<meta name="viewport" content="width=device-width">
<link rel="stylesheet/less" href="less/style.less">
<script src="js/libs/less-1.3.0.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<?php require 'includes/fontloader.php'; ?>
<script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.2.min.js"><\/script>')</script>
<script src="js/libs/bootstrap/bootstrap.min.js"></script>
<script src="js/plugins.js"></script>
<script>
	 $(document).ready(function() {

	 });
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
   	<div class="hero-unit about_us_box">
<p>
    <h3 class="umheading">Contact Us</h3>
</p>
	
    <div class="row"><div class="span2">
    <h4>Name : </h4><br>
    <h4>Organization Name : </h4><br>
    <h4>Email Address : </h4><br>
    <h4>Message : </h4><br>
    </div>
    <div class="span3">
    <form action="contact.php" method="post">
    <input type="text" name="name" />
    <input type="text" name="org_name" />
    <input type="email" name="email" />
    <textarea rows="3" name="message" /></textarea>
    <input type="submit" value="Submit" class="btn btn-success" />
    </form>
    <?php
		if(isset($_POST['name']))
		{
			$name = $_POST['name'];
			$org_name = $_POST['org_name'];
			$email = $_POST['email'];
			$message = $_POST['message'];
			$to = 'umenon@ushamenonasia.com';
			$subject = "Contact Form - Ushamenonasia.com";
			$message = 'Name : '.$name."\n".'Organization Name : '.$org_name."\n".'Email : '.$email."\n".'Message : '.$message."\n";
			$from = "contactform@ushamenonasia.com";
			$headers = "From:" . $from;
			mail($to,$subject,$message,$headers);
			echo "Your message has been sent successfully";
		}
	?>
    </div>
    </div>
    </div>
   </div>
   <div class="span4">
   	<div class="hero-unit content_box" id="content_box1">
   <p><h4>Usha Menon Management Consultancy (Asia)</h4><br>
   	  UM-MC Asia Pte Ltd<br>
      7500A, Beach Road<br>
      #11-311 The Plaza<br>
      Singapore 199591<br>
      Tel : +65 975 22774<br>
      Fax: +65 67376602<br>
      Email : contact@ushamenonasia.com <br>
   </p>
   	</div>
    <div class="hero-unit content_box" id="content_box3">
<iframe width="325" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=7500A+Beach+Road+Singapore&amp;aq=0&amp;oq=7500A,+Beach+Road,&amp;sll=28.652225,77.097764&amp;sspn=0.994217,1.792145&amp;vpsrc=6&amp;t=m&amp;ie=UTF8&amp;hq=&amp;hnear=7500A+Beach+Rd,+Singapore+199591&amp;ll=1.299782,103.860659&amp;spn=0.008849,0.014001&amp;z=14&amp;output=embed"></iframe>
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