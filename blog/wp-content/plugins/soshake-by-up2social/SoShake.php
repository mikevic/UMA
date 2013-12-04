<?php
/*
Plugin Name: SoShake by Up 2 Social
Plugin URI: http://wordpress.org/extend/plugins/soshake-by-up2social/
Description: easy social plugins integration.
Version: 2.0.1
Author: Up 2 Social
Author URI: http://soshake.com
*/
?>
<?php
// Installation du plugin
register_activation_hook(__FILE__, 'old_setUpSoShakes');
if(function_exists("old_setUpSoShakes") && false) {
        function old_setUpSoShakes() {}
}

$soshake_plugin_directory = dirname(__FILE__);

//Creation des widget
require($soshake_plugin_directory."/php/functions.php");
require($soshake_plugin_directory."/WidgetSoShake.php");
add_action('widgets_init', 'old_register_Widget_SoShake_Facebook_Connect');
add_action('widgets_init', 'old_register_Widget_SoShake_Fanbox');


function old_up2_showMessage($message, $errormsg = false)
{
	if ($errormsg) {
		echo '<div id="message" class="error">';
	}
	else {
		echo '<div id="message" class="updated fade">';
	}

	echo "<p><strong>$message</strong></p></div>";
}
/**
 * Just show our message (with possible checking if we only want
 * to show message to certain users.
 */
function old_up2_showAdminMessages() {
    // Only show to admins
    if (current_user_can('manage_options')) {
       old_up2_showMessage("The plugin 'SoShake by Up2Social' is no longer supported by us. We strongly advise to get our new plugin here : <a href='http://wordpress.org/extend/plugins/soshake' target='_blank'>http://wordpress.org/extend/plugins/soshake</a>", true);
    }
}

/** 
  * Call showAdminMessages() when showing other admin 
  * messages. The message only gets shown in the admin
  * area, but not on the frontend of your WordPress site. 
  */
add_action('admin_notices', 'old_up2_showAdminMessages');


//Insertion des balises OpenGraph dans le header
//require_once( $soshake_plugin_directory . '/php/open-graph.php');

//Lien dans l'admin
add_action('admin_menu', 'old_addScriptAdminSoShake');

//Insertion des scripts dans le footer
add_action("wp_footer", 'old_addFooterSoShake');

// Ajout dans l'article ou exceprt
add_filter('the_content', 'old_insert_SoShake_content' );
//add_filter('the_excerpt', 'insert_SoShake_excerpt' );

if(isset($_POST["up2FBConnect"]) && $_POST["up2FBConnect"] == 1) {
        require_once(str_replace("/wp-content/plugins/soshake-by-up2social", "", $soshake_plugin_directory)."/wp-includes/pluggable.php");
	if($user = get_users("search=".$_POST["email"])) {
		$user_id = $user[0]->ID;
	} else {
		$user_id = wp_insert_user(array(
			"user_pass"     => $_POST["email"],
			"user_login"    => $_POST["username"],
			"user_email"    => $_POST["email"],
			"first_name"    => $_POST["first_name"],
			"last_name"     => $_POST["last_name"]
			));
	}
	
	if($user_id) {
		$user = wp_signon( array(
			"user_login"    => $_POST["username"],
			"user_password" => $_POST["email"],
			"remember"      => true
			), false );
		if ( is_wp_error($user) ) {
			
		} else {
			
		}
	}
}

