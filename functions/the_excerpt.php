<?php

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