<?php
/**
* Add styles to document
*/
function mangoJuice_add_styles() {


// Register scripts
wp_register_style('mangoJuice_main-css', get_stylesheet_directory_uri()  . '/css/main.css');


// Add scripts
wp_enqueue_style('mangoJuice_main-css');


}

add_action( 'wp_enqueue_scripts', 'mangoJuice_add_styles' );