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
<title>Usha's Book Shelf</title>
<meta name="description" content="">
<meta name="author" content="">
<meta name="viewport" content="width=device-width">
<link rel="stylesheet/less" href="less/style.less">
<script src="js/libs/less-1.3.0.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<link rel="stylesheet/css" href="css/jquery.tweet.css">
<?php require 'includes/fontloader.php'; ?>
<script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.2.min.js"><\/script>')</script>
<script src="js/libs/bootstrap/bootstrap.min.js"></script>
<script src="js/plugins.js"></script>
<script>
	 $(document).ready(function() {
	 });
	 $(".collapse").collapse()
	</script>
<style type="text/css">
#ticker ul.tweet_list {
	height: 5em;
	overflow-y: hidden;
}
#ticker .tweet_list li {
	height: 5em;
}
.modal {
	width : 600px;
}
</style>

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
    <h3 class="umheading">Usha's Book Shelf</h3>
</p>
<div class="row">
<div class="accordion span3.5" id="accordionTest">
                    <div class="accordion-group">
                        <div class="accordion-heading nav-header">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionTest" href="#collapseOne">Doing Good Well</a>
                        </div>
                        <div id="collapseOne" class="accordion-body collapse">
                            <div class="accordion-inner">
                                <a href="http://www.doinggoodwell.net/thebook/author-publisher.html" target="_blank"><img src="img/resources/doinggoodwell.gif" /></a>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionTest" href="#collapseTwo">The World That Changes The World</a>
                        </div>
                        <div id="collapseTwo" class="accordion-body collapse">
                            <div class="accordion-inner">
                                <a href="http://www.worldthatchangestheworld.com/endorsement_usha_menon.asp" target="_blank"><img src="img/resources/worldchanges.gif" /></a>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionTest" href="#collapseThree">Poor Economics</a>
                        </div>
                        <div id="collapseThree" class="accordion-body collapse">
                            <div class="accordion-inner">
                                <a href="http://www.amazon.com/Poor-Economics-Radical-Rethinking-Poverty/dp/1586487981" target="_blank"><img src="img/resources/pooreconomics.jpg" /></a>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionTest" href="#collapseFour">Development as Freedom</a>
                        </div>
                        <div id="collapseFour" class="accordion-body collapse">
                            <div class="accordion-inner">
                                <a href="http://www.amazon.com/Development-as-Freedom-Amartya-Sen/dp/0385720270/ref=pd_sim_b_3" target="_blank"><img src="img/resources/developmentasfreedom.jpg" /></a>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionTest" href="#collapseFive">Fighting Poverty Through Enterprise</a>
                        </div>
                        <div id="collapseFive" class="accordion-body collapse">
                            <div class="accordion-inner">
                                <a href="http://www.tbnetwork.org/resources/books-articles/fighting-poverty-through-enterprise-book/" target="_blank"><img src="img/resources/fightingpoverty.jpg" /></a>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionTest" href="#collapseSix">Personality Not Included</a>
                        </div>
                        <div id="collapseSix" class="accordion-body collapse">
                            <div class="accordion-inner">
                                <a href="http://www.personalitynotincluded.com/" target="_blank"><img src="img/resources/personality.jpg" /></a>
                            </div>
                        </div>
                    </div>

                        <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionTest" href="#collapseFifteen">Who Cares Wins</a>
                        </div>
                        <div id="collapseFifteen" class="accordion-body collapse">
                            <div class="accordion-inner">
                                <a href="http://www.amazon.com/Who-Cares-Wins-business-Financial/dp/0273762532/ref=sr_1_1?s=books&ie=UTF8&qid=1356996096&sr=1-1&keywords=who+cares+wins" target="_blank"><img src="img/resources/who.jpg" /></a>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionTest" href="#collapseSixteen">Global Fundraising</a>
                        </div>
                        <div id="collapseSixteen" class="accordion-body collapse">
                            <div class="accordion-inner">
                                <a href="http://www.amazon.com/Global-Fundraising-Changing-Philanthropy-Development/dp/1118370708" target="_blank"><img src="img/resources/globalfundraising.jpg" /></a>
                            </div>
                        </div>
                    </div>

