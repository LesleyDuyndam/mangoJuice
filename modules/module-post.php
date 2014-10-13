<?php
/** The posts template file */
?>

<section class="post promise-<?php echo $count;?>">

    <header>
        <?php the_post_thumbnail(); ?>
        <h4 class="img-overlay"><?php the_title(); ?></h4>
    </header>

    <article>
        <?php the_excerpt(); ?>
    </article>

    <footer>
        <?php if(true) : ?>
            <a href="<?php echo "#" ;?>">Bekijk de live website!</a>
        <?php endif; ?>
        <a href="<?php echo get_permalink() ;?>" class="post_more">Lees verder</a>
    </footer>

</section>
