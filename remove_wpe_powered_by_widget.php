<?php
/**
 * Plugin Name: Remove WPE Powered By Widget
 * Plugin URI: https://github.com/PrysPlugins/remove_wpe_powered_by_widget
 * Description: Remove the "Powered by WP Engine" widget
 * Version: 1.0
 * Author: Jeremy Pry
 * Author URI: http://jeremypry.com/
 * License: GPL2
 * 
 * GitHub Plugin URI: https://github.com/PrysPlugins/remove_wpe_powered_by_widget
 * GitHub Branch: master
 */

// Prevent direct access to this file
if ( ! defined( 'ABSPATH' ) ) {
	die( "You can't do anything by accessing this file directly." );
}

add_action( 'widgets_init', 'jpry_remove_wpe_widget' );
/**
 * Unregister the WP Engine "Powered By" widget.
 *
 * @since 1.0
 */
function jpry_remove_wpe_widget() {
	wp_unregister_sidebar_widget( 'wpe_widget_powered_by' );
}
