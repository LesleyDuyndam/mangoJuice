<?php
/** The cards template file */
?>

<!-- START POSTS -->
<section class="posts">
    <?php  ;?>
    <?php if (have_posts()) : ?>

        <?php $count = 0;?>
        <?php while (have_posts()) : the_post(); ?>

            <?php $count++;?>
            <section class="post post-<?php echo $count;?>">

                <header>
                    <?php echo get_the_post_thumbnail(); ?>
                    <h3 class="img-overlay"><?php the_title(); ?></h3>
                </header>

                <article>
                    <?php $category = get_the_category(); ?>
                    <h4 class="category_style"><?php echo $category[0]->cat_name; ?></h4>
                    <?php mj_print_excerpt(300); ?>
                </article>

                <footer>
                    <?php if(true) : ?>
                        <a href="<?php echo "#" ;?>">Bekijk de live website!</a>
                    <?php endif; ?>
                <a href="<?php echo get_permalink() ;?>" class="post_more">Lees verder</a>
                </footer>

            </section>

        <?php endwhile; ?>
        <?php mangoJuice_paging_nav(); ?>

    <?php else : ?>
        <?php get_template_part( 'content', 'none' ); ?>

    <?php endif; ?>
</section><!-- END POSTS -->
