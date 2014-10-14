<?php

global $post;

// Don't print empty markup if there's nowhere to navigate.
$previous = ( is_attachment() ) ? get_post( $post->post_parent ) : get_adjacent_post( false, '', true );
$next     = get_adjacent_post( false, '', false );

if ( ! $next && ! $previous ) {
	return;
}?>

<section class="page-nav">
    <div class="previous_post">
        <div>Vorig item</div>
        <?php previous_post_link( '%link' ); ?>
    </div>
    <div class="next-post">
        <div>Volgend item</div>
        <?php next_post_link( '%link' ); ?>
    </div>
</section>