<?php
 /**
 * 
 *
 * @package Actinia
 


 * Set up the WordPress core custom header feature.
 *
 * @uses actinia_header_style()
 */

function actinia_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'actinia_custom_header_args', array(
		'default-image'          => '',
		'default-text-color'     => '000000',
                'flex-height'            => true,
                'flex-width'             => true,
                'height'                 => 200,
		'wp-head-callback'       => 'actinia_header_style',
	) ) );
}
add_action( 'after_setup_theme', 'actinia_custom_header_setup' );

if ( ! function_exists( 'actinia_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog.
 *
 * @see actinia_custom_header_setup().
 */
function actinia_header_style() {
	$header_text_color = get_header_textcolor(); ?>
	
	<style type="text/css">
	<?php
		// Has the text been hidden?
		if ( ! display_header_text() ) :
	?>
		.site-title,
		.site-description {
			position: absolute;
			clip: rect(1px, 1px, 1px, 1px);
		}
	<?php
		// If the user has set a custom color for the text use that.
		else :
	?>      .site-title {
                    border-color: #<?php echo esc_attr( $header_text_color ); ?>;
                }
		.site-title a:link, .site-title a:visited {
			color: #<?php echo esc_attr( $header_text_color ); ?>;
		}
	<?php endif; ?>
	</style>
	<?php
}
endif;
