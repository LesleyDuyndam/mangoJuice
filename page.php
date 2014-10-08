<?php /** The page template file */

get_template_part( 'modules/module', 'header' );

while (have_posts()) : the_post();

    get_template_part( 'snippets/snippet', 'bread_crumb'); ?>

    <section class="page">
    <header>
        <?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
            <?php the_post_thumbnail(); ?>
        <?php endif; ?>
        <h3 class="img-overlay"><?php the_title(); ?></h3>

    </header>

    <article>
        <?php the_content() ;?>

    </article>

    <footer>


    </footer>

<?php endwhile; ?>
</section>

<?php get_template_part( 'modules/module', 'footer' ) ;?>