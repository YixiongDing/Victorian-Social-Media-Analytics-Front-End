<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Actinia
 */

if ( ! function_exists( 'actinia_posted_on' ) ) :
/**
 * Prints HTML with meta information for the current post-date/time and author.
 */
function actinia_posted_on() {
	$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
	if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
		$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
	}

	$time_string = sprintf( $time_string,
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() ),
		esc_attr( get_the_modified_date( 'c' ) ),
		esc_html( get_the_modified_date() )
	);

	$posted_on = sprintf(
                '<img src="%1$s/images/PNG/32/calendar.png" width="10%" height="10%" alt="%2$s"/><a href="%3$s" rel="bookmark">%4$s</a>',
                esc_url( get_template_directory_uri() ),
                esc_attr__( 'calendar', 'actinia' ),
                esc_url( get_permalink() ),                
                $time_string 
        );

	$byline = sprintf(
                '<img src="%1$s/images/PNG/32/user.png" width="10%" height="10%" alt="%2$s"/><span class="author vcard"><a class="url fn n" href="%3$s">%4$s</a></span>',
	        esc_url( get_template_directory_uri() ),
                esc_attr__( 'user', 'actinia' ),
                esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
                esc_html( get_the_author() )
        );

	echo '<span class="posted-on">' . $posted_on . '</span><span class="byline"> ' . $byline . '</span>'; // WPCS: XSS OK.

}
endif;

if ( ! function_exists( 'actinia_entry_footer' ) ) :
/**
 * Prints HTML with meta information for the categories, tags and comments.
 */
function actinia_entry_footer() {
	// Hide category and tag text for pages.
	if ( 'post' === get_post_type() ) {
		/* translators: space between list items */
		$categories_list = get_the_category_list( esc_html__( ' ', 'actinia' ) );
                $categories_icon = '<img src="' . esc_url( get_template_directory_uri() ) . '/images/PNG/32/folder.png" alt="' . esc_attr__( 'folder', 'actinia' ) . '"/>';
		if ( $categories_list && actinia_categorized_blog() ) {
			printf( '<span class="cat-links">' . esc_html( '%1$s %2$s' ) . '</span>', $categories_icon, $categories_list ); // WPCS: XSS OK.
		}

		/* translators: space between list items */
		$tags_list = get_the_tag_list( '', esc_html__( ' ', 'actinia' ) );
		$tag_icon = '<img src="' . esc_url( get_template_directory_uri() ) . '/images/PNG/32/tag.png" width="10%" height="10%" alt="' . esc_attr__( 'tag', 'actinia' ) . '"/>';
                if ( $tags_list ) {
			printf( '<span class="tags-links">' . esc_html( '%1$s %2$s' ) . '</span>', $tag_icon, $tags_list ); // WPCS: XSS OK.
		}
	}

	if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
		echo '<span class="comments-link">' . '<img src="' . esc_url( get_template_directory_uri() ) . '/images/PNG/32/speech_1.png" alt="' . esc_attr__( 'comments', 'actinia' ) . '"/>';
                
		/* translators: %s: post title */
		comments_popup_link( sprintf( wp_kses( __( 'Leave a Comment<span class="screen-reader-text"> on %s</span>', 'actinia' ), array( 'span' => array( 'class' => array() ) ) ), get_the_title() ), get_comments_number(), get_comments_number() );
		echo '</span>';
	}

	edit_post_link(
		sprintf(
			/* translators: %s: Name of current post */
			esc_html__( 'Edit %s', 'actinia' ),
			the_title( '<span class="screen-reader-text">"', '"</span>', false )
		),
		'<span class="edit-link"><img src="' . esc_url( get_template_directory_uri() ) .'/images/PNG/32/pen_1.png" alt="' . esc_attr__( 'edit', 'actinia' ) . '"/>',
		'</span>'
	);
}
endif;

/**
 * Returns true if a blog has more than 1 category.
 *
 * @return bool
 */
function actinia_categorized_blog() {
	if ( false === ( $all_the_cool_cats = get_transient( 'actinia_categories' ) ) ) {
		// Create an array of all the categories that are attached to posts.
		$all_the_cool_cats = get_categories( array(
			'fields'     => 'ids',
			'hide_empty' => 1,
			// We only need to know if there is more than one category.
			'number'     => 2,
		) );

		// Count the number of categories that are attached to the posts.
		$all_the_cool_cats = count( $all_the_cool_cats );

		set_transient( 'actinia_categories', $all_the_cool_cats );
	}

	if ( $all_the_cool_cats > 1 ) {
		// This blog has more than 1 category so actinia_categorized_blog should return true.
		return true;
	} else {
		// This blog has only 1 category so actinia_categorized_blog should return false.
		return false;
	}
}

/**
 * Flush out the transients used in actinia_categorized_blog.
 */
function actinia_category_transient_flusher() {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	// Like, beat it. Dig?
	delete_transient( 'actinia_categories' );
}
add_action( 'edit_category', 'actinia_category_transient_flusher' );
add_action( 'save_post',     'actinia_category_transient_flusher' );
