<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<?php require 'includes/functions.inc.php'; ?>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title>Usha Menon</title>
	<meta name="description" content="">
	<meta name="author" content="">

	<meta name="viewport" content="width=device-width">

	<link rel="stylesheet/less" href="less/style.less">
	<script src="js/libs/less-1.3.0.min.js"></script>
    <?php require 'includes/fontloader.php'; ?>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<link rel="stylesheet/css" href="css/jquery.tweet.css">


</script>
	<link rel="stylesheet" href="css/jquery.simplyscroll.css" media="all" type="text/css">

	<script>
	jQuery(function($){
        $(".tweet").tweet({
          username: "UshaMenon_Asia",
          page: 1,
          avatar_size: 32,
          count: 20,
          loading_text: "loading ..."
        }).bind("loaded", function() {
          var ul = $(this).find(".tweet_list");
          var ticker = function() {
            setTimeout(function() {
              ul.find('li:first').animate( {marginTop: '-4em'}, 500, function() {
                $(this).detach().appendTo(ul).removeAttr('style');
              });
              ticker();
            }, 5000);
          };
          ticker();
        });
      });
	
	  
	 $(document).ready(function() {
            fix_flash(); 
	 $("#scroller").simplyScroll();
	 $(".clients").popover({
		placement:'top'
		});

		$('.carousel').carousel({
		interval: 5000,
		cycle : true
	});
	function tick(){
	$('#ticker li:first').slideUp( function () { $(this).appendTo($('#ticker')).slideDown(); });
}
setInterval(function(){ tick () }, 5000);
	
	
	 });
	

	</script>
	 <style type="text/css">
      #tweet_ticker ul.tweet_list {
        height:5em;
        overflow-y:hidden;
      }
      #tweet_ticker .tweet_list li {
        height: 5em;
      }
	  .modal {
		width : 600px;
	  }
	  #ticker {
		height: 214px;
		overflow: hidden;
		}
	  #ticker li {
		height: 107px;
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
		<div class="span3" >
			<img src="img/ushamenonfull.png" height="110px" class="visible-desktop"/>
		</div>
        <div class="span9" >
			 <div class="hero-unit" id="quote" align="center">
				<h2 id="quote">Shaping the world through social impact organisations in Asia</h2>
			</div>
		</div>
		</div>
	  <div class="row">
		<div class="span8">
			<div id="myCarousel" class="carousel slide">
			  <!-- Carousel items -->
			  <div class="carousel-inner">
				<div class="active item">
					<img src="http://s3-ap-southeast-1.amazonaws.com/cdn-commutatus-singapore/uma/slider1.jpg" alt="Design and Develop Leadership Curriculum Usha Menon">
				</div>
				<div class="item">
					<img src="http://s3-ap-southeast-1.amazonaws.com/cdn-commutatus-singapore/uma/slider2.jpg"  alt="Social Media for Non-Profits Usha Menon">
				</div>
				<div class="item">
					<img src="http://s3-ap-southeast-1.amazonaws.com/cdn-commutatus-singapore/uma/slider3.jpg" alt="Marketings Insights for Fundraising in India Usha Menon">
				</div>
				<div class="item">
					<img src="http://s3-ap-southeast-1.amazonaws.com/cdn-commutatus-singapore/uma/slider4.jpg" alt="Management Training Usha Menon">	
				</div>
				<div class="item">
					<img src="http://s3-ap-southeast-1.amazonaws.com/cdn-commutatus-singapore/uma/slider5.jpg" alt="Leadership Development Usha Menon">
				</div>
				<div class="item">
					<img src="http://s3-ap-southeast-1.amazonaws.com/cdn-commutatus-singapore/uma/slider6.jpg" alt="Facilitate Stratergy Development and Implementation Usha Menon">
				</div>
				<div class="item">
					<img src="http://s3-ap-southeast-1.amazonaws.com/cdn-commutatus-singapore/uma/slider7.jpg" alt="Team Effectiveness Training Usha Menon">
				</div>
			  </div>
			  <!-- Carousel nav -->
			  <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
			  <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
			</div>
		</div>
        <script>

		</script>
		<div class="span4">
			<div id="social-media" align="right"><strong>Connect with us : </strong>
			<a href="https://www.facebook.com/UshaMenonManagementConsultancyAsia" target="_blank"><img src="img/social-facebook-box-blue-icon.png"></a>
			<a href="http://www.linkedin.com/pub/usha-menon/14/4ab/144" target="_blank"><img src="img/social-linkedin-box-white-icon.png"></a>
			<a href="https://twitter.com/UshaMenon_Asia" target="_blank"><img src="img/social-twitter-box-white-icon.png"></a>
			</div>
		  <div class="hero-unit">
			
			<p>Usha Menon Management Consultancy works with nonprofit and social purpose organisations in Asia to strengthen skills, abilities, processes and resources. We provide client-focused consultancy and training in Management, Leadership Development, and Fundraising & Philanthropy. We are a global consultancy with a focus on <b>for-impact</b> organisations in Asia.</p>
			<span style="color:#970000"><p><br>
