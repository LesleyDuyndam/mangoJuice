<?php
/** The posts template file */
?>

<li itemscope itemtype="">

    <h4 itemprop="name" ><?php the_title(); ?></h4>

    <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>" alt="<?php the_title(); ?>"/>

</li>
