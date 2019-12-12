<?php
/**
 * Superscomesse functions and definitions
 */

if ( version_compare( $GLOBALS['wp_version'], '4.7', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
	return;
}

// Check function exists.
if( function_exists('acf_add_options_page') ) {

	// Register options page.
	$option_page = acf_add_options_page(array(
		'page_title'    => __('Header&Footer Settings'),
		'menu_title'    => __('Header&Footer Settings'),
		'menu_slug'     => 'header-footer-settings',
		'capability'    => 'edit_posts',
		'redirect'      => false
	));
}
