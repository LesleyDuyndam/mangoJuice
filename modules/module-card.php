<?php
/** The posts template file */
?>

<section class="card">

    <header style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>');">
        <h4><?php the_title(); ?></h4>
    </header>

    <article>
        <?php the_excerpt(); ?>
    </article>

    <footer>
        <a href="<?php echo get_permalink() ;?>">Lees verder</a>
    </footer>

</section>
