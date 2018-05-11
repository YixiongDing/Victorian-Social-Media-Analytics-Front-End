<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Actinia
 */

if ( ! is_active_sidebar( 'sidebar-primary' ) || is_404() ) {
	return;
}
?>

<aside id="secondary" class="widget-area-1">
	<?php dynamic_sidebar( 'sidebar-primary' ); ?>
</aside><!-- #secondary -->
