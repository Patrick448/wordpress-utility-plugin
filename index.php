<?php

/**
 * Plugin Name: Plugin Example
 * Description: This is a plugin example
 */

 //[foobar]
function foobar_func( $atts ){
	return "Alucicrazy";
}
add_shortcode( 'test', 'foobar_func' );

?>