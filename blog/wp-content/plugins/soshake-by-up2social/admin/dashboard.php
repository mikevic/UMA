<?php
if(function_exists("file_get_contents") && strtolower(ini_get("allow_url_fopen")) == "on") {
        $file = file_get_contents("http://soshake.com/api/stats.json?domain=".urlencode(site_url()));
        $stats = json_decode($file);
        ?>
        <h2>Yous social stats</h2>
        <div class=stats>
        
                <ul class="time-crumb">
                        <li class=""><a href="http://soshake.com/front/stats.html?range=yesterday&view=SocialStats" target="_blank">Yesterday</a></li>
                        <li class="active"><a href="http://soshake.com/front/stats.html?range=sevendays&view=SocialStats" target="_blank">Last 7 days</a></li>
                        <li class=""><a href="http://soshake.com/front/stats.html?range=month&view=SocialStats" target="_blank">Last 30 days</a></li>
                        <li class=""><a href="http://soshake.com/front/stats.html?range=all&view=SocialStats" target="_blank">From the beginning</a></li>
                </ul>
                <table class="numbers">
                        <tr>
                                <td>
                                        <div class="up2-stat">
                                                <div class="up2-nb"><? echo $stats->result->views ?></div>
                                                <div class="up2-lgd">Views</div>
                                        </div>
                                </td>
                                <td>
                                        <div class="up2-stat">
                                                <div class="up2-nb"><? echo $stats->result->shares ?></div>
                                                <div class="up2-lgd">Shares</div>
                                        </div>
                                </td>
                                <td>
                                        <div class="up2-stat" style="margin-right: 0">
                                                <div class="up2-nb"><? echo $stats->result->actions ?></div>
                                                <div class="up2-lgd">SoShake</div>
                                        </div>
                                </td>
                        </tr>
                </table>
                <a href="http://soshake.com/front/stats.html" target="_blank"><img src="<? echo plugin_dir_url(__FILE__) ?>../images/Dashboard-SoShake-Wordpress.png" id="up2-stat-shadow" /></a>
                <br />
                <a href="http://soshake.com/front" target="_blank" id="more_link">More >></a>
        </div>
        <?
} else {
        ?>
        You server configuration prevent us from dislpaying your stats.
        <a href="http://soshake.com/front" target="_blank">Go on SoShake.com to check them out !</a>
        <?
}
