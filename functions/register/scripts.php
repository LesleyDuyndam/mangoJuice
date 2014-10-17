<?php
/**
* Add scripts to document
*/
function mangoJuice_add_scripts() {


    // Add Jquery
    if ( ! is_admin() ) {

    wp_enqueue_script( 'jquery' );

    }


    // Register scripts
    wp_register_script('mangoJuice_jq_device', get_stylesheet_directory_uri() . '/js/plugins/device.min.js', array(), "1.0.1", true);
    wp_register_script('mangoJuice_mailchimp', get_stylesheet_directory_uri() . '/js/mailchimp.login.js', array(), "1.0.1", true);
    wp_register_script('mangoJuice_main',      get_stylesheet_directory_uri() . '/js/main.js', array(), "1.0.1", true);
    wp_register_script('mangoJuice_hamburger', get_stylesheet_directory_uri() . '/js/hamburger.js', array(), "1.0.1", true);



    /**
     * Add php wordpress data as javascript variables
     *
     *
     */

    $wordpress_data = array(
        'template_url'  => get_template_directory_uri()
    );

    wp_localize_script( 'mangoJuice_main', 'wordpress_data', $wordpress_data );

    // Add script
    wp_enqueue_script( 'mangoJuice_jq_device');
    wp_enqueue_script( 'mangoJuice_mailchimp');
    wp_enqueue_script( 'mangoJuice_main');
    wp_enqueue_script( 'mangoJuice_hamburger');


}

add_action( 'wp_enqueue_scripts', 'mangoJuice_add_scripts' );


