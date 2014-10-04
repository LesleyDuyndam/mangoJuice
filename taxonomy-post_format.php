<?php
/**
 * The template for displaying Post Format pages.
 */
?>

<?php get_header(); ?>

    <?php if ( have_posts() ) : ?>
        <?php printf( __( '%s Archives' ), get_post_format_string( get_post_format() ) ); ?>

        <?php /* The loop */ ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <?php get_template_part( 'content', get_post_format() ); ?>
        <?php endwhile; ?>

        <?php twentythirteen_paging_nav(); ?>

    <?php else : ?>
        <?php get_template_part( 'content', 'none' ); ?>
    <?php endif; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>