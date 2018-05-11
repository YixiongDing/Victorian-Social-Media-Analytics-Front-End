<?php
/**
 * Template for displaying search forms 
 *
 * @package Actinia
 *
 */
?>

<form role="search" method="get" class="search-form" autocomplete="off" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <label>
	<span class="screen-reader-text"><?php echo esc_html_x( 'Search for:', 'label', 'actinia' ); ?></span>
	<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'actinia' ); ?>" value="<?php echo get_search_query(); ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label', 'actinia' ); ?>" />
    </label>
    <input type="submit" class="search-submit" value=""><span class="screen-reader-text"><?php echo esc_html_x( 'Search', 'submit button', 'actinia' ); ?></span>
</form>