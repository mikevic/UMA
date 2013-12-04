<?php
//On récupère les infos du client :
if(function_exists("file_get_contents") && ini_get('allow_url_fopen') == "On" && false) {
        $client = json_decode(file_get_contents("http://soshake.com/api/me.json?url=".urlencode(site_url())));
        if($client->code == 200 && isset($client->result->facebookAdminID) && ($client->result->facebookAdminID != "") ) {
                update_option("up2-fbid", $client->result->facebookAdminID);
        } elseif($client->code != 200 ) {
                ?><div class="error fade"><p>To extend SoShake possibilities create an account on SoShake.com : <a href="http://soshake.com" target="_blank" class="up2-button">Create an account for free on SoShake.com</a><br /><b>Even without an account your plugin will work perfectly</b></p></div><?php
        }
}
?>
<div class="wrap">
        <h1>SoShake</h1>
        <a href="?page=functions.php&advanced=1">Advanced Settings</a>
        <h2 style="margin-top:30px;">Get more from SoShake : Configure actions to execute on shares</h2>
        <button onclick="javascript:window.location.href='http://soshake.com/front';">Log In My SoShake Account</button>
        <h2>Follow us to find out about our latest updates</h2>
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=201415856629259";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
        <div class="fb-like-box" data-href="http://www.facebook.com/SoShake" data-width="292" data-show-faces="true" data-stream="false" data-header="false" style="float:left;margin-right:50px;"></div>
        
        <a href="https://twitter.com/soshake" class="twitter-follow-button" data-show-count="false" data-size="large">Follow @soshake</a>
        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
        <div style="clear:both"></div>
</div>
