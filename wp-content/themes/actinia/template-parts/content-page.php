<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Actinia
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
             <?php $title = get_the_title();
		if ( isset( $title ) && ! empty( $title ) ): ?>		
		    <?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
                <?php endif; ?>
	</header><!-- .entry-header -->
        
        <?php $article_content = get_the_content();
	if ( isset( $article_content ) && ! empty( $article_content ) ): ?>
	<div class="entry-content">
            <?php if ( has_post_thumbnail()):
               the_post_thumbnail();
            endif; ?>
		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">',
				'after'  => '</div>',
                                'link_before' => '<span>',
	                        'link_after'  => '</span>'
			) );
		?>
	</div><!-- .entry-content -->
        <?php endif; ?>

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
				edit_post_link(
					sprintf(
						/* translators: %s: Name of current post */
						'<img src="' . get_template_directory_uri() . '/images/PNG/32/pen_1.png"/>' . esc_html__( 'Edit %s', 'actinia' ),
						the_title( '<span class="screen-reader-text">"', '"</span>', false )
					),
					'<span class="edit-link">',
					'</span>'
				);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
    <div class="clearfix"></div>
</article><!-- #post-## -->
