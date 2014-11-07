<?php
/*
Template Name: Portfolio
*/

get_template_part( 'modules/module', 'header' );

//  Get the posts Query
$my_query = new WP_Query( 'category_name=portfolio&posts_per_page=3' );
?>

<section id="portfolio_single">
        <h3><?php the_title() ?></h3>

<?php

//  Loop trough the post query
while ( $my_query->have_posts() ) : $my_query->the_post();

    //  Print the post data in the preset format
    get_template_part( 'modules/module', 'card');

endwhile; ?>

    </section>
<?php
get_template_part( 'modules/module', 'footer' );

?>

