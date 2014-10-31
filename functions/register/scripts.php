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

    wp_register_script('mangoJuice_setup',      get_stylesheet_directory_uri() . '/js/setup.js', array(), "1.0.1", true);

    wp_register_script('mangoJuice_hamburger', get_stylesheet_directory_uri() . '/js/hamburger.js', array(), "1.0.1", true);
    wp_register_script('mangoJuice_intro',     get_stylesheet_directory_uri() . '/js/intro.js', array(), "1.0.1", true);
    wp_register_script('mangoJuice_scroll_actions', get_stylesheet_directory_uri() . '/js/scroll_actions.js', array(), "1.0.1", true);

    wp_register_script('mangoJuice_main',      get_stylesheet_directory_uri() . '/js/main.js', array(), "1.0.1", true);



    /**
     * Add php wordpress data as javascript variables
     *
     *
     */

    $wordpress_data = array(
        'template_url'  => get_template_directory_uri()
    );

    wp_localize_script( 'mangoJuice_setup', 'wordpress_data', $wordpress_data );

    // Add script
    wp_enqueue_script( 'mangoJuice_jq_device');
    wp_enqueue_script( 'mangoJuice_mailchimp');
    wp_enqueue_script( 'mangoJuice_setup');
    wp_enqueue_script( 'mangoJuice_hamburger');
    wp_enqueue_script( 'mangoJuice_intro');
    wp_enqueue_script( 'mangoJuice_scroll_actions');
    wp_enqueue_script( 'mangoJuice_main');


}

add_action( 'wp_enqueue_scripts', 'mangoJuice_add_scripts' );


