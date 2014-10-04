<?php
/** The theme Header */
?>
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
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.3.7/slick.css"/>
    <?php wp_enqueue_script("jquery"); ?>
    <?php wp_head(); ?>
</head>

<body id="body" <?php body_class(); ?>>
    <header id="header">

        <nav id="main-menu">
            <?php wp_nav_menu( array(
                'theme_location' => 'primary',
            ));
            ?>
        </nav>

        <button id="multi-header">
            <svg version="1.1"
                 xmlns="http://www.w3.org/2000/svg">
                <g id="exit">
                    <line stroke-miterlimit="10" x1="5" y1="30.342" x2="30" y2="4.843"/>
                    <line stroke-miterlimit="10" x1="5" y1="4.98" x2="30" y2="30.355"/>
                </g>
                <g id="burger">
                    <line stroke-miterlimit="5" x1="2" y1="27.5" x2="33" y2="27.5"/>
                    <line stroke-miterlimit="5" x1="2" y1="17.5" x2="33" y2="17.5"/>
                    <line stroke-miterlimit="5" x1="2" y1="7.5" x2="33" y2="7.5"/>
                </g>
            </svg>
        </button>
        <h1><a href="<?php echo get_home_url();?>">Lesley Duyndam</a></h1>


    </header>
