<?php
/*
Plugin Name: Anva Foodlist Support
Description: This plugin works in conjuction with the Foodlist to customize the look of menu sections and items.
Version: 1.0.0
Author: Anthuan Vásquez
Author URI: http://anthuanvasquez.net
License: GPL2

	Copyright 2016  Anthuan Vásquez

	This program is free software; you can redistribute it and/or modify
	it under the terms of the GNU General Public License version 2,
	as published by the Free Software Foundation.

	You may NOT assume that you can use any other version of the GPL.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	The license for this software can likely be found here:
	http://www.gnu.org/licenses/gpl-2.0.html

*/

// If Foodlist plugin is not installed and activated.
// if ( ! defined( 'FOODLIST_VERSION' )) {
// 	return;
// }

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

// Plugin Constans
define ( 'ANVA_FOODLIST_SUPPORT_PLUGIN_VERSION', '1.0.0' );
define ( 'ANVA_FOODLIST_SUPPORT_PLUGIN_DIR', dirname( __FILE__ ) );
define ( 'ANVA_FOODLIST_SUPPORT_PLUGIN_URI', plugins_url( '' , __FILE__ ) );

include_once( ANVA_FOODLIST_SUPPORT_PLUGIN_DIR . '/includes/general.php' );
include_once( ANVA_FOODLIST_SUPPORT_PLUGIN_DIR . '/includes/templates.php' );

/**
 * Anva Foodlist Support Setup.
 *
 * @since 1.0.0
 */
function anva_foodlist_init() {

	add_filter( 'foodlist_menu_template', 'anva_menu_template', 11, 1 );
	add_filter( 'foodlist_menu_section_template', 'anva_menu_section_template', 11, 1 );
	add_filter( 'foodlist_menu_item_template', 'anva_menu_item_template', 11, 1 );
	add_action( 'wp_enqueue_scripts', 'anva_foodlist_scripts' );

}
add_action( 'after_setup_theme', 'anva_foodlist_init' );
