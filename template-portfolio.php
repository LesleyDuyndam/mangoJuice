<?php
/**
 * Single Post Template: [Portfolio]
* Description: If the post is a portfolio post, use this template!
*/

get_header(); ?>

    <?php while (have_posts()) : the_post(); ?>
    <?php get_template_part( 'content', get_post_format()); ?>
    <?php mangoJuice_post_nav(); ?>
    <?php comments_template(); ?>
<?php endwhile; ?>

<?php get_sidebar(''); ?>
<?php get_footer(); ?>

