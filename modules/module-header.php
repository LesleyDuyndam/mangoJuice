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
    <!-- START HEADER -->
    <header id="header">
        <div id="header_wrapper">
            <a href="<?php echo get_home_url();?>" id="title_link">
                <img id="header_icon" src="<?php echo get_template_directory_uri() ;?>/svg/icons/header_icon.svg" alt=""/><div id="title">
                    <h1><?php bloginfo('name'); ?></h1>
                    <h2><?php bloginfo('description'); ?></h2>
                </div>
            </a>
            <nav id="main_nav" role="navigation">
                <!-- START MAIN NAVIGATION -->
                <?php

                $menu_settings = array(
                'theme_location'  => 'Main',
                'menu'            => '',
                'container'       => false,           // Set to NAV if nog in container
                'container_class' => '',
                'container_id'    => '',
                'menu_class'      => 'menu',
                'menu_id'         => '',
                'echo'            => true,              // If false, teruns a STRING
                'fallback_cb'     => 'wp_page_menu',
                'before'          => '',               // Inside the <li>, before the <a>
                'after'           => '',                // Inside the <li>, after the <a>
                'link_before'     => '',
                'link_after'      => '',
                'items_wrap'      => '<ul class="menu">%3$s</ul>',
                'depth'           => 0,
                'walker'          => ''
                );

                wp_nav_menu( $menu_settings );

                    ?><!-- END MAIN NAVIGATION -->
            </nav>
        </div>
    </header>
