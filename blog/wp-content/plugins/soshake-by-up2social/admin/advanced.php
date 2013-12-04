        <form method="post" action="">
        <h2>What kind of button to show ?</h2>
        <div style="display:table;width:100%">
                <div style="margin-bottom:15px">
                        <input type="radio" name="layout" value="none" id="layout_none" style="margin-bottom:13px;" <? if("none" == get_option("soshake-layout")) echo "checked" ?>/>
                        <label for="layout_none">
                                <img src="http://soshake.com/lib/_img/ext/fb_none.png" />
                                <img src="http://soshake.com/lib/_img/ext/tw_none.png" />
                                <img src="http://soshake.com/lib/_img/ext/gp_medium_none.png" />
                                <img src="http://soshake.com/lib/_img/ext/li_none.png" />
                                <img src="http://soshake.com/lib/_img/ext/pi_none.png" />
                        </label>
                </div>
                <div style="margin-bottom:15px">
                        <input type="radio" name="layout" value="horizontal" id="layout_none" style="margin-bottom:13px;" <? if("horizontal" == get_option("soshake-layout")) echo "checked" ?>/>
                        <label for="layout_none">
                                <img src="http://soshake.com/lib/_img/ext/fb_button_count.png" />
                                <img src="http://soshake.com/lib/_img/ext/tw_horizontal.png" />
                                <img src="http://soshake.com/lib/_img/ext/gp_medium_bubble.png" />
                                <img src="http://soshake.com/lib/_img/ext/li_right.png" />
                                <img src="http://soshake.com/lib/_img/ext/pi_horizontal.png" />
                        </label>
                </div>
                <div style="margin-bottom:15px">
                        <input type="radio" name="layout" value="vertical" id="layout_none" style="margin-bottom:13px;" <? if("vertical" == get_option("soshake-layout")) echo "checked" ?>/>
                        <label for="layout_none">
                                <img src="http://soshake.com/lib/_img/ext/fb_box_count.png" />
                                <img src="http://soshake.com/lib/_img/ext/tw_vertical.png" />
                                <img src="http://soshake.com/lib/_img/ext/gp_tall_bubble.png" />
                                <img src="http://soshake.com/lib/_img/ext/li_top.png" />
                                <img src="http://soshake.com/lib/_img/ext/pi_vertical.png" />
                        </label>
                </div>
        </div>
        <h2>Which page to add it to?</h2>
        <? $pages = array("home","archive", "category", "search", "single" ) ?>
        <div style="display:table;width:100%">
                <? foreach($pages as $page) { ?>
                <input type="checkbox" name="pages[]" value="<? echo $page ?>" id="pages_<? echo $page ?>" <? if(is_array(get_option("soshake-pages")) && in_array($page,get_option("soshake-pages"))) echo "checked" ?>/> <? echo $page ?><br />
                <? } ?>
        </div>
        <br />
        <br />
        <br />
        <input type="submit" name="save" value="Save this configuration" />
        </form>
