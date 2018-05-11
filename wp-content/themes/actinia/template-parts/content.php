<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Actinia
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
	
                <?php $title = get_the_title();
		if ( isset( $title ) && ! empty( $title ) ):                     
               
                    if ( is_singular() ) :
                            the_title( '<h2 class="entry-title">', '</h2>' );
                    else :
                            the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
                    endif; 
                 endif; ?>

	</header><!-- .entry-header -->
        
        <?php if ( 'post' === get_post_type() ) : ?>
        
            <div class="entry-meta">
		<?php actinia_posted_on(); ?>
                <footer class="entry-footer">
                    <?php actinia_entry_footer(); ?>
                </footer><!-- .entry-footer -->
            </div><!-- .entry-meta -->           
            
	<?php endif; ?>

	<div class="entry-content">
		<!--Post Thumbnail Linking to large Image Size:-->
            <?php if ( has_post_thumbnail()):
                the_post_thumbnail();
            endif;
           
            if ( is_singular() || in_array( 'sticky', get_post_class() ) || get_post_format() == 'image' || get_post_format() == 'aside' || 
            get_post_format() == 'status' || get_post_format() == 'link' || get_post_format() == 'quote' ):
                the_content();
            elseif ( str_word_count( get_the_content() ) < 100 ):
                the_content();
            else:
                the_excerpt();
            endif;

	    wp_link_pages( array(
                'before' => '<div class="page-links">',                
		'after'  => '</div>',
                'link_before' => '<span>',
                'link_after'  => '</span>'
            ) );
	?>
	</div><!-- .entry-content -->
        <div class="clearfix"></div>
</article><!-- #post-## -->
