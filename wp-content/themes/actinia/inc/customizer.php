<?php
/**
 * Actinia Theme Customizer.
 *
 * @package Actinia
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function actinia_customize_register( $wp_customize ) { 
    
    $wp_customize->get_section( 'colors' )->description = esc_html__(
        'Here you can pick a ready-made color scheme or create your own color palette:', 
        'actinia'
    );
      
    $wp_customize->add_setting( 'actinia_color_scheme', 
        array(
            'default' => 'red',
            'capability'     => 'edit_theme_options',
            'transport' => 'postMessage',
            'sanitize_callback' => 'actinia_sanitize_select',
    ) );
        
    $wp_customize->add_control( 'actinia_color_scheme', 
        array(
            'label' => esc_html__( 'Color Schemes', 'actinia' ),
            'section' => 'colors',
            'settings' => 'actinia_color_scheme',
            'priority' => 1,
            'type' => 'select',
            'choices' => array(
                'red' => esc_html__( 'Red and Black', 'actinia' ),
                'green' => esc_html__( 'Green and Red', 'actinia' ),
                'orange' => esc_html__( 'Orange and Cyan', 'actinia' ),
                'magenta' => esc_html__( 'Dark Magenta and Green', 'actinia' ),
                'blue' => esc_html__( 'Blue and Orange', 'actinia' ),
                'dark_pink' => esc_html__( 'Dark Pink and Green', 'actinia' ),
            ),
        ) );     
        
       
    $wp_customize->add_setting( 'actinia_primary_color_a', array(
        'default' => '#ba2a2a',
        'capability'     => 'edit_theme_options',
        'transport' => 'postMessage',
        'sanitize_callback' => 'actinia_sanitize_hex_color',
    ) );
        
    $wp_customize->add_control( 
        new WP_Customize_Color_Control(
            $wp_customize, 'actinia_primary_color_a', array(
                'label' => esc_html__( 'Primary Color A', 'actinia' ),
                'section' => 'colors',
                'settings' => 'actinia_primary_color_a',
            )
    ) );
        
    $wp_customize->add_setting( 'actinia_primary_color_b', array(
        'default' => '#e3a9a9',
        'capability'     => 'edit_theme_options',
        'transport' => 'postMessage',
        'sanitize_callback' => 'actinia_sanitize_hex_color',
    ) );
        
    $wp_customize->add_control( 
        new WP_Customize_Color_Control(
            $wp_customize, 'actinia_primary_color_b', array(
                'label' => esc_html__( 'Primary Color B', 'actinia' ),
                'section' => 'colors',
                'settings' => 'actinia_primary_color_b',
            )
    ) );
        
    $wp_customize->add_setting( 'actinia_secondary_color_a', 
        array(
            'default' => '#000',
            'capability'     => 'edit_theme_options',
            'transport' => 'postMessage',
            'sanitize_callback' => 'actinia_sanitize_hex_color',
        )
    );
        
    $wp_customize->add_control( new WP_Customize_Color_Control(
        $wp_customize, 'actinia_secondary_color_a', array(
            'label' => esc_html__( 'Secondary Color A', 'actinia' ),
            'section' => 'colors',
            'settings' => 'actinia_secondary_color_a'
        )
    ) );
        
    $wp_customize->add_setting( 'actinia_secondary_color_b', 
        array(
            'default' => '#666',
            'capability'     => 'edit_theme_options',
            'transport' => 'postMessage',
            'sanitize_callback' => 'actinia_sanitize_hex_color',
        ) 
    );
        
    $wp_customize->add_control( new WP_Customize_Color_Control(
        $wp_customize, 'actinia_secondary_color_b', array(
            'label' => esc_html__( 'Secondary Color B', 'actinia' ),
            'section' => 'colors',
            'settings' => 'actinia_secondary_color_b'
        ))
    );
    
    $wp_customize->add_setting( 'actinia_color_sticky', 
        array(
            'default' => '#666',
            'capability'     => 'edit_theme_options',
            'transport' => 'postMessage',
            'sanitize_callback' => 'actinia_sanitize_hex_color',
        ) 
    );
        
    $wp_customize->add_control( new WP_Customize_Color_Control(
        $wp_customize, 'actinia_color_sticky', array(
            'label' => esc_html__( 'Sticky Color', 'actinia' ),
            'section' => 'colors',
            'settings' => 'actinia_color_sticky',
            'description' => esc_html__( 'Header and Border Color of Sticky Posts', 'actinia' ),
        ))
    );  
    
    $wp_customize->add_setting( 'actinia_tagline_color', array(
        'default' => '#8a8a8a',
        'capability'     => 'edit_theme_options',
        'transport' => 'postMessage',
        'sanitize_callback' => 'actinia_sanitize_hex_color',
    ) );
    
    $wp_customize->add_control( 
        new WP_Customize_Color_Control(
            $wp_customize, 'actinia_tagline_color', array(
                'label' => esc_html__( 'Tagline Color', 'actinia' ),
                'section' => 'colors',
                'settings' => 'actinia_tagline_color',
            )
    ) );
        
    $wp_customize->add_section('actinia_layout_options', 
        array( 
            'title' => esc_html__( 'Layout Options', 'actinia' ),
            'priority' => 105,
        )
    );
    
    $wp_customize->add_setting('actinia_navbar_position', 
        array(
            'default' => 'top',
            'capability'     => 'edit_theme_options',
            'transport' => 'postMessage',
            'sanitize_callback' => 'actinia_sanitize_select',
        )
    );
        
    $wp_customize->add_control( 'actinia_navbar_position', 
        array(
            'label' => esc_html__( 'Navigation Bar Position', 'actinia' ),
            'section' => 'actinia_layout_options',
            'type' => 'select',
            'settings' => 'actinia_navbar_position',
            'active_callback' => 'actinia_has_navbar',
            'choices' => array(
                'top' => esc_html__( 'Horizontal Navigation Bar', 'actinia' ),
                'side' => esc_html__( 'Vertical Navigation Bar', 'actinia' ),
            ),
        )
    );
    
    $wp_customize->add_setting( 'actinia_sidebar_position', array(
        'default' => 'right',
        'capability'     => 'edit_theme_options',
        'transport' => 'postMessage',
        'sanitize_callback' => 'actinia_sanitize_select',
    ));
    
    $wp_customize->add_control( 'actinia_sidebar_position', array(
        'label' => esc_html__( 'Sidebar Position', 'actinia' ),
        'section' => 'actinia_layout_options',
        'type' => 'select',
        'settings' => 'actinia_sidebar_position',
        'active_callback' => 'actinia_has_widgets',
        'choices' => array(
            'left' => esc_html__( 'Left Sidebar', 'actinia' ),
            'right' => esc_html__( 'Right Sidebar', 'actinia' ),
        ),
    ));
    
    $wp_customize->add_setting( 'actinia_post_meta_position', array(
        'default' => 'left',
        'capability'     => 'edit_theme_options',
        'transport' => 'postMessage',
        'sanitize_callback' => 'actinia_sanitize_select',
    ));
        
    $wp_customize->add_control( 'actinia_post_meta_position', array(
        'label' => esc_html__( 'Post Meta Data Position', 'actinia' ),
        'description' => esc_html__( 'Position of post meta data (the author of the post, the date the post was published, its tags and/or categories)', 'actinia' ),
        'section' => 'actinia_layout_options',
        'type' => 'select',
        'settings' => 'actinia_post_meta_position',
        'choices' => array(
            'left' => esc_html__( 'Left Meta Data', 'actinia' ),
            'top' => esc_html__( 'Top Meta Data', 'actinia' ),
        ),
    )); 
       
    $wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
    $wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
    $wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
     
}
add_action( 'customize_register', 'actinia_customize_register' );

function actinia_has_widgets() {
    return is_active_sidebar( 'sidebar-primary' );
}

function actinia_has_navbar() {
    $has_items = false;
    if ( has_nav_menu('primary') ) {
        $menu_locations = get_nav_menu_locations();
        $menu = get_term($menu_locations['primary'], 'nav_menu')->name;
        $has_items = count(wp_get_nav_menu_items($menu));
    }
    return (bool)$has_items;
}


function actinia_color_schemes() {
    
    return array(
        'red' => array(
            'actinia_primary_color_a' => '#ba2a2a',
            'actinia_primary_color_b' => '#e3a9a9',
            'actinia_secondary_color_a' => '#000', 
            'actinia_secondary_color_b' => '#666',
            'actinia_color_sticky' => '#4c4c4c',
            'actinia_tagline_color' => '#8a8a8a',
        ),
        'green' => array(
            'actinia_primary_color_a' => '#0d915e',
            'actinia_primary_color_b' => '#64c8a2',            
            'actinia_secondary_color_a' => '#c63f24', 
            'actinia_secondary_color_b' => '#c66551',
            'actinia_color_sticky' => '#7a3426',
            'actinia_tagline_color' => '#8a8a8a',
        ),
        'orange' => array(
            'actinia_primary_color_a' => '#A64B00',
            'actinia_primary_color_b' => '#FF9640',            
            'actinia_secondary_color_a' => '#0C6363', 
            'actinia_secondary_color_b' => '#78CCCC',
            'actinia_color_sticky' => '#6A9999',
            'actinia_tagline_color' => '#8a8a8a',
        ),
        'magenta' => array(
            'actinia_primary_color_a' => '#9b409b',
            'actinia_primary_color_b' => '#cd8bcd',
            'actinia_secondary_color_a' => '#3c7a1b', 
            'actinia_secondary_color_b' => '#52c612',
            'actinia_color_sticky' => '#3c7a1b',
            'actinia_tagline_color' => '#8a8a8a',
        ),
        'blue' => array(
            'actinia_primary_color_a' => '#0775a0',
            'actinia_primary_color_b' => '#62b1cf',
            'actinia_secondary_color_a' => '#fe8400', 
            'actinia_secondary_color_b' => '#ffbc73',
            'actinia_color_sticky' => '#bf7a30',
            'actinia_tagline_color' => '#8a8a8a',
        ),
        'dark_pink' => array(
            'actinia_primary_color_a' => '#85004b',
            'actinia_primary_color_b' => '#e667af',
            'actinia_secondary_color_a' => '#679b00', 
            'actinia_secondary_color_b' => '#b9f73e',
            'actinia_color_sticky' => '#86b32d',
            'actinia_tagline_color' => '#8a8a8a',
        ),
    );    
}

function actinia_generate_declaration( $el, $prop, $val ) {
    return sprintf( "%s {\n %s: %s;\n}\n", $el, $prop, $val );
}

function actinia_generate_rule( $el, $prop, $val, $media_query = 0, $link_states = 0, $after_link = 0, $gradient = 0 ) {
    
    if ( ! empty( $after_link ) && empty( $link_states ) ) {
        $el = $el . $after_link;
    }
    
    if ( ! empty( $gradient ) && empty( $link_states ) ) {
        $rule = actinia_generate_gradient($gradient['top'], $gradient['bottom']);
        $rule = $el . '{ ' . $rule . '}';
  
    } elseif ( ! empty( $link_states) ) { 
        $rule = '';
        foreach ($link_states as $state) {
            $link = $el . ':' . $state;
            
            if ( ! empty( $after_link ) ) {
                $link = $link . $after_link;
            }
            if ( ! empty( $gradient ) ) {
                $declaration = actinia_generate_gradient($gradient['top'], $gradient['bottom']);
                $rule .= $link . '{ ' . $declaration . '}' . "\n";
            } else {
                $rule .= actinia_generate_declaration($link, $prop, $val);
            }
        }
    } else {
        $rule = actinia_generate_declaration($el, $prop, $val);
    }
            
    if ( ! empty( $media_query) ) {
        $rule = sprintf("@media only screen and (min-width: %spx) { %s}\n", $media_query, $rule);
    }    
    
    return $rule;
}

//get an array of color controls and their values according to the picked color scheme
function actinia_set_colors() {
    $colors = array();
    //retrieve color controls names and save them as indices of an associative array
    $actinia_color_scheme = actinia_color_schemes();
    foreach ( $actinia_color_scheme['red'] as $color => $val ) {
        $colors[$color] = '';
    }
    $active_color_scheme = esc_attr( get_theme_mod( 'actinia_color_scheme', 'red' ) );    
    $color_schemes = actinia_color_schemes();
    //if color picker values were modified, assign the new values to color settings. 
    //otherwise assign to color settings the default values of a current color scheme
    foreach( $colors as $color => $val ) {
        if ( $color_schemes[$active_color_scheme][$color] == esc_attr( get_theme_mod($color) ) ) {
            $colors[$color]  = $color_schemes[$active_color_scheme][$color];
        } else {
            $colors[$color] = esc_attr( get_theme_mod($color) );
        }
    }     
    return $colors;
}

function actinia_generate_gradient( $top_val, $bottom_val ) {            
    $gradient =  "background: $top_val;\n"; 
    $gradient .= "background: -webkit-linear-gradient($top_val, $bottom_val);\n"; 
    $gradient .= "background: -o-linear-gradient($top_val, $bottom_val);\n";
    $gradient .= "background: -moz-linear-gradient($top_val, $bottom_val);\n";
    $gradient .= "background: linear-gradient($top_val, $bottom_val);\n";
    return $gradient;
}

function actinia_elements() {
    
    $colors = actinia_set_colors();
    extract( actinia_recurring_elements() );
 
    $rules = array(
        array(
            'name' => '.site-title a:link, .site-title a:visited',
            'props' => array(
                'color' => $colors['actinia_primary_color_a']
            ),
        ),
         array(
            'name' => '.site-description',
            'props' => array(
                'color' => $colors['actinia_tagline_color']
            ),
        ),
        array(
            'name' => 'article:not(.sticky)',
            'props' => array(
                'border-color' => $colors['actinia_primary_color_a']
            ),
        ),
         array(
            'name' => 'article.sticky',
            'props' => array(
                'border-color' => $colors['actinia_color_sticky']
            ),
        ),
        array(
            'name' => 'article:not(.sticky) .entry-header',
            'props' => array(
                'gradient' => array(
                    'top' => $colors['actinia_primary_color_a'],
                    'bottom' => $colors['actinia_primary_color_b'],
                ), 
            ),           
        ),
        
        array(
            'name' => '.single-attachment article .entry-header',
            'props' => array(
                'background' => 'transparent',
            )
        ),
        array(
            'name' => '.site-title',
            'props' => array(
                'border-color' => $colors['actinia_primary_color_a'],
            ),
        ),
        array(
            'name' => '.site-title a',
            'link_states' => array( 'link', 'visited' ),
            'props' => array(
                'color' => $colors['actinia_primary_color_a'],
            ),
        ),
        array(
            'name' => 'button.menu-toggle',
            'props' => array(
                'gradient' => array(
                    'top' => $colors['actinia_primary_color_a'],
                    'bottom' => $colors['actinia_primary_color_b'],
                ), 
            ),
        ),
        array(
            'name' => '.main-navigation a',
            'link_states' => array( 'hover', 'focus', 'active'),
            'props' => array(
                'color' => $colors['actinia_primary_color_a'],
            ),
        ),
        array(
            'name' => '.main-navigation a',
            'media_query' => 768,
            'link_states' => array( 'link', 'visited' ),
            'props' => array(
                'gradient' => array(
                    'top' => $colors['actinia_secondary_color_a'],
                    'bottom' => $colors['actinia_secondary_color_b'],
                ), 
            ),
        ),
        array(
            'name' => '.main-navigation a',
            'media_query' => 768,
            'link_states' => array( 'hover', 'focus', 'active' ),
            'props' => array(
                'background' => '#fff', 
            ),
        ),
        array(
            'name' => '.main-navigation ul ul a',
            'media_query' => 768,
            'link_states' => array( 'hover', 'focus', 'active'),
            'props' => array(
                'color' => $colors['actinia_primary_color_a'],
            ),
        ),
        array(
            'name' => '.main-navigation a',
            'link_states' => array( 'hover', 'focus', 'active'),
            'after_link' => '>.dropdown-toggle:after',
            'props' => array(
                'color' => $colors['actinia_primary_color_a'],
            ),
        ),
        array(
            'name' => '.main-navigation ul ul a',
            'media_query' => 768,
            'link_states' => array('hover', 'focus', 'active' ),
            'after_link' => '>.dropdown-toggle:after',
            'props' => array(
                'color' => $colors['actinia_primary_color_a'],
            ),
        ),
        array(
            'name' => 'a.more-link',
            'link_states' => array( 'link', 'visited' ),
            'props' => array(
                'border-color' => $colors['actinia_primary_color_a'],
                'color' => $colors['actinia_primary_color_a'],
            )
        ),
        array(
            'name' => 'a.comment-reply-link',
            'props' => array(
                'color' => $colors['actinia_primary_color_a'],
            )
        ),
        array(
            'name' => '.pingback a',
            'link_states' => array( 'link', 'visited' ),
            'props' => array(
                'color' => $colors['actinia_primary_color_a'],
            ),
        ),
        array(
            'name' => '.pingback a',
            'link_states' => array( 'hover', 'focus', 'active' ),
            'props' => array(
                'color' => '#ccc',
            ),
        ),
        array(
            'name' => '.sticky .entry-header a',
            'link_states' => array('link', 'visited', 'hover', 'focus', 'active'),
            'props' => array(
                'color' => $colors['actinia_color_sticky'],
            ),
        ),
        array(
            'name' => 'input[type="submit"]',
            'props' => array(
                'gradient' => array(
                    'top' => $colors['actinia_secondary_color_a'],
                    'bottom' => $colors['actinia_secondary_color_b'],
                ), 
            ),
        ),
        array(
            'name' => 'input[type="submit"]',
            'link_states' => array( 'hover', 'focus', 'active' ),
            'props' => array(
                'gradient' => array(
                    'top' => $colors['actinia_secondary_color_b'],
                    'bottom' => $colors['actinia_secondary_color_a'],
                ),
            ),
        )
    );
    
    foreach ( $current_items as $item ) {
        $rules[] = array(
            'name' => $item,
            'link_states' => array( 'link', 'visited' ),
            'props' => array(
                'color' => $colors['actinia_primary_color_a'],
            )
        );
        $rules[] = array(
            'name' => $item,
            'props' => array(
                'color' => $colors['actinia_primary_color_a'],
            ),
            'after_link' => ' .dropdown-toggle:after',
        );
    }
    
    $current_items = array_slice($current_items, 0, 4);
    
    foreach ( $current_items as $item ) {
        $rules[] = array(
            'name' => $item,
            'media_query' => 768,
            'link_states' => array( 'link', 'visited' ),
            'props' => array(
                'background' => $colors['actinia_primary_color_a'],
                'color' => '#fff',
            )
        );
        $rules[] = array(
            'name' => $item,
            'media_query' => 768,
            'props' => array(
                'color' => '#fff',    
            ),
            'after_link' => ' .dropdown-toggle:after',
        );
    }
    
    foreach ( $nav_links as $nav ) {
        $rules[] = array(
            'name' => $nav . ' .nav-previous a',
            'props' => array(
                'gradient' => array(
                    'top' => $colors['actinia_primary_color_a'],
                    'bottom' => $colors['actinia_primary_color_b'],
                ), 
            ),
        );
        
        $rules[] = array(
            'name' => $nav . ' .nav-previous a',
            'link_states' => array( 'hover', 'focus', 'active' ),
            'props' => array(
                'gradient' => array(
                    'top' => $colors['actinia_primary_color_b'],
                    'bottom' => $colors['actinia_primary_color_a'],
                ),
            ),
        );
        $rules[] = array(
            'name' => $nav . ' .nav-next a',
            'props' => array(
                'gradient' => array(
                    'top' => $colors['actinia_secondary_color_a'],
                    'bottom' => $colors['actinia_secondary_color_b'],
                ), 
            ),
        );
        
        $rules[] = array(
            'name' => $nav . ' .nav-next a',
            'link_states' => array( 'hover', 'focus', 'active' ),
            'props' => array(
                'gradient' => array(
                    'top' => $colors['actinia_secondary_color_b'],
                    'bottom' => $colors['actinia_secondary_color_a'],
                ),
            ),
        );
    }
    
    foreach ( $widgets as $widget ) {
        $rules[] = array(
            'name' => $widget . ' .widget-title',
            'props' => array(
                'color' => $colors['actinia_primary_color_a'], 
                'border-color' => $colors['actinia_primary_color_a'], 
            ),
        );
        $rules[] = array(
            'name' => $widget . ' .widgettitle',
            'props' => array(
                'color' => $colors['actinia_primary_color_a'], 
                'border-color' => $colors['actinia_primary_color_a'], 
            ),
        );
        $rules[] = array(
            'name' => $widget . ' a',
            'link_states' => array( 'hover', 'focus', 'active' ),
            'props' => array(
                'color' => $colors['actinia_primary_color_a'], 
            ),
        );
        $rules[] = array(
            'name' => '.widget-area-1 ' . $widget . ' a',
            'link_states' => array( 'hover', 'focus', 'active' ),
            'props' => array(
                'color' => $colors['actinia_primary_color_a'], 
            ),
        );
    }
    
    return $rules;
}

function actinia_recurring_elements() {
    return array(
        'current_items' => array(
            '.main-navigation #primary-menu > .current_page_item > a', 
            '.main-navigation #primary-menu > .current-menu-item > a',
            '.main-navigation #primary-menu > .current_page_ancestor > a',
            '.main-navigation #primary-menu > .current-menu-ancestor > a',
            '.main-navigation #primary-menu .current_page_item > a',
            '.main-navigation #primary-menu .current-menu-item > a'
        ),
        'widgets' => array(
            '.widget.widget_tag_cloud', 
            '.widget.widget_archive', 
            '.widget.widget_categories', 
            '.widget.widget_nav_menu', 
            '.widget.widget_meta', 
            '.widget.widget_recent_comments', 
            '.widget.widget_recent_entries', 
            '.widget.widget_pages'
        ),
        'nav_links' => array(
            '.comment-navigation', 
            '.posts-navigation', 
            '.post-navigation', 
            '.image-navigation'
        ),
    );
}

function actinia_colors_generate_css() {
    $custom_css = '';
    $color_scheme = esc_attr( get_theme_mod( 'actinia_color_scheme' ) );
    if ( ! empty( $color_scheme ) ) :
        foreach( actinia_elements() as $el ) { 
            $media_query = isset( $el['media_query'] )? $el['media_query'] : 0;
            $link_states = isset( $el['link_states'] )? $el['link_states'] : 0;
            $after_link = isset( $el['after_link'] )? $el['after_link'] : 0;
            $gradient = isset( $el['props']['gradient'] )? $el['props']['gradient'] : 0;

            foreach( $el['props'] as $prop => $val ) {                
                $rule = actinia_generate_rule($el['name'], $prop, $val, $media_query, $link_states, $after_link, $gradient);
                $custom_css .= $rule . "\n";
            }    
        }
    endif;
    
    wp_add_inline_style( 'actinia-style', $custom_css );            
}

add_action( 'wp_enqueue_scripts', 'actinia_colors_generate_css' );


function actinia_sanitize_select( $input, $setting ) {    
    $input = sanitize_key( $input );    
    $choices = $setting->manager->get_control($setting->id)->choices;    
    return ( array_key_exists( $input, $choices )? $input: $setting->default );    
}

function actinia_sanitize_hex_color($color) {
    return sanitize_hex_color($color);
}

function actinia_sanitize_checkbox( $input ) { 
    return ( ( isset( $input ) && true == $input ) ? true : false );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function actinia_customize_preview_js() {
	wp_enqueue_script( 'actinia_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'actinia_customize_preview_js' );
