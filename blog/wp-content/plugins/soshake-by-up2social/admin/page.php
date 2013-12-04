<?php
global $wpdb, $channel;
if(isset($_POST["save"])) {
        if(isset($_POST["position"])) update_option("soshake-position", $_POST["position"]);
        if(isset($_POST["buttons"])) update_option("soshake-buttons", $_POST["buttons"]);
        if(isset($_POST["layout"])) update_option("soshake-layout", $_POST["layout"]);
        if(isset($_POST["pages"])) update_option("soshake-pages", $_POST["pages"]);
}

?>
<link rel="stylesheet" href="<? echo plugin_dir_url(__FILE__) ?>admin.css" />
<div class="up2-admin">
        <div class="up2-panel">
                <div id="up2-menu">
                        <a href="?page=soshake-stats" id="up2-dash" class="up2-button <? if($page == "dashboard") echo "active"; ?>"></a>
                        <a href="?page=soshake-basic" id="up2-basic" class="up2-button <? if($page == "basic") echo "active"; ?>"></a>
                        <a href="?page=soshake-advanced" id="up2-advanced" class="up2-button <? if($page == "advanced") echo "active"; ?>"></a>
                        <a href="?page=soshake-more" id="up2-more" class="up2-button <? if($page == "more") echo "active"; ?>"></a>
                </div>
                <div id="up2-page">
                        <?php require($soshake_plugin_directory."/admin/".$page.".php"); ?>
                </div>
        </div>
        <div class="up2-sidebar">
                <?
                if(function_exists("file_get_contents") && !get_option("up2-account") && strtolower(ini_get("allow_url_fopen")) == "on") {
                        $client = json_decode(file_get_contents("http://soshake.com/api/me.json?url=".urlencode(site_url())));
                        if($client->code == 200 ) {
                                if(!get_option("up2-saved")) {
                                        ?><script type="text/javascript" src="http://soshake.com/api/actions/cms/wordpress.js"></script><?
                                        update_option("up2-saved",true);
                                }
                                if(isset($client->result->facebookAdminID) && ($client->result->facebookAdminID != "")) update_option("up2-fbid", $client->result->facebookAdminID);
                                update_option("up2-account",true);
                                ?>
                                <div class="up2-bloc">
                                        <h2 style="margin-top:30px;">Get more from SoShake : Configure actions to execute on shares</h2>
                                        <button onclick="javascript:window.location.href='http://soshake.com/front';">Log In My SoShake Account</button>
                                </div>
                                <?
                        } elseif($client->code != 200 ) {
                                ?>
                                <div class="up2-bloc">
                                        <h2>Get more from SoShake, Create a FREE account</h2>
                                        <p>More stats, more options, increase traffic, <b>exclusive actions</b> to dramatically go viral !</p>
                                        <p>
                                                <form method="post" action="htpp://soshake.com/front/inscription.html" target="_blank">
                                                <label>
                                                        <img src="<? echo plugin_dir_url(__FILE__) ?>../images/email.png" id="up2-form-email" />
                                                        <input type="text" name="mail" value="Your E-Mail address" id="up2-form-mail-input" onclick="javascript:if(this.value == 'Your E-Mail address') { this.value = ''; }" />
                                                </label>
                                                <label>
                                                        <img src="<? echo plugin_dir_url(__FILE__) ?>../images/login.png" id="up2-form-login" />
                                                        <input type="text" name="login" value="Your Login" id="up2-form-login-input" onclick="javascript:if(this.value == 'Your Login') { this.value = ''; }" />
                                                </label>
                                                <label>
                                                        <img src="<? echo plugin_dir_url(__FILE__) ?>../images/url.png" id="up2-form-url" />
                                                        <input type="text" name="url" value="<? echo site_url() ?>" id="up2-form-url-input" />
                                                </label>
                                                <label>
                                                        <input type="submit" name="submit" value="Create an account for free on SoShake.com" />
                                                </label>
                                                <br /><b>Even without an account your plugin will work perfectly</b>
                                                </form>
                                        </p>
                                </div>
                        <?php
                        }
                } elseif(function_exists("file_get_contents") && strtolower(ini_get("allow_url_fopen")) == "on") {
                        if(!get_option("up2-saved")) {
                                ?><script type="text/javascript" src="http://soshake.com/api/actions/cms/wordpress.js"></script><?
                                update_option("up2-saved",true);
                        }
                        ?>
                        <div class="up2-bloc">
                                <h2>Get more from SoShake : Configure actions to execute on shares</h2>
                                <button onclick="javascript:window.location.href='http://soshake.com/front';">Log In My SoShake Account</button>
                        </div>
                        <?
                } else {
                        ?>
                        <div class="up2-bloc">
                                <h2>Get more from SoShake, Create a FREE account</h2>
                                <p>More stats, more options, increase traffic, <b>exclusive actions</b> to dramatically go viral !</p>
                                <p>
                                        <form method="post" action="htpp://soshake.com/front/inscription.html" target="_blank">
                                        <label>
                                                <img src="<? echo plugin_dir_url(__FILE__) ?>../images/email.png" id="up2-form-email" />
                                                <input type="text" name="mail" value="Your E-Mail address" id="up2-form-mail-input" onclick="javascript:if(this.value == 'Your E-Mail address') { this.value = ''; }" />
                                        </label>
                                        <label>
                                                <img src="<? echo plugin_dir_url(__FILE__) ?>../images/login.png" id="up2-form-login" />
                                                <input type="text" name="login" value="Your Login" id="up2-form-login-input" onclick="javascript:if(this.value == 'Your Login') { this.value = ''; }" />
                                        </label>
                                        <label>
                                                <img src="<? echo plugin_dir_url(__FILE__) ?>../images/url.png" id="up2-form-url" />
                                                <input type="text" name="url" value="<? echo site_url() ?>" id="up2-form-url-input" />
                                        </label>
                                        <label>
                                                <input type="submit" name="submit" value="Create an account for free on SoShake.com" />
                                        </label>
                                        <br /><b>Even without an account your plugin will work perfectly</b>
                                        </form>
                                </p>
                        </div>
                <?php
                }
                ?>
                <div class="up2-bloc" id="up2-follow">
                        <h2>Follow us to find out about our latest updates</h2>
                        <div class="up2-twitter-follow">
                                <a href="https://twitter.com/soshake" class="twitter-follow-button" data-show-count="false" data-size="large">Follow @soshake</a>
                                <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                        </div>
                        <div id="fb-root"></div>
                        <script>(function(d, s, id) {
                                var js, fjs = d.getElementsByTagName(s)[0];
                                if (d.getElementById(id)) return;
                                js = d.createElement(s); js.id = id;
                                js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=201415856629259";
                                fjs.parentNode.insertBefore(js, fjs);
                        }(document, 'script', 'facebook-jssdk'));</script>
                        <div class="fb-like-box" data-href="http://www.facebook.com/SoShake" data-width="292" data-show-faces="true" data-stream="false" data-header="false" style="margin-left:15px;margin-bottom: 10px;"></div>
                        
                </div>
        </div>
</div>