<?php
/**
 * The template for displaying posts in the Image post format.
 */
?>

<?php if ( is_single() ) : ?>
    <?php the_title(); ?>
<?php else : ?>
    <a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
<?php endif; // is_single() ?>

<?php the_content('Continue reading'); ?>
<?php wp_link_pages( array(
    'before' => '<div> Pages:',
    'after' => '</div>',
    'link_before' => '<span>',
    'link_after' => '</span>'
));?>

<?php mangoJuice_entry_meta(); ?>

<?php if ( comments_open() && ! is_single() ) : ?>
    <?php comments_popup_link( 'Leave a comment', 'One comment so far', 'View all % comments' );?>
<?php endif; // comments_open() ?>

<?php edit_post_link( 'Edit' ); ?>

<?php if ( is_single() && get_the_author_meta( 'description' ) && is_multi_author() ) : ?>
    <?php get_template_part( 'author-bio' ); ?>
<?php endif; ?>


