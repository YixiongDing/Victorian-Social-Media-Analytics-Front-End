<?php
/*The template for displaying image attachments
 * 
 * @package Actinia
 * 
 */

get_header(); ?>

<div id="primary" class="content-area"><!-- .content-->
    <main id="main" class="site-main">      
                
        <?php
            while ( have_posts() ) : the_post(); 
        ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    
                <header class="entry-header">
                        <?php $title = get_the_title();
		            if ( isset( $title ) && ! empty( $title ) ): 
                                the_title( '<h1 class="entry-title">', '</h1>' );
                            endif; ?>
                </header><!-- .entry-header -->

                <div class="entry-content">
                    <figure class="entry-attachment">
                        <p class="attachment-img">
                            <?php echo wp_get_attachment_image( get_the_ID(), 'full' ); ?>
                        </p>
                        <figcaption class="wp-caption-text"
                                    ><?php the_excerpt(); ?></figcaption>
                    </figure><!--entry-attachment-->
                        
                    <?php the_content(); ?>
                    </div><!-- .entry-content -->                    

                </article>
        
                <nav class="image-navigation">
                    <div class="nav-links">
                        <div class="nav-previous previous-image"><?php previous_image_link( false, __( 'Previous Image', 'actinia' ) ); ?></div>
                        <div class="nav-next next-image"><?php next_image_link( false, __( 'Next Image', 'actinia' ) ); ?></div>
                        
                    </div>
                </nav><!--image navigation-->
        
                <?php // If comments are open or we have at least one comment, load up the comment template.
                    if ( comments_open() || get_comments_number() ) :
                        comments_template();
                    endif;                    
                    
            endwhile; // End of the loop.
        ?>

    </main><!-- #main -->
</div><!-- #primary -->

<?php get_sidebar(); ?>

<a href="#masthead" class="anchor"></a>

<?php get_footer(); ?>
