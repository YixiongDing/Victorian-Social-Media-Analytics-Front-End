<?php
/**
 * Template part for displaying results in search pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Actinia
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
        </header><!-- .entry-header -->
        
		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
	            <?php actinia_posted_on(); ?>
                    <footer class="entry-footer">
                        <?php actinia_entry_footer(); ?>
                    </footer><!-- .entry-footer -->
		</div><!-- .entry-meta -->
		<?php endif; ?>
	
	<div class="entry-summary">
            <?php if ( has_post_thumbnail()):
                the_post_thumbnail();
            endif; ?>
	    <?php if ( is_singular() || in_array( 'sticky', get_post_class() ) || get_post_format() == 'image' || get_post_format() == 'aside' || 
            get_post_format() == 'status' || get_post_format() == 'link' || get_post_format() == 'quote' ):
                the_content();
            elseif ( str_word_count( get_the_content() ) < 50 ):
                the_content();
            else:
                the_excerpt();
            endif; ?>
	</div><!-- .entry-summary -->
        
        <?php if ( ( 'page' === get_post_type() ) && ( get_edit_post_link() ) ) : ?>
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
