<?php get_template_part( 'modules/module', 'header' );

if ( have_posts() ){
    get_template_part( 'snippets/snippet', 'bread_crumb');
?>

<article id="posts">
    <h2><?php echo single_cat_title( '', false ) ?></h2>

    <?php
    while ( have_posts() ) : the_post();

        get_template_part( 'modules/module', 'posts');

    endwhile;
?>
    </article>
<?php

}

get_template_part( 'modules/module', 'footer' );