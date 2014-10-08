<!DOCTYPE html>

<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->

<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
    
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php wp_enqueue_script("jquery"); ?>
    <?php wp_head(); ?>
</head>

<!-- START BODY -->
<body id="body" <?php body_class(); ?>>

    <!-- START HEADER -->
    <header id="header">

        <nav role="navigation">
            <h1><a href="<?php echo get_home_url();?>">Lesley Duyndam</a></h1>

            <!-- START MAIN NAVIGATION -->
                <?php
                    wp_nav_menu( array(
                        'theme_location' => 'primary',
                        'container' => false
                    ));
                ?><!-- END MAIN NAVIGATION -->

            <!-- START .MOBILE BUTTON -->
            <button>

                <svg version="1.1" xmlns="http://www.w3.org/2000/svg">

                    <!-- START EXIT LINES -->
                    <g id="exit">
                        <line x1="5" y1="30.342" x2="30" y2="4.843"></line>
                        <line x1="5" y1="4.98" x2="30" y2="30.355"></line>
                    </g><!-- END EXIT LINES -->

                    <!-- START BURGER LINES -->
                    <g id="burger">
                        <line x1="2" y1="27.5" x2="33" y2="27.5"></line>
                        <line x1="2" y1="17.5" x2="33" y2="17.5"></line>
                        <line x1="2" y1="7.5" x2="33" y2="7.5"></line>
                    </g><!-- END EXIT LINES -->

                </svg>

            </button><!-- END .MOBILE BUTTON -->
        </nav>

    </header>
