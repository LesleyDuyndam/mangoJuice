<!DOCTYPE html>
<!--[if IE 7]><html class="ie ie7" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 8]><html class="ie ie8" <?php language_attributes(); ?>><![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!--><html <?php language_attributes(); ?>><!--<![endif]-->

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">

    <?php

    $the_title = get_bloginfo('name');
    $the_description = get_bloginfo('description');

//    @todo: Solution to get a full description from the backend.
    $the_description = "Als veelzijdige webdesigner ontwerp en programmeer ik responsive Wordpress websites op Freelance basis.";
    if( is_single() ){
        $the_title = wp_title('', false);
        $the_description = get_the_excerpt();
    }

    if( is_category() ) {
        $the_title .=  " | " . single_cat_title( '', false );

//      @todo: Remove the <p> tags from the string
        $the_description = category_description();
    }

    echo "<title>" . $the_title . "</title>";
    echo "<meta name='Description' content='" . $the_description . "'/>";

    ?>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php wp_head(); ?>

    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
</head>

<!-- START BODY -->
<body id="body" <?php body_class(); ?>>

<!--[if lt IE 7]>
<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> for a secure and fast experience.</p>
<![endif]-->

    <!-- START HEADER -->
    <header id="header">

        <nav role="navigation">
            <h1><a href="<?php echo get_home_url();?>"><?php bloginfo('name'); ?></a></h1>
            <h2><?php bloginfo('description'); ?></h2>

            <!-- START MAIN NAVIGATION -->
                <?php
                    wp_nav_menu( array(
                        'theme_location' => 'Main',
                        'container' => false
                    ));
                ?><!-- END MAIN NAVIGATION -->
        </nav>

    </header>
