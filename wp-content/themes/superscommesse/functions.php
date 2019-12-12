<?php
/**
 * Superscomesse functions and definitions
 */

if ( version_compare( $GLOBALS['wp_version'], '4.7', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
	return;
}

// Check function exists.
if ( function_exists( 'acf_add_options_page' ) ) {

	acf_add_options_page();

	acf_add_options_sub_page('General');
	acf_add_options_sub_page('Header');
	acf_add_options_sub_page('Footer');
	acf_add_options_sub_page('Home Footer');
}
