<?php
/**
 * Superscomesse functions and definitions
 */

if ( version_compare( $GLOBALS['wp_version'], '4.7', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';

	return;
}

add_theme_support( 'menus' );

add_action( 'after_setup_theme', function () {
	register_nav_menus( [
		'header_menu' => 'Header Navigation',
	] );
} );

add_filter( 'nav_menu_item_id', 'filter_menu_item_css_id', 10, 4 );
function filter_menu_item_css_id( $menu_id, $item, $args, $depth ) {
	if ( $args->theme_location == 'header_menu' ) {
		return '';
	}
}

add_filter( 'nav_menu_css_class', 'filter_nav_menu_css_classes', 10, 4 );
function filter_nav_menu_css_classes( $classes, $item, $args, $depth ) {
	if ( $args->theme_location == 'header_menu' ) {
		$classes = [
			''
		];
		if ( $item->current ) {
			$classes[] = 'active';
		}
		if ( sanitize_title( $item->title ) == 'multiregistrazione-esclusiva' ) {
			$classes[] = 'multireg-lnk';
		}
	}

	return $classes;
}

add_filter( 'nav_menu_link_attributes', 'filter_nav_menu_link_attributes', 10, 4 );
function filter_nav_menu_link_attributes( $atts, $item, $args, $depth ) {
	if ( $args->theme_location == 'header_menu' ) {
		$atts['data-name'] = sanitize_title( $item->title );
	}

	return $atts;
}