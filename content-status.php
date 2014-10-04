<?php
/**
 * The template for displaying posts in the Status post format.
 */
?>

<?php the_content('Continue reading'); ?>
<?php wp_link_pages( array(
    'before' => '<div> Pages:',
    'after' => '</div>',
    'link_before' => '<span>',
    'link_after' => '</span>'
));?>

<?php mangoJuice_entry_date(); ?>
<?php edit_post_link( 'Edit'); ?>

<?php if ( is_single() && get_the_author_meta( 'description' ) && is_multi_author() ) : ?>
    <?php get_template_part( 'author-bio' ); ?>
<?php endif; ?>
