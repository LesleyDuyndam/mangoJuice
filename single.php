<?php /** The single template file */

get_template_part( 'modules/module', 'header' );

    while (have_posts()) : the_post(); ?>

        <section class="single-post">
            <header>


                <?php the_post_thumbnail(); ?>

                <h3><?php the_title(); ?></h3>

            </header>

            <?php get_template_part( 'snippets/snippet', 'bread_crumb'); ?>

            <article>

		        <?php echo the_content() ;?>

	        </article>

	        <footer>

		        <?php if(true) : ?>
			        <a href="<?php echo "#" ;?>">Bekijk de live website!</a>
		        <?php endif; ?>

                    <?php get_template_part( 'snippets/snippet', 'page_navigation' ) ;?>

                <section>
                    <?php comments_template(); ?>
                </section>

	        </footer>
        </section>
    <?php endwhile; ?>

<?php get_template_part( 'modules/module', 'footer' ) ;?>