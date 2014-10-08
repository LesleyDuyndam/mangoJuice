<?php
/** The promises template file */
?>

<?php $my_query = new WP_Query( 'category_name=beloftes&posts_per_page=3' ); ?>
<?php $count = 0;?>

        <?php while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
        <?php $count++;?>
        <section class="promise promise-<?php echo $count;?>">

            <header>
                <?php echo get_the_post_thumbnail(); ?>
                <h3 class="img-overlay"><?php the_title(); ?></h3>
            </header>

            <article>
                <?php mangoJuice_excerpt(300); ?>
            </article>

            <footer>
                <a href="<?php echo get_permalink() ;?>" class="post_more">Lees verder</a>
            </footer>

        </section>
        <?php endwhile; ?>

