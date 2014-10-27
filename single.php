<?php /** The single template file */

get_template_part( 'modules/module', 'header' );

    while (have_posts()) : the_post(); ?>

        <div id="img-header" style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>');">

        </div>

        <section class="single-post">
            <header>

                <h3><?php the_title(); ?></h3>
                <time><?php the_date(); ?></time>
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