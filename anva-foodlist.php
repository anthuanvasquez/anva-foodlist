<?php
/*
Plugin Name: Anva Foodlist
Description: This plugin works in conjuction with the Foodlist to customize the look of menu sections and items.
Version: 1.0.0
Author: Anthuan Vásquez
Author URI: http://anthuanvasquez.net
License: GPL2
*/

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

// Plugin Constans
define ( 'ANVA_FOODLIST_PLUGIN_VERSION', '1.0.0' );
define ( 'ANVA_FOODLIST_PLUGIN_DIR', dirname( __FILE__ ) );
define ( 'ANVA_FOODLIST_PLUGIN_URI', plugins_url( '' , __FILE__ ) );

// Load dependencies
require_once( ANVA_FOODLIST_PLUGIN_DIR . '/includes/general.php' );
require_once( ANVA_FOODLIST_PLUGIN_DIR . '/includes/templates.php' );

/**
 * Anva Foodlist Init.
 *
 * @since 1.0.0
 */
function anva_foodlist_init() {

	add_filter( 'foodlist_menu_template', 'anva_menu_template', 11, 1 );
	add_filter( 'foodlist_menu_section_template', 'anva_menu_section_template', 11, 1 );
	add_filter( 'foodlist_menu_item_template', 'anva_menu_item_template', 11, 1 );
	add_action( 'wp_enqueue_scripts', 'anva_foodlist_scripts' );
	add_action( 'plugins_loaded', 'anva_foodlist_textdomain' );

}
add_action( 'after_setup_theme', 'anva_foodlist_init' );
