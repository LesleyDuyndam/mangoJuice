<?php /** The single template file */

get_header(); ?>
<section class="single">
    <?php while (have_posts()) : the_post(); ?>

        <section>
            <?php get_template_part( 'content', get_post_format()); ?>
        </section>

        <section>
            <?php comments_template(); ?>
        </section>

        <section>
            <?php mangoJuice_post_nav(); ?>
        </section>

    <?php endwhile; ?>
</section>

<?php get_footer(); ?>