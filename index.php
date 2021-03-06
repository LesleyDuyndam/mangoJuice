<?php get_template_part( 'modules/module', 'header' ) ;?>
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

<section id="intro">
    <?php get_template_part( 'modules/module', 'intro') ;?>
</section>
<div id="intro-text-container">
    <blockquote id="intro-text">" Webdesign met eenvoud en gebruiksvriendelijkheid als belangrijkste uitganspunt "</blockquote>
</div>

<section id="portfolio" class="card">
    <header>
        <h3>Mijn portfolio</h3>
        <a href="<?php echo esc_url(get_category_link(get_cat_ID( 'portfolio' ))) ;?>" class="more">MEER</a>
    </header>
    <?php
        //  Get the posts Query
        $my_query = new WP_Query( 'category_name=portfolio&posts_per_page=3' );
        $count = 0;

        //  Loop trough the post query
        while ( $my_query->have_posts() ) : $my_query->the_post();

            //  Print the post data in the preset format
            get_template_part( 'modules/module', 'card');

        endwhile
    ;?>
</section>

<section id="beloftes">
    <header>
        <h3>Mijn 3 beloftes</h3>
    </header>
    <?php
        //  Get the posts Query
        $my_query = new WP_Query( 'category_name=beloftes&posts_per_page=3' );
        //  Initialize a counter
        $count = 0;

        //  Loop trough the post query
        while ( $my_query->have_posts() ) : $my_query->the_post();

            //  Update the counter
            $count++;

            //  Print the post data in the preset format
            get_template_part( 'modules/module', 'card');

        endwhile
    ;?>
</section>

    <section id="blog">
        <header>
            <h3>Mijn blog</h3>
            <a href="<?php echo esc_url(get_category_link(get_cat_ID( 'blog' ))) ;?>" class="more">MEER</a>
        </header>
        <?php
            //  Get the posts Query
            $my_query = new WP_Query( 'category_name=blog&posts_per_page=3' );
            //  Initialize a counter
            $count = 0;

            //  Loop trough the post query
            while ( $my_query->have_posts() ) : $my_query->the_post();

                //  Update the counter
                $count++;

                //  Print the post data in the preset format
                get_template_part( 'modules/module', 'card');

            endwhile
        ;?>
    </section>
<?php get_template_part( 'modules/module', 'footer' ) ;?>