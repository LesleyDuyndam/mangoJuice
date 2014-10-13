<?php get_template_part( 'modules/module', 'header' );

if ( have_posts() ){
    get_template_part( 'snippets/snippet', 'bread_crumb');
?>


<section id="posts">
    <h3><?php single_cat_title( '', true ) ?></h3>

    <?php

    $count = 0;

    while ( have_posts() ) : the_post();

        get_template_part( 'modules/development', 'post');

    endwhile;
?>

</section>
<?php
}

get_template_part( 'modules/module', 'footer' );
?>