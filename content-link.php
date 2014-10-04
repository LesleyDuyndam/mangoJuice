<?php
/**
 * The template for displaying posts in the Link post format.
 */
?>

<a href="<?php echo esc_url( mangoJuice_get_link_url() ); ?>"><?php the_title(); ?></a>		</h1>

<?php mangoJuice_entry_date(); ?>
<?php edit_post_link( 'Edit' ); ?>

<?php the_content('Continue reading'); ?>
<?php wp_link_pages( array(
    'before' => '<div> Pages:',
    'after' => '</div>',
    'link_before' => '<span>',
    'link_after' => '</span>'
));?>

<?php if ( is_single() ) : ?>
    <?php mangoJuice_entry_meta(); ?>
    <?php if ( get_the_author_meta( 'description' ) && is_multi_author() ) : ?>
        <?php get_template_part( 'author-bio' ); ?>
    <?php endif; ?>
<?php endif; // is_single() ?>