</div>
<div class="accordion span3.5" id="accordionTest2" >
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionTest2" href="#collapseSeven">The Influential Fundraiser</a>
                        </div>
                        <div id="collapseSeven" class="accordion-body collapse">
                           <div class="accordion-inner">
                                <a href="http://influentialfundraiser.com/" target="_blank"><img src="img/resources/influentialfundraiser.jpg" /></a>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionTest2" href="#collapseEight">Relationship Fundraising</a>
                        </div>
                        <div id="collapseEight" class="accordion-body collapse">
                            <div class="accordion-inner">
                                <a href="http://www.kenburnett.com/" target="_blank"><img src="img/resources/relationshipfundraising.jpg" /></a>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionTest2" href="#collapseNine">Flip the Funnel</a>
                        </div>
                        <div id="collapseNine" class="accordion-body collapse">
                            <div class="accordion-inner">
                                <a href="http://www.flipthefunnelnow.com/" target="_blank"><img src="img/resources/flipfunnel.jpg" /></a>
                            </div>
                        </div>
                    </div>
                      <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionTest2" href="#collapseTen">Made to Stick</a>
                        </div>
                        <div id="collapseTen" class="accordion-body collapse">
                            <div class="accordion-inner">
                                <a href="http://www.heathbrothers.com/madetostick/" target="_blank"><img src="img/resources/image-book-made-to-stick-3d.jpg" /></a>
                            </div>
                        </div>
                    </div>
                      <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionTest2" href="#collapseEleven">The Tipping Point</a>
                        </div>
                        <div id="collapseEleven" class="accordion-body collapse">
                            <div class="accordion-inner">
                                <a href="http://www.gladwell.com/tippingpoint/" target="_blank"><img src="img/resources/tippingpoint.jpg" /></a>
                            </div>
                        </div>
                    </div>
                      
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionTest2" href="#collapseTwelve">Great by Choice</a>
                        </div>
                        <div id="collapseTwelve" class="accordion-body collapse">
                            <div class="accordion-inner">
                                <a href="" target="_blank"><img src="img/resources/9780062120991.jpg" /></a>
                            </div>
                        </div>
                    </div>
                    
                      <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionTest2" href="#collapseThirteen">Technology at the Margins</a>
                        </div>
                        <div id="collapseThirteen" class="accordion-body collapse">
                            <div class="accordion-inner">
                                <a href="http://as.wiley.com/WileyCDA/WileyTitle/productCd-0470639970.html" target="_blank"><img src="img/resources/technology.jpg" /></a>
                            </div>
                        </div>
                    </div>

                     <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionTest2" href="#collapseFourteen">Need, Speed and Greed</a>
                        </div>
                        <div id="collapseFourteen" class="accordion-body collapse">
                            <div class="accordion-inner">
                                <a href="http://www.amazon.com/Need-Speed-Greed-Innovation-Businesses/dp/0062075993/ref=sr_1_1?s=books&ie=UTF8&qid=1356995992&sr=1-1&keywords=need+greed+speed" target="_blank"><img src="img/resources/need.jpg" /></a>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionTest2" href="#collapseSeventeen">Man's Search for Meaning</a>
                        </div>
                        <div id="collapseSeventeen" class="accordion-body collapse">
                            <div class="accordion-inner">
                                <a href="http://www.amazon.com/Mans-Search-Meaning-Viktor-Frankl/dp/0807014273/ref=sr_1_1?s=books&ie=UTF8&qid=1364538189&sr=1-1&keywords=mans+search+for+meaning" target="_blank"><img src="img/resources/mansearch.jpg" /></a>
                            </div>
                        </div>
                    </div>


                      
                    
                </div>
    </div>
</div>
   </div>
   <div class="span4">
   	<div class="hero-unit content_box" id="content_box1">
   <p>Nonprofit management today is about being a facilitator, enabling the community , volunteers and staff to impact lives and create a world that we envision.</p>
   	</div>
    <div class="hero-unit content_box" id="content_box2">
   <h3>Mission</h3>
   <p>Usha Menon Management Consultancy will transform the performance and create value for the non-profit organisations. We do this by strengthening their skills, abilities, processes and resources.</p>
   	</div>
    <div class="hero-unit content_box" id="content_box3">
        <p style="line-height:1.65;">Usha Menon and  fundraising experts around the globe have contributed to: <b><a href="http://www.amazon.com/Global-Fundraising-Changing-Philanthropy-Development/dp/1118370708" target="_blank" style="color:white">Global Fundraising: How the World is Changing the Rules of Philanthropy</a> </b>   (The AFP/Wiley Fund Development Series)”  It has a substantial coverage of philanthropy developments in Asia and provides detailed insights from China, India, Japan, Korea and Singapore.</p>
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