</p></span>
		  </div>
		</div>
	  </div>

     <div class="row">


	    <div class="span12 content_box_span" id="content_box2_span">
			<div class="hero-unit content_box" id="content_box2">
				<h2>Latest Updates</h2>
				<ul STYLE="list-style-image: url(img/bullet.png)">
					<li><p style="line-height:1.65;">New blog post : <a href="http://ushamenonasia.com/blog/?p=276">The 3 Ps of Philanthropy: Philosophy, Process & People</a> <a href="http://www.fundchat.org/category/articles/international/">#fundchat</a></p></li>
					<li><p style="line-height:1.65;">Interview by the Resource Alliance on Usha Menon’s masterclass on Developing a Fundraising Strategy at the International Resource Mobilisation Workshop Asia 2013.  Read Usha’s insights on strategy development <a href="http://ushamenonasia.com/blog/?p=221">here</a></p></li>
			</div>
       </div>

        <div class="span6 content_box_span" id="content_box1_span">
			 <div class="hero-unit content_box" id="content_box1">
				<h2>Video Gallery</h2>
					<a data-toggle="modal" href="#videoWall1" ><img src="img/video-wall/videoWall1.png" id="video-thumb1" width="105px" height="55px" style="padding-bottom:5px"></a>
                    <a data-toggle="modal" href="#videoWall2" ><img src="img/video-wall/videoWall2.png" id="video-thumb2" width="105px" height="55px" style="padding-bottom:5px"></a>
                    <a data-toggle="modal" href="#videoWall3" ><img src="img/video-wall/videoWall3.png" id="video-thumb3" width="105px" height="55px" style="padding-bottom:5px"></a>
                    <a data-toggle="modal" href="#videoWall4" ><img src="img/video-wall/videoWall4.png" id="video-thumb4" width="105px" height="55px" style="padding-bottom:5px"></a>
                    <a data-toggle="modal" href="#videoWall5" ><img src="img/video-wall/videoWall5.png" id="video-thumb5" width="90px" height="55px" style="padding-bottom:5px"></a>
						<p><a class="btn btn-large btn-success" href="videowall.php">View Video Gallery &raquo;</a></p>
			</div>
		</div>

        <div class="span6 content_box_span" id="content_box3_span">
          <div class="hero-unit content_box" id="content_box3">
				<h2>Our Services</h2>
					<p style="line-height:1.65;" >We work with nonprofit and social purpose organisations in Asia to strengthen their skills, abilities, processes and resources. Our main services are : <br/>
<h4><a href="leadership.php" style="color:white;text-decoration:underline;" ><u>Leadership Development</u></a></h4>
<h4><a href="management.php" style="color:white;text-decoration:underline;" >Management Consultancy</a></h4>
<h4><a href="fundraising.php" style="color:white;text-decoration:underline;" >Fundraising & Philanthropic Advisory</a></h4>

                    </p>
			</div>
        </div>

	</div>
	<div class="row">
			<div class="span12">
				<hr>
			</div>
	</div>
	  <div class="row">
		<div class="span6">
			<div class="hero-unit" id="testimonial">

