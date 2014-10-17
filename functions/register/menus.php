<?php
 /**
 * Register the different menu's
 *
 * @todo: Registered menu's are visible in backend. Changes made there are being made, but no visual feedback of changes is displayed after save.
 *
 */
if (! function_exists( 'mangoJuice_register_nav_menus' )){

    function mangoJuice_register__nav_menus(){

        register_nav_menu('Main', 'Main navigation menu');
//
//        register_nav_menus( array(
//            "Main"
//        ));
    };

    mangoJuice_register__nav_menus();
}
