<?php /** The single template file */

get_template_part( 'modules/module', 'header' );

    while (have_posts()) : the_post();

    get_template_part( 'snippets/snippet', 'bread_crumb'); ?>

        <section class="single-post">
	        <header>

                <h2><?php the_title(); ?></h2>
		        <?php the_post_thumbnail(); ?>

            </header>

	        <article>

		        <?php echo the_content() ;?>

	        </article>

	        <footer>

		        <?php if(true) : ?>
			        <a href="<?php echo "#" ;?>">Bekijk de live website!</a>
		        <?php endif; ?>

                <section class="page-nav">

                    <?php get_template_part( 'snippets/snippet', 'page_navigation' ) ;?>

                </section>

                <section>
                    <?php comments_template(); ?>
                </section>

	        </footer>
        </section>
    <?php endwhile; ?>

<?php get_template_part( 'modules/module', 'footer' ) ;?>