<?php
/*
  Plugin Name: WAX Remove H1 from editor
  Plugin URI: https://www.webaxones.com
  Description: Remove the h1 tag from the WordPress editor
  Author: Webaxones
  Author URI: https://www.webaxones.com
  Version: 1.0
 */

// don't load directly
if ( !defined( 'ABSPATH' ) )
	die('-1');


/**
 *  Remove the h1 tag from the WordPress editor.
 *
 *  @param   array  $settings  The array of editor settings
 *  @return  array             The modified edit settings
 */


add_filter( 'tiny_mce_before_init', 'wax_remove_h1_from_editor' );
 
function wax_remove_h1_from_editor( $settings ) {
    $settings['block_formats'] = 'Paragraph=p;Heading 2=h2;Heading 3=h3;Heading 4=h4;Heading 5=h5;Heading 6=h6;Preformatted=pre;';
    return $settings;
}