<?php

/**
 * Set up some basic theme information which loads after the theme is loaded
 */
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



    /*
     * Add thumbnail support
     */
    if ( function_exists( 'add_theme_support' ) ) {
        add_theme_support( 'post-thumbnails' );
//    set_post_thumbnail_size( 800, 400, true );
    }



    /*
     * Adds RSS feed links to <head> for posts and comments.
     */
    add_theme_support( 'automatic-feed-links' );



    /*
     * Switches default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list' ) );



    /*
    * Add support for different post-formats
    * 'aside', 'audio', 'chat', 'gallery', 'image', 'link', 'quote', 'status', 'video'
    */
    add_theme_support( 'post-formats', array(
//        'aside', 'audio', 'chat', 'gallery', 'image', 'link', 'quote', 'status', 'video'
    ) );



}

// Fires after the theme is loaded.
add_action( 'after_setup_theme', 'mangoJuice_setup' );










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










/*
 * Set image sizes
 */
update_option('small_size_w', 300);
update_option('large_size_w', 1000);










/*
 * This theme uses wp_nav_menu() in one location.
 */
register_nav_menu( 'primary', __( 'Navigation Menu', 'mangoJuice' ) );









/**
 * Get the excerpt ( max character count )
 *
 * @param $length
 */
function mangoJuice_excerpt( $length ) { // Max excerpt length. Length is set in characters



    global $post;

    //  Get the complete excerpt
    $text = $post->post_excerpt;


    if ( '' == $text ) {


        $text = get_the_content('');
        $text = apply_filters('the_content', $text);
        $text = str_replace(']]>', ']]>', $text);


    }



    $text = strip_shortcodes($text); // optional, recommended
    $text = strip_tags($text); // use ' $text = strip_tags($text,'<p><a>'); ' if you want to keep some tags
    $text = substr($text,0,$length);

    $excerpt = strrpos($text, '.') ? substr($text, 0, strrpos($text, '.') + 1) : false;



    if( $excerpt ) {


        echo apply_filters('the_excerpt',$excerpt);


    } else {


        echo apply_filters('the_excerpt',$text);


    }
}











/**
 * Add theme controllers
 */
include_once "controllers/bread_crumb.php";


/**
 * Add scripts to the document
 */
include_once "controllers/add_scripts.php";

/**
 * Add styles to the document
 */
include_once "controllers/add_styles.php";