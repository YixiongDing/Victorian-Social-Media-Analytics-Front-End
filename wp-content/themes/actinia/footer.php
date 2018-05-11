<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Actinia
 */

?>

	</div><!-- #content -->
        
        <?php if ( is_active_sidebar( 'footer-widget-area' ) && ! ( is_404() ) ): ?>
            <aside id="footer-widget-area" class="widget-area-2">
                <?php dynamic_sidebar( 'footer-widget-area' ); ?>
            </aside><!-- #secondary -->
        <?php endif; ?>

	<footer id="colophon" class="site-footer">
	    <div class="site-info">
                <?php /* translators: %s: WordPress */ ?>
		<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'actinia' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'actinia' ), 'WordPress' ); ?></a>
		<span class="sep"> | </span>
                <?php /* translators: theme name */ ?>
		<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'actinia' ), 'actinia', 'green_onion' ); ?>
	    </div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
