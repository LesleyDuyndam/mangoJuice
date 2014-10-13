<?php get_template_part( 'modules/module', 'header' );

if ( have_posts() ){
    get_template_part( 'snippets/snippet', 'bread_crumb');
?>


<section id="posts">
    <h2><?php echo single_cat_title( '', false ) ?></h2>

    <?php

    $count = 0;

    while ( have_posts() ) : the_post();

        get_template_part( 'modules/module', 'post');

    endwhile;
?>

</section>
<?php
}

get_template_part( 'modules/module', 'footer' );
?>