<?php

/**
 * Plugin Name: Plugin Example
 * Description: This is a plugin example
 */

 //[foobar]
function foobar_func( $atts ){
	return get_current_user_id();
}
add_shortcode( 'test', 'foobar_func' );

function utility_admin_menu_option(){
    add_menu_page('Utility Plugin Page', 'Utility Plugin', 'manage_options', 'utility-plugin', 'utility_plugin_page', '', 200);
}

add_action('admin_menu', 'utility_admin_menu_option');

?>