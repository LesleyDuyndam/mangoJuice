<?php

function mangoJuice_setup() {
    /*
     * Makes Twenty Thirteen available for translation.
     *
     * Translations can be added to the /languages/ directory.
     * If you're building a theme based on Twenty Thirteen, use a find and
     * replace to change 'mangoJuice' to the name of your theme in all
     * template files.
     */
    load_theme_textdomain( 'mangoJuice', get_template_directory() . '/languages' );

    // Adds RSS feed links to <head> for posts and comments.
    add_theme_support( 'automatic-feed-links' );

    // Switches default core markup for search form, comment form, and comments
    // to output valid HTML5.
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list' ) );

    // This theme uses wp_nav_menu() in one location.
    register_nav_menu( 'primary', __( 'Navigation Menu', 'mangoJuice' ) );

    /*
     * This theme supports all available post formats by default.
     * See http://codex.wordpress.org/Post_Formats
     */
//    add_theme_support( 'post-formats', array(
//        'aside', 'audio', 'chat', 'gallery', 'image', 'link', 'quote', 'status', 'video'
//    ) );
}
add_action( 'after_setup_theme', 'mangoJuice_setup' );

/**
 * Add thumbnail support
 */
if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' );
//    set_post_thumbnail_size( 800, 400, true );
}

/**
 * Set image sizes
 */
update_option('small_size_w', 300);
update_option('large_size_w', 1000);


/**
 * @param $slug
 * @return The url
 * Return the url of a category slug
 */
function mj_get_category_uri_slug( $slug )
{
    // Get the ID of a given category
    $category_id = get_cat_ID( $slug );

    // Get the URL of this category
    echo esc_url(get_category_link($category_id));
}


// Variable & intelligent excerpt length.
function mj_print_excerpt($length) { // Max excerpt length. Length is set in characters
    global $post;
    $text = $post->post_excerpt;
    if ( '' == $text ) {
        $text = get_the_content('');
        $text = apply_filters('the_content', $text);
        $text = str_replace(']]>', ']]>', $text);
    }
    $text = strip_shortcodes($text); // optional, recommended
    $text = strip_tags($text); // use ' $text = strip_tags($text,'<p><a>'); ' if you want to keep some tags

    $text = substr($text,0,$length);
    $excerpt = reverse_strrchr($text, '.', 1);
    if( $excerpt ) {
        echo apply_filters('the_excerpt',$excerpt);
    } else {
        echo apply_filters('the_excerpt',$text);
    }
}

// Returns the portion of haystack which goes until the last occurrence of needle
function reverse_strrchr($haystack, $needle, $trail) {
    return strrpos($haystack, $needle) ? substr($haystack, 0, strrpos($haystack, $needle) + $trail) : false;
}

/**
 * Registers one widget area.
 */
function mangoJuice_widgets_init() {
   register_sidebar( array(
        'name'          => 'Main sidebar',
        'id'            => "sidebar-1",
        'description'   => 'Main responsive sidebar',
        'class'         => '',
        'before_widget' => '<li>',
        'after_widget'  => '</li>',
        'before_title'  => '<h1>',
        'after_title'   => '</h1>',
   ) );
}

add_action( 'widgets_init', 'mangoJuice_widgets_init');




if ( ! function_exists( 'mangoJuice_paging_nav' ) ) :
    /**
     * Displays navigation to next/previous set of posts when applicable.
     */
    function mangoJuice_paging_nav() {
        global $wp_query;

        // Don't print empty markup if there's only one page.
        if ( $wp_query->max_num_pages < 2 )
            return;
        ?>
                <?php if ( get_next_posts_link() ) : ?>
                    <?php next_posts_link( __( 'Older posts', 'mangoJuice' ) ); ?>
                <?php endif; ?>

                <?php if ( get_previous_posts_link() ) : ?>
                    <?php previous_posts_link( __( 'Newer posts', 'mangoJuice' ) ); ?>
                <?php endif; ?>
    <?php
    }
endif;

if ( ! function_exists( 'mangoJuice_entry_meta' ) ) :
    /**
     * Prints HTML with meta information for current post: categories, tags, permalink, author, and date.
     *
     * Create your own mangoJuice_entry_meta() to override in a child theme.
     *
     * @since Twenty Thirteen 1.0
     *
     * @return void
     */
    function mangoJuice_entry_meta() {
        if ( is_sticky() && is_home() && ! is_paged() )
            echo '<span class="featured-post">' . __( 'Sticky', 'mangoJuice' ) . '</span>';

        if ( ! has_post_format( 'link' ) && 'post' == get_post_type() )
            mangoJuice_entry_date();

        // Translators: used between list items, there is a space after the comma.
        $categories_list = get_the_category_list( __( ', ', 'mangoJuice' ) );
        if ( $categories_list ) {
            echo '<span class="categories-links">' . $categories_list . '</span>';
        }

        // Translators: used between list items, there is a space after the comma.
        $tag_list = get_the_tag_list( '', __( ', ', 'mangoJuice' ) );
        if ( $tag_list ) {
            echo '<span class="tags-links">' . $tag_list . '</span>';
        }

        // Post author
        if ( 'post' == get_post_type() ) {
            printf( '<span class="author vcard"><a class="url fn n" href="%1$s" title="%2$s" rel="author">%3$s</a></span>',
                esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
                esc_attr( sprintf( __( 'View all posts by %s', 'mangoJuice' ), get_the_author() ) ),
                get_the_author()
            );
        }
    }
endif;


if ( ! function_exists( 'mangoJuice_entry_date' ) ) :
    /**
     * Prints HTML with date information for current post.
     *
     * Create your own mangoJuice_entry_date() to override in a child theme.
     *
     * @since Twenty Thirteen 1.0
     *
     * @param boolean $echo Whether to echo the date. Default true.
     * @return string The HTML-formatted post date.
     */
    function mangoJuice_entry_date( $echo = true ) {
        if ( has_post_format( array( 'chat', 'status' ) ) )
            $format_prefix = _x( '%1$s on %2$s', '1: post format name. 2: date', 'mangoJuice' );
        else
            $format_prefix = '%2$s';

        $date = sprintf( '<span class="date"><a href="%1$s" title="%2$s" rel="bookmark"><time class="entry-date" datetime="%3$s">%4$s</time></a></span>',
            esc_url( get_permalink() ),
            esc_attr( sprintf( __( 'Permalink to %s', 'mangoJuice' ), the_title_attribute( 'echo=0' ) ) ),
            esc_attr( get_the_date( 'c' ) ),
            esc_html( sprintf( $format_prefix, get_post_format_string( get_post_format() ), get_the_date() ) )
        );

        if ( $echo )
            echo $date;

        return $date;
    }
endif;


/**
 * Returns the URL from the post.
 *
 * @uses get_url_in_content() to get the URL in the post meta (if it exists) or
 * the first link found in the post content.
 *
 * Falls back to the post permalink if no URL is found in the post.
 *
 * @since Twenty Thirteen 1.0
 *
 * @return string The Link format URL.
 */
function mangoJuice_get_link_url() {
    $content = get_the_content();
    $has_url = get_url_in_content( $content );

    return ( $has_url ) ? $has_url : apply_filters( 'the_permalink', get_permalink() );
}

/**
 * Add styles and scripts
 */

function mangoJuice_add_styles() {
    // Register scripts
    wp_register_style('mangoJuice_main-css', get_stylesheet_directory_uri()  . '/css/main.css');

    // Add scripts
    wp_enqueue_style('mangoJuice_main-css');
}

add_action( 'wp_enqueue_scripts', 'mangoJuice_add_styles' );


function mangoJuice_add_scripts() {
    // Add Jquery
    if ( ! is_admin() ) {
        wp_enqueue_script( 'jquery' );
    }


    // Register scripts

    wp_register_script('mangoJuice_jq_device', get_stylesheet_directory_uri() . '/js/plugins/device.min.js', array(), "1.0.1", true);
    wp_register_script('mangoJuice_mailchimp', get_stylesheet_directory_uri() . '/js/mailchimp.login.js', array(), "1.0.1", true);
    wp_register_script('mangoJuice_main-script', get_stylesheet_directory_uri() . '/js/main.js', array(), "1.0.1", true);

    // Add scripts
    wp_enqueue_script( 'mangoJuice_jq_device');
    wp_enqueue_script( 'mangoJuice_mailchimp');
    wp_enqueue_script( 'mangoJuice_main-script', false, array( 'jquery' ));
}

//wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/example.js', array(), '1.0.0', true );

add_action( 'wp_enqueue_scripts', 'mangoJuice_add_scripts' );