<ul id="ticker">
	<li>
		<h4><b>&quot;</b>Have worked with Usha on SHARE, our monthly workplace giving programme. Usha is able to conceptualise and generate ideas for fundraising. A reliable person who delivers.<b>&quot;</b><br />
        <div align="right"><b>-Tan Bee Heong, General Manager, Community Chest (Singapore)</b></div></h4>
	</li>
	<li>
		<h4><b>&quot;</b>I would highly recommend Usha's thought provoking training to both emerging and experienced cultural organisations.<b>&quot;</b><br />
        <div align="right"><b>-Tay Tong, Managing Director, Theatre Works (Singapore)</b></div></h4>
	</li>
	<li>
		<h4><b>&quot;</b>Usha has a structured, practical approach to fundraising and is full of ideas.<b>&quot;</b><br />
        <div align="right"><b>-Wong Peck Lin, The Law Society</b></div></h4>
	</li>
	<li>
		<h4><b>&quot;</b>Since Usha’s training, we have had several successes in engaging corporates to raise funds for our projects. <b>&quot;</b><br />
        <div align="right"><b>-Gunawathy Fernandez, <br> CBM</b></div></h4>
	</li>
    <li>
		<h4><b>&quot;</b>It was an enriching experience to work with Usha Menon. She was able to inspire our partner organisations with her trade mark enthusiasm and knowledge in fundraising<b>&quot;</b><br />
        <div align="right"><b>-Ms Agnes Kwek, <br> Central Singapore Community Development Council</b></div></h4>
	</li>
    <li>
		<h4><b>&quot;</b>Usha, you will be glad to know that following the workshop you had for our staff from the various hospitals and projects, they have done some really innovative things to raise funds locally.<b>&quot;</b><br />
        <div align="right"><b>-Dr. Sunil Anand, <br> The Leprosy Mission Trust India</b></div></h4>
	</li>
	<li>
		<h4><b>&quot;</b>Usha is an active listener, very observant, sensitive to group dynamics and genuinely interested in a co-created outcome.<b>&quot;</b><br />
        <div align="right"><b>-Mimmo Di Giacomo, <br>International HIV/AIDS Alliance</b></div></h4>
	</li>
	<li>
		<h4><b>&quot;</b>Thank you for your work and excellent facilitation with the parent/patient associations of TIF. Seeing you in action was inspirational. Simply superb and thank you once again.<b>&quot;</b><br />
        <div align="right"><b>- Dr Androulla Eleftheriou, Executive Director, <br><a href="http://www.thalassaemia.org.cy/" target="_blank">Thalassaemia International Federation (TIF)</a></b></div></h4>
	</li>
</ul>

		</div>
        </div>
		<div class="span6">
			<a class="twitter-timeline" href="https://twitter.com/UshaMenon_Asia" data-widget-id="359431027334197249">Tweets by @UshaMenon_Asia</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

		</div>
		</div>
		<div class="row">
			<div class="span12" style="margin-left:60px;">
				<hr >
			</div>
		</div>
		<div class="row">
			<div class="span12" style="margin-left:60px;">
				<h3 class="umheading">Trusted advisor to world-shaping organisations</h3><br />
			</div>
		</div>
		<div class="row">
			<div class="span12">
				
				<ul id="scroller">
					<li><a class="clients" href="#" rel="popover" data-content="Fundraising mapping of Asian Red Cross/Red Crescent organisations" data-original-title="ICRC"><img src="http://cdn.commutatus.com/usha/images/clients/1.png" width="92px" height="100px"/></a></li>
					<li><a class="clients" href="#" rel="popover" data-content="Domain study and recommendation on fundraising in one of the key Asian countries" data-original-title="Amnesty International"><img src="http://cdn.commutatus.com/usha/images/clients/2.png" width="67px" height="100px"/></a></li>
					<li><a class="clients" href="#" rel="popover" data-content="<ul><li>CBM is an international development organisation, committed to improving the quality of life of people with disabilities</li><li>Fundraising training and strategy development for cbm's partner organisations in South India</li><li>The collaboration is into its second year - helping local NGOs to become financially sustainable</li></UL>" data-original-title="CBM -South Asia Regional Office"><img src="http://cdn.commutatus.com/usha/images/clients/3.png" width="134px" height="100px"/></a></li>
					<li><a class="clients" href="#" rel="popover" data-content="International Board  session to facilitate discussion on a sensitive strategic issue, amongst multiple stakeholders from all around the world" data-original-title="Multiple Sclerosis International Federation"><img src="http://cdn.commutatus.com/usha/images/clients/4.png" width="423px" height="100px"/></a></li>
					<li><a class="clients" href="#" rel="popover" data-content="Curriculum design, development and delivery of the Essentials of Association Management focused on leaders of the non-for-profit Trade Assocations and Chambers (TACs)" data-original-title="Singapore Business Federation"><img src="http://cdn.commutatus.com/usha/images/clients/5.png" width="228px" height="100px"/></a></li>
					<li><a class="clients" href="#" rel="popover" data-content="Market entry strategy and advisory network development for work through a base in Asia" data-original-title="People in Aid"><img src="http://cdn.commutatus.com/usha/images/clients/6.png" width="443px" height="100px"/></a></li>
					<li><a class="clients" href="#" rel="popover" data-content="Fundraising strategy development" data-original-title="WINGS"><img src="http://cdn.commutatus.com/usha/images/clients/7.png" width="236px" height="100px"/></a></li>
					<li><a class="clients" href="#" rel="popover" data-content="Community outreach and program consultancy" data-original-title="SEAssociation"><img src="http://cdn.commutatus.com/usha/images/clients/8.png" width="150px" height="100px"/></a></li>
					<li><a class="clients" href="#" rel="popover" data-content="Market entry strategy development for work through a base in Asia" data-original-title="ChildFund Australia"><img src="http://cdn.commutatus.com/usha/images/clients/9.png" width="322px" height="100px"/></a></li>
					<li><a class="clients" href="#" rel="popover" data-content="NCSS scholars mentoring program" data-original-title="NCSS"><img src="http://cdn.commutatus.com/usha/images/clients/10.png" width="150px" height="100px"/></a></li>
					<li><a class="clients" href="#" rel="popover" data-content="Consultancy for strategically  increasing the regular giving donor base" data-original-title="Community Chest"><img src="http://cdn.commutatus.com/usha/images/clients/11.png" width="100px" height="100px"/></a></li>
					<li><a class="clients" href="#" rel="popover" data-content="Trainer on extensive Fundraising and Board topics" data-original-title="SSTI"><img src="http://cdn.commutatus.com/usha/images/clients/12.png" width="150px" height="100px"/></a></li>
					<li><a class="clients" href="#" rel="popover" data-content="<ul><li>Domain study and recommendation on the use of Social Media by Nonprofits in Singapore</li><li>Author of resource site to help people sector organisations in their social media adoption</li></UL>" data-original-title="IDA"><img src="http://cdn.commutatus.com/usha/images/clients/14.png" width="144px" height="100px"/></a></li>
					<li><a class="clients" href="#" rel="popover" data-content="<ul><li>Advisor for development of Giving portal </li><li>Guide for Donor Relationship</li></UL>" data-original-title="NVPC"><img src="http://cdn.commutatus.com/usha/images/clients/15.png" width="108px" height="100px"/></a></li>
					<li><a class="clients" href="#" rel="popover" data-content="Professional Course for Nonprofit leaders" data-original-title="Lien Centre for Social Innovation "><img src="http://cdn.commutatus.com/usha/images/clients/16.png" width="379px" height="100px"/></a></li>
					<li><a class="clients" href="#" rel="popover" data-content="Training on philanthropy for private bankers " data-original-title="Credit Suisse"><img src="http://cdn.commutatus.com/usha/images/clients/17.png" width="318px" height="100px"/></a></li>
					<li><a class="clients" href="#" rel="popover" data-content="Corporate fundraising strategy development and staff training to help implementation" data-original-title="Central Singapore"><img src="http://cdn.commutatus.com/usha/images/clients/18.png" width="173px" height="100px"/></a></li>
					<li><a class="clients" href="#" rel="popover" data-content="Fundraising market scan and case for support recommendations" data-original-title="IDRC"><img src="http://cdn.commutatus.com/usha/images/clients/19.png" width="493px" height="100px"/></a></li>
					<li><a class="clients" href="#" rel="popover" data-content="Training on Associations Management" data-original-title="Chinese Chamber"><img src="http://cdn.commutatus.com/usha/images/clients/20.png" width="150px" height="100px"/></a></li>
					<li><a class="clients" href="#" rel="popover" data-content="Conceptualised their flagship Youth for Causes program" data-original-title="YMCA"><img src="http://cdn.commutatus.com/usha/images/clients/21.png" width="328px" height="100px"/></a></li>
					<li><a class="clients" href="#" rel="popover" data-content=" Faculty for 21st Century Nonprofit Leaders Program covering topics on Human Capital Development , Strategic Planning & Impact Evaluation" data-original-title="Lee Kwan Yew School"><img src="http://cdn.commutatus.com/usha/images/clients/22.png" width="486px" height="100px"/></a></li>
					<li><a class="clients" href="#" rel="popover" data-content="<ul><li>Organisational audit to understand the successes , opportunities, processes and gaps in its local fundraising</li><li>Develop recommentation for its fundraising goals, strategies and tactics</li><li>Design fundraising programs to meet its goals</li><li>Mentor the staff to successfully implement the strategies</li></UL>" data-original-title="The Leprosy Mission"><img src="http://cdn.commutatus.com/usha/images/clients/23.png" width="147px" height="100px"/></a></li>
					<li><a class="clients" href="#" rel="popover" data-content="Diaspora fundraising in Asia" data-original-title="WWF"><img src="http://cdn.commutatus.com/usha/images/clients/24.png" width="101px" height="100px"/></a></li>
					<li><a class="clients" href="#" rel="popover" data-content="Leadership curriculum design and delivery for Mosque leaders" data-original-title="Majlis Agama Islam Singapore "><img src="http://cdn.commutatus.com/usha/images/clients/25.png" width="191px" height="100px"/></a></li>
					<li><a class="clients" href="#" rel="popover" data-content="Asia Pacific Board training on resource mobilisation" data-original-title="Duke of Edinburg"><img src="http://cdn.commutatus.com/usha/images/clients/26.png" width="80px" height="100px"/></a></li>
                    <li><a class="clients" href="#" rel="popover" data-content="Philanthropy advisor for the Generation Next program" data-original-title="Citibank"><img src="http://cdn.commutatus.com/usha/images/clients/27.png" width="288px" height="100px"/></a></li>
                    <li><a class="clients" href="http://www.thalassaemia.org.cy/" target="_blank"><img src="https://s3-ap-southeast-1.amazonaws.com/cdn-commutatus-singapore/uma/img-slider/28.png" width="560px" height="100px"/></a></li>
                    <li><a class="clients" href="http://www.nac.gov.sg/" target="_blank"><img src="https://s3-ap-southeast-1.amazonaws.com/cdn-commutatus-singapore/uma/img-slider/29.png" width="226px" height="100px"/></a></li>
                    <li><a class="clients" href="http://www.aidsalliance.org/" target="_blank"><img src="https://s3-ap-southeast-1.amazonaws.com/cdn-commutatus-singapore/uma/img-slider/30.png" width="226px" height="100px"/></a></li>
				
				</ul> 
		</div>
		</div>
		<div class="row">
			<div class="span12" style="margin-left:60px;">
				<hr>
			</div>
	</div>
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

    </div> <!-- /container -->
	
	<div class="modal hide" id="myModal">
  <div class="modal-header">
    <h3>Usha Menon</h3>
  </div>
  <div class="modal-body">
    <p><object width="560" height="315"><param name="movie" value="http://www.youtube.com/v/HFh3v4xBPBE?version=3&amp;hl=en_US&amp;rel=0"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="http://www.youtube.com/v/HFh3v4xBPBE?version=3&amp;hl=en_US&amp;rel=0" type="application/x-shockwave-flash" width="560" height="315" allowscriptaccess="always" allowfullscreen="true"></embed></object></p>
  </div>
  <div class="modal-footer">
    <a href="#" class="btn" data-dismiss="modal">Close</a>
  </div>
</div>

<div class="modal hide" id="videoWall1">
	<div class="modal-header">
    	<h3>Principles of Fundraising</h3>
    </div>
    <div class="modal-body">
    <p><object width="560" height="315"><param name="movie" value="http://www.youtube.com/v/xXIlZObhnDs?version=3&amp;hl=en_US&amp;rel=0"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="http://www.youtube.com/v/xXIlZObhnDs?version=3&amp;hl=en_US&amp;rel=0" type="application/x-shockwave-flash" width="560" height="315" allowscriptaccess="always" allowfullscreen="true"></embed></object></p>
    </div>
    <div class="modal-footer">
    	<a href="#" class="btn" data-dismiss="modal">Close</a>
    </div>
</div>


<div class="modal hide" id="videoWall2">
	<div class="modal-header">
    	<h3>Human Capital Development</h3>
    </div>
    <div class="modal-body">
    <p><object width="560" height="315"><param name="movie" value="http://www.youtube.com/v/JeGXXuGJnX8?version=3&amp;hl=en_US&amp;rel=0"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="http://www.youtube.com/v/JeGXXuGJnX8?version=3&amp;hl=en_US&amp;rel=0" type="application/x-shockwave-flash" width="560" height="315" allowscriptaccess="always" allowfullscreen="true"></embed></object></p>
    </div>
    <div class="modal-footer">
    	<a href="#" class="btn" data-dismiss="modal">Close</a>
    </div>
