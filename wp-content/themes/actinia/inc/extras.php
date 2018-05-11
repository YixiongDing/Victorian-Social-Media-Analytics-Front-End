<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Actinia
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function actinia_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}
        
        if ( 'left' === esc_attr( get_theme_mod( 'actinia_sidebar_position', 'right' ) ) && is_active_sidebar('sidebar-primary') ) {
            $classes[] = 'left-sidebar';
        }
        
        if ( 'top' === esc_attr( get_theme_mod( 'actinia_post_meta_position', 'left' ) ) ) {
            $classes[] = 'top-meta';
        }    
        
        if ( 'side' === esc_attr( get_theme_mod( 'actinia_navbar_position', 'top' ) ) ) {
            $classes[] = 'navbar-side';
        }
        
        if ( 'remove-header' != esc_attr( get_theme_mod( 'header_image') ) ) {
            $classes[] = 'header-img';
        }

	return $classes;
}
add_filter( 'body_class', 'actinia_body_classes' );

/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function actinia_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', bloginfo( 'pingback_url' ), '">';
	}
}
add_action( 'wp_head', 'actinia_pingback_header' );
