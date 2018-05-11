<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Actinia
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', get_post_format() );

			the_post_navigation( array(
                            'prev_text' => sprintf('%1$s <span class="nav-direction">%2$s</span><span class="nav-title">%3$s</span>', esc_html__( '&lt;&lt;', 'actinia' ), esc_html__( 'Previous Post', 'actinia' ), '%title' ),
                            'next_text' => sprintf( '<span class="nav-direction">%1$s</span><span class="nav-title">%2$s</span> %3$s', esc_html__( 'Next Post', 'actinia' ), '%title', esc_html__( '&gt;&gt;', 'actinia' ) )
                        ) );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar(); ?>
        
<a href="#masthead" class="anchor"></a>

<?php get_footer(); ?>
