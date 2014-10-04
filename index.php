<?php

/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 */
?>

<!-- Load module: HEADER -->
<?PHP get_template_part( 'modules/module', 'header' ) ;?>

<!-- Load module: INTRO -->
<?php get_template_part( 'modules/module', 'intro' ) ;?>

<h2>Portfolio</h2>
<a href="<?php mj_get_category_uri_slug( 'portfolio' ) ;?>" class="more">Meer..</a>

<!-- Load module: POSTS -->
<?php get_template_part( 'modules/module', 'posts' ); ?>

<!-- Load module: KEYALUES -->
<?php get_template_part( 'modules/module', 'keyvalues' );?>

<!-- Load module: FOOTER -->
<?php get_template_part( 'modules/module', 'footer' ) ;?>