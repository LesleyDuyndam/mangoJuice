<?php
/** The posts template file */
global $count;
$class = "";

$count++;

if( $count === 2 ||
    $count === 5 ||
    $count === 8 ||
    $count === 11 ){
    $class = "middle";
} else {
    $class = "side";
}
?>
<a href="<?php the_permalink() ;?>" style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>');" class="<?php echo $class ;?>"><h4><?php the_title(); ?></h4></a>