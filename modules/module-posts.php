<?php
/** The posts template file */
?>

<section class="promise promise-<?php echo $count;?>">

    <header>
        <?php echo get_the_post_thumbnail(); ?>
        <h3 class="img-overlay"><?php the_title(); ?></h3>
    </header>

    <article>
        <?php mangoJuice_excerpt( 300 ); ?>
    </article>

    <footer>
        <?php if(true) : ?>
            <a href="<?php echo "#" ;?>">Bekijk de live website!</a>
        <?php endif; ?>
        <a href="<?php echo get_permalink() ;?>" class="post_more">Lees verder</a>
    </footer>

</section>
