<?php
/**
 * The template for displaying posts in the Quote post format.
 */
?>

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
<?php edit_post_link( 'Edit'); ?>