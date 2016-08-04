<?php
/**
 * Foodlist front end scripts.
 *
 * @since 1.0.0
 */
function anva_foodlist_scripts() {

	// Remove the main foodlist styles from front end
	wp_dequeue_style( 'foodlist-frontend' );
	
	// Add styles
	wp_enqueue_style( 'anva-foodlist-styles', ANVA_FOODLIST_SUPPORT_PLUGIN_URI . '/assets/css/anva-foodlist-styles.css', array(), ANVA_FOODLIST_SUPPORT_PLUGIN_VERSION );

	// Add JS
	wp_enqueue_script( 'anva-foodlist-js', ANVA_FOODLIST_SUPPORT_PLUGIN_URI . '/assets/js/anva-foodlist-menu-toc.js', array( 'jquery' ), ANVA_FOODLIST_SUPPORT_PLUGIN_VERSION, true );
}

function anva_foodlist_textdomain() {
	load_plugin_textdomain(
		'anva-foodlist',
		false,
		dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
	);
}
