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
        add_theme_support('post-thumbnails');


        /*
         * Adds RSS feed links to <head> for posts and comments.
         */
        add_theme_support('automatic-feed-links');


        /*
         * Switches default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support('html5', array('search-form', 'comment-form', 'comment-list'));


        /*
        * Add support for different post-formats
        * 'aside', 'audio', 'chat', 'gallery', 'image', 'link', 'quote', 'status', 'video'
        */
        add_theme_support('post-formats', array(//        'aside', 'audio', 'chat', 'gallery', 'image', 'link', 'quote', 'status', 'video'
        ));



    }




}
// Fires after the theme is loaded.
add_action( 'after_setup_theme', 'mangoJuice_setup' );









/**
 * Remove the Windows Live Writer links
 * If not used, it only takes up valuable load time.
 */
function mangoJuice_remove_header_link() {
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wlwmanifest_link');
}

add_action('init', 'mangoJuice_remove_header_link');










/**
 * Set image sizes
 */
update_option('small_size_w', 300);
update_option('large_size_w', 1000);










/**
 * Register menu's and sidebar's
 */
include_once "functions/register/menus.php";
include_once "functions/register/sidebars.php";
include_once "functions/register/styles.php";
include_once "functions/register/scripts.php";




include_once "functions/the_excerpt.php";



/**
 * Add theme controllers
 */
include_once "controllers/bread_crumb.php";