<?php /** The main template file */ ?>

<?php get_template_part( 'modules/module', 'header' ) ;?>

<section class="intro">

    <?php get_template_part( 'modules/module', 'intro' ) ;?>

</section>

<section class="portfolio posts">

    <h2>Portfolio</h2>
    <a href="<?php mj_get_category_uri_slug( 'portfolio' ) ;?>" class="more">Meer..</a>
    <?php get_template_part( 'modules/module', 'posts' ); ?>

</section>


<section class="keyValues">

    <h2>Kernwaarde</h2>
    <?php get_template_part( 'modules/module', 'keyvalues' );?>

</section>

<?php get_template_part( 'modules/module', 'footer' ) ;?>