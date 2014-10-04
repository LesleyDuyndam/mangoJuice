<header>
    <?php echo get_the_post_thumbnail(); ?>

    <h3><?php the_title(); ?></h3>
</header>

<article>
    <?php $category = get_the_category(); ?>
    <h4 class="category_style"><?php echo $category[0]->cat_name; ?></h4>
    <?php echo the_content() ;?>
</article>

<footer>
    <?php if(true) : ?>
        <a href="<?php echo "#" ;?>">Bekijk de live website!</a>
    <?php endif; ?>
</footer>
