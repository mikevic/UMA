<?php
// Register the widget
function old_register_Widget_SoShake_Facebook_Connect () { return register_widget("old_Widget_SoShake_Facebook_Connect"); }
function old_register_Widget_SoShake_Fanbox () { return register_widget("old_Widget_SoShake_Fanbox"); }




function addScriptsSoShake () {
        wp_enqueue_script('jquery');
}
function addScriptAdminSoShake () {
        add_menu_page('SoShake', 'SoShake', 1, 'soshake_menu', 'old_insertPluginFile');
        add_submenu_page("soshake_menu", "Parameters", "Dashboard", 1, "soshake-stats", "old_insertStatFile");
        add_submenu_page("soshake_menu", "Parameters", "Basic settings", 1, "soshake-basic", "old_insertPluginFile");
        add_submenu_page("soshake_menu", "Parameters", "Advanced settings", 1, "soshake-advanced", "old_insertAdvanceFile");
        add_submenu_page("soshake_menu", "Parameters", "More", 1, "soshake-more", "old_insertSoshakeMoreFile");
}
function old_insertPluginFile () { global $soshake_plugin_directory ; $page = "basic"; require($soshake_plugin_directory."/admin/page.php"); }
function old_insertStatFile () { global $soshake_plugin_directory ; $page = "dashboard"; require($soshake_plugin_directory."/admin/page.php"); }
function old_insertAdvanceFile () { global $soshake_plugin_directory ; $page = "advanced"; require($soshake_plugin_directory."/admin/page.php"); }
function old_insertSoshakeMoreFile () { global $soshake_plugin_directory ; $page = "more"; require($soshake_plugin_directory."/admin/page.php"); }

function old_addFooterSoShake () {
        echo '<script type="text/javascript" src="http://soshake.com/api/LikeButton.js"></script>';
        require(WP_PLUGIN_DIR.'/'.str_replace(basename( __FILE__),"",plugin_basename(__FILE__))."related.php");
}
function old_create_Soshake($content) {
        $layouts = array(
                "none" => array(
                        "like"          => 'layout="standard" send="true" show_faces="false" width="150"',
                        "tweet"         => 'data-count="none"  data-text="'.get_the_title().'"',
                        "gplus"         => 'annotation="none" size="medium"',
                        "linkedin"      => 'layout="none"',
                        "pinit"         => 'layout="none"',
                ),
                "horizontal" => array(
                        "like"          => 'layout="button_count" send="true" show_faces="false" width="150"',
                        "tweet"         => 'data-count="horizontal"  data-text="'.get_the_title().'"',
                        "gplus"         => 'annotation="bubble" size="medium"',
                        "linkedin"      => 'layout="right"',
                        "pinit"         => 'layout="horizontal"',
                ),
                "vertical" => array(
                        "like"          => 'layout="box_count" send="true" show_faces="false" width="50"',
                        "tweet"         => 'data-count="vertical" data-text="'.get_the_title().'"',
                        "gplus"         => 'annotation="top" size="tall"',
                        "linkedin"      => 'layout="top"',
                        "pinit"         => 'layout="vertical" style="height: 90px;margin-top: -20px;width: 45px;margin-right: 3px;margin-left: 3px;"',
                )
        );
        
        if(is_array(get_option("soshake-pages"))) {
                if(is_home() && !in_array("home", get_option("soshake-pages")) ) return $content;
                if(is_archive() && !in_array("archive", get_option("soshake-pages")) ) return $content;
                if(is_single() && !in_array("single", get_option("soshake-pages")) ) return $content;
                if(is_category() && !in_array("category", get_option("soshake-pages")) ) return $content;
                if(is_search() && !in_array("search", get_option("soshake-pages")) ) return $content;
        }
        switch (get_option("soshake-position")) {
                case "top":
                        $return = '<div id="soshake-sharebox" style="margin-bottom:10px;">';
                        if(get_option("soshake-layout")) $layout = get_option("soshake-layout");
                        else $layout = "horizontal";
                        foreach(get_option("soshake-buttons") as $button) {
                                $return .= '<div class="sshk-'.$button.'" style="float:left;" '.$layouts[$layout][$button].' categorie="'.strip_tags(get_the_category_list("-")).'" url="'.apply_filters('the_permalink', get_permalink()).'"></div>';
                        }
                        $return .= '<div style="clear:both"></div></div>'.$content;
                        break;
                case "right":
                        $return = '<div id="soshake-sharebox" style="float:right;text-align:center;margin-left:20px;">';
                        if(get_option("soshake-layout")) $layout = get_option("soshake-layout");
                        else $layout = "vertical";
                        foreach(get_option("soshake-buttons") as $button) {
                                $return .= '<div class="sshk-'.$button.'" style="float:left;" '.$layouts[$layout][$button].' categorie="'.strip_tags(get_the_category_list("-")).'" url="'.apply_filters('the_permalink', get_permalink()).'"></div>';
                        }
                        $return .= '<div style="clear:both"></div></div>'.$content;
                        break;
                case "left":
                        $return = '<div id="soshake-sharebox" style="float:left;text-align:center;margin-right:20px;">';
                        if(get_option("soshake-layout")) $layout = get_option("soshake-layout");
                        else $layout = "vertical";
                        foreach(get_option("soshake-buttons") as $button) {
                                $return .= '<div class="sshk-'.$button.'" style="float:left;" '.$layouts[$layout][$button].' categorie="'.strip_tags(get_the_category_list("-")).'" url="'.apply_filters('the_permalink', get_permalink()).'"></div>';
                        }
                        $return .= '<div style="clear:both"></div></div>'.$content;
                        break;
                case "bottom":
                        $return = $content.'<div id="soshake-sharebox" style="margin-top:10px;">';
                        if(get_option("soshake-layout")) $layout = get_option("soshake-layout");
                        else $layout = "horizontal";
                        foreach(get_option("soshake-buttons") as $button) {
                                $return .= '<div class="sshk-'.$button.'" style="float:left;" '.$layouts[$layout][$button].' categorie="'.strip_tags(get_the_category_list("-")).'" url="'.apply_filters('the_permalink', get_permalink()).'"></div>';
                        }
                        $return .= '<div style="clear:both"></div></div>';
                        break;
                default:
                        $return = $content;
                        break;
        }
        return $return;
}
function old_insert_SoShake_content($content) {
        return create_Soshake($content);
}
function old_insert_SoShake_excerpt($content) {
        return create_Soshake($content);
}