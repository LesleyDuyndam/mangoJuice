<?php
/**
 * The template for displaying Archive pages.
 */
?>

<?php get_header(); ?>
    <?php if ( have_posts() ) : ?>
        <?php if ( is_day() ) :
                printf( __( 'Daily Archives: %s', 'twentythirteen' ), get_the_date() );
            elseif ( is_month() ) :
                printf( __( 'Monthly Archives: %s', 'twentythirteen' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'twentythirteen' ) ) );
            elseif ( is_year() ) :
                printf( __( 'Yearly Archives: %s', 'twentythirteen' ), get_the_date( _x( 'Y', 'yearly archives date format', 'twentythirteen' ) ) );
            else :
                _e( 'Archives', 'twentythirteen' );
            endif;
        ?>

        <?php /* The loop */ ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <?php get_template_part( 'content', get_post_format() ); ?>
        <?php endwhile; ?>

    <section class="page-nav">

        <?php get_template_part( 'snippets/snippet', 'page_navigation' ) ;?>

    </section>

    <?php else : ?>
        <?php get_template_part( 'content', 'none' ); ?>
    <?php endif; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>