<?php /** The main template file */ ?>
<?php get_header(); ?>

<section id="intro">

    <?php get_template_part( 'module', 'intro' ) ;?>

</section>

<section class="portfolio">

    <h2>Portfolio</h2>
    <a href="<?php mj_get_category_uri_slug( 'portfolio' ) ;?>" class="more">Meer..</a>
    <?php get_template_part( 'module', 'cards' ); ?>

</section>


<section class="keyValues">

    <h2>Kernwaarde</h2>
    <?php get_template_part( 'module', 'keyvalues' );?>

</section>

<?php get_footer(); ?>