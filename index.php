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

?>