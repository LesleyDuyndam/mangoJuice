<?php
/** The posts template file */
?>

<li itemscope itemtype="" style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>')">


    <a href="<?php the_permalink() ;?>"> <?php the_title() ;?></a>


<!--    <img src="--><?php //echo wp_get_attachment_url( get_post_thumbnail_id() ); ?><!--" alt="--><?php //the_title(); ?><!--"/>-->

</li>
