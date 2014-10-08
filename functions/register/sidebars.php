<?php
/**
 * Register the different sidebars
 *
 */
if( ! function_exists( 'mangoJuice_widgets_init' ) ){

    /**
     * Registers one widget area.
     */
    function mangoJuice_widgets_init() {
        register_sidebar( array(
            'name'          => 'Bottom sidebar',
            'id'            => "bottom",
            'description'   => 'bottom',
            'class'         => '',
            'before_widget' => '<li>',
            'after_widget'  => '</li>',
            'before_title'  => '<h1>',
            'after_title'   => '</h1>',
        ) );
    }

    add_action( 'widgets_init', 'mangoJuice_widgets_init');

}