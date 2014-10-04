<?php /** The main template file */

get_header(); ?>


<?php while (have_posts()) : the_post(); ?>
    <?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
            <?php the_post_thumbnail(); ?>
    <?php endif; ?>
    <?php the_title(); ?>
    <?php the_content(); ?>
    <?php wp_link_pages(array(
        'before' => '<div> Pages',
        'after' => '</div',
        'link_before' => '<span>',
        'link_after' => '</span'
        ));?>
    <?php edit_post_link('Edit', '<span>', '</span');?>
    <?php comments_template();?>
<?php endwhile; ?>

<?php get_sidebar(''); ?>
<?php get_footer(); ?>