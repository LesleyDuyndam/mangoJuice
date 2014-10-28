<?php /** The single template file */

get_template_part( 'modules/module', 'header' );

    while (have_posts()) : the_post(); ?>

        <div id="img-header" style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>');">

        </div>

        <section class="single-post-page">
            <header>

                <h3><?php the_title(); ?></h3>

                <ul>
                    <li>
                        <img src="<?php echo get_template_directory_uri() ;?>/svg/icons/clock.svg" alt=""/><time><?php the_date(); ?></time>
                    </li>
                    <li>
<!--                        @todo Create function to add link in the post backend-->
                        <img src="<?php echo get_template_directory_uri() ;?>/svg/icons/link.svg" alt=""/><a class="live-website" href="<?php echo "#" ;?>">www.lesleyduyndam.nl</a>
                    </li>
                </ul>
            </header>

            <article>

		        <?php echo the_content() ;?>

	        </article>

	        <footer>

                    <?php comments_template(); ?>

	        </footer>

            <?php get_sidebar() ;?>

        </section>

        <?php get_template_part( 'snippets/snippet', 'bread_crumb'); ?>

    <?php endwhile; ?>

<?php get_template_part( 'modules/module', 'footer' ) ;?>