<?php
/**
 * Actinia functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Actinia
 */

if ( ! function_exists( 'actinia_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function actinia_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Actinia, use a find and replace
	 * to change 'actinia' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'actinia', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );
        
        //add_image_size('actinia_thumb', $width, $height, $crop)

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'actinia' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'actinia_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'actinia_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function actinia_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'actinia_content_width', 640 );
}
add_action( 'after_setup_theme', 'actinia_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function actinia_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Primary Widget Area', 'actinia' ),
		'id'            => 'sidebar-primary',
		'description'   => esc_html__( 'Add widgets here.', 'actinia' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
        
        register_sidebar( array(
		'name'          => esc_html__( 'Footer Widget Area', 'actinia' ),
		'id'            => 'footer-widget-area',
		'description'   => esc_html__( 'Add widgets here.', 'actinia' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'actinia_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function actinia_scripts() {
	wp_enqueue_style( 'actinia-style', get_stylesheet_uri() );
        
        wp_enqueue_style( 'actinia-googlefonts', 'https://fonts.googleapis.com/css?family=Raleway:300,400', false );
        
	wp_enqueue_script( 'actinia-navigation', get_template_directory_uri() . '/js/navigation.js', array( 'jquery' ), '20151215', true );
        
        wp_enqueue_script( 'actinia-custom-classes', get_template_directory_uri() . '/js/custom-classes.js', array( 'jquery' ), '20151215', true );

	wp_enqueue_script( 'actinia-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	wp_enqueue_script( 'actinia-tables', get_template_directory_uri() . '/js/tables.js', array( 'jquery' ), '20151215', true );
        
        if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'actinia_scripts' );

if ( ! function_exists( 'actinia_vertical_check' ) ) {
    function actinia_vertical_check( $html, $post_id, $post_thumbnail_id, $size, $attr ) {
        
        $image_data = wp_get_attachment_image_src( $post_thumbnail_id, 'large' );
		//Get the image width and height from the data provided by wp_get_attachment_image_src()
        $width  = $image_data[1];
        $height = $image_data[2];
        
        if ( $height > $width ) {
	    $html = str_replace( 'attachment-', 'vertical-image attachment-', $html );
            //$html = str_replace( 'height="150', 'height="' . $height, $html);
	}
        
        return $html;
    }
}

add_filter( 'post_thumbnail_html', 'actinia_vertical_check', 10, 5);

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

function actinia_excerpt_more( $more ) {
    return sprintf( ' <a href="' . esc_url( get_permalink() ) . '" class="more-link">%s</a>', esc_html__( 'more', 'actinia' ) );
}

add_filter( 'excerpt_more', 'actinia_excerpt_more' );

if (! function_exists( 'actinia_edit_comment_link' ) ) {
    function actinia_edit_comment_link( $link ) {
        $link = '<a class="comment-edit-link" href="' . esc_url( get_edit_comment_link( get_comment() ) ) .
            '"><img src="' . get_template_directory_uri() . '/images/PNG/32/pen_1.png" /></a>';
        return $link;
    }
}

add_filter( 'edit_comment_link', 'actinia_edit_comment_link' );

function actinia_comment_form_field_comment() {
    return '<p class="comment-form-comment"><textarea id="comment" name="comment" cols="45" rows="8" maxlength="65525" aria-required="true" required="required"></textarea></p>';
}
add_filter( 'comment_form_field_comment', 'actinia_comment_form_field_comment' );

function actinia_remove_forced_spaces( $content ) { 
    $string = htmlentities( $content, null, 'utf-8' ); 
    $content = str_replace( '&nbsp;', ' ', $string ); 
    $content = html_entity_decode( $content ); 
    return $content;     
} 

add_filter( 'the_content', 'actinia_remove_forced_spaces', 9 );