</div>

<div class="modal hide" id="videoWall3">
	<div class="modal-header">
    	<h3>Leading Faith Based Organizations</h3>
    </div>
    <div class="modal-body">
    <p><object width="560" height="315"><param name="movie" value="http://www.youtube.com/v/rIUaFmD2pbE?version=3&amp;hl=en_US&amp;rel=0"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="http://www.youtube.com/v/rIUaFmD2pbE?version=3&amp;hl=en_US&amp;rel=0" type="application/x-shockwave-flash" width="560" height="315" allowscriptaccess="always" allowfullscreen="true"></embed></object></p>
    </div>
    <div class="modal-footer">
    	<a href="#" class="btn" data-dismiss="modal">Close</a>
    </div>
</div>

<div class="modal hide" id="videoWall4">
	<div class="modal-header">
    	<h3>Curriculum design , development & delivery</h3>
    </div>
    <div class="modal-body">
    <p><object width="560" height="315"><param name="movie" value="http://www.youtube.com/v/3x9pXBcKcMo?version=3&amp;hl=en_US&amp;rel=0"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="http://www.youtube.com/v/3x9pXBcKcMo?version=3&amp;hl=en_US&amp;rel=0" type="application/x-shockwave-flash" width="560" height="315" allowscriptaccess="always" allowfullscreen="true"></embed></object></p>
    </div>
    <div class="modal-footer">
    	<a href="#" class="btn" data-dismiss="modal">Close</a>
    </div>
</div>

<div class="modal hide" id="videoWall5">
	<div class="modal-header">
    	<h3>Asia Market Entry & Growth Insights</h3>
    </div>
    <div class="modal-body">
    <p><object width="560" height="315"><param name="movie" value="http://www.youtube.com/v/o6GIizLk8dI?version=3&amp;hl=en_US&amp;rel=0"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="http://www.youtube.com/v/o6GIizLk8dI?version=3&amp;hl=en_US&amp;rel=0" type="application/x-shockwave-flash" width="560" height="315" allowscriptaccess="always" allowfullscreen="true"></embed></object></p>
    </div>
    <div class="modal-footer">
    	<a href="#" class="btn" data-dismiss="modal">Close</a>
    </div>
</div>

<div class="modal hide" id="videoWall6">
	<div class="modal-header">
    	<h3>Noah's Ark- Lessons in Strategy Development</h3>
    </div>
    <div class="modal-body">
    <p><object width="560" height="315"><param name="movie" value="http://www.youtube.com/v/nA77cHCT9_g?version=3&amp;hl=en_US&amp;rel=0"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="http://www.youtube.com/v/nA77cHCT9_g?version=3&amp;hl=en_US&amp;rel=0" type="application/x-shockwave-flash" width="560" height="315" allowscriptaccess="always" allowfullscreen="true"></embed></object></p>
    </div>
    <div class="modal-footer">
    	<a href="#" class="btn" data-dismiss="modal">Close</a>
    </div>
</div>


<script>
	var _gaq=[['_setAccount','UA-34493045-1'],['_trackPageview']];
	(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
	g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
	s.parentNode.insertBefore(g,s)}(document,'script'));
</script>
	<script src="js/cufon-yui.js" type="text/javascript"></script>
	<script src="js/fonts/chancur_400.font.js" type="text/javascript"></script>
    <script src="js/fonts/talkingtothemoon_400.font.js" type="text/javascript"></script>
	<script src="js/script.js"></script>
	<script src="js/jquery.tweet.js"></script>
	<script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.2.min.js"><\/script>')</script>
	<script src="js/libs/bootstrap/bootstrap.min.js"></script>
	<script src="js/plugins.js"></script>
	<script type="text/javascript" src="js/jquery.simplyscroll.js"></script>
    <script type="text/javascript" src="js/jquery.totemticker.min.js"></script>

</body>
</html>