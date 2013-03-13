<?php
/*
Plugin Name: SoShake by Up 2 Social
Plugin URI: http://wordpress.org/extend/plugins/soshake-by-up2social/
Description: easy social plugins integration.
Version: 2.0
Author: Up 2 Social
Author URI: http://soshake.com
*/
?>
<?php
// Installation du plugin
register_activation_hook(__FILE__, 'setUpSoShakes');
if(function_exists("setUpSoShakes") && false) {
        function setUpSoShakes() {}
}

$soshake_plugin_directory = dirname(__FILE__);

//Creation des widget
require($soshake_plugin_directory."/php/functions.php");
require($soshake_plugin_directory."/WidgetSoShake.php");
add_action('widgets_init', 'register_Widget_SoShake_Facebook_Connect');
add_action('widgets_init', 'register_Widget_SoShake_Fanbox');

//Insertion des balises OpenGraph dans le header
require_once( $soshake_plugin_directory . '/php/open-graph.php');

//Lien dans l'admin
add_action('admin_menu', 'addScriptAdminSoShake');

//Insertion des scripts dans le footer
add_action("wp_footer", 'addFooterSoShake');

// Ajout dans l'article ou exceprt
add_filter('the_content', 'insert_SoShake_content' );
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

