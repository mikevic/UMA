<form method="post" action="">
<h2>Where do you want to add the social share buttons ?</h2>
        <div style="display:table;width:100%">
                <div style="display:table-row;">
                <?php foreach(array("top", "right", "bottom", "left") as $position) { ?>
                        <div style="display:table-cell;width:25%;text-align:center;vertical-align:top;">
                                <label for="radio_<? echo $position ?>">
                                        <img src="<? echo plugin_dir_url(__FILE__) ?>../images/<? echo $position ?>.png" style="width:100px;height:auto" />
                                </label><br />
                                <input type="radio" name="position" value="<? echo $position ?>" id="radio_<? echo $position ?>" <? if(get_option("soshake-position") == $position) echo "checked" ?>/>
                        </div>
                <?php } ?>
                </div>
        </div>
<h2>Which social network do you want to display ?</h2>
<div style="display:table;width:100%">
        <div style="display:table-row;" class="up2-basic-network">
                <?php foreach(array("Facebook" => "like", "Twitter" => "tweet", "Google +" => "gplus", "Linked In" => "linkedin", "Pinterest" => "pinit") as $network=>$action) { ?>
                <div style="display:table-cell;text-align:center;">
                        <label for="select_<? echo $action ?>">
                                <img src="<? echo plugin_dir_url(__FILE__) ?>../images/<? echo $action ?>_512.png" style="width: 100px;height: auto;" />
                                <p><? echo $network ?></p>
                        </label>
                        <input type="checkbox" name="buttons[]" value="<? echo $action ?>" id="select_<? echo $action ?>" <? if(is_array(get_option("soshake-buttons")) && in_array($action,get_option("soshake-buttons"))) echo "checked" ?>/>
                </div>
                <?php } ?>
        </div>
</div>
<br />
<br />
<br />
<input type="submit" name="save" value="Save this configuration" />
</form>
