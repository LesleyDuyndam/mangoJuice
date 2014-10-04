<?php

global $post;

// Don't print empty markup if there's nowhere to navigate.
$previous = ( is_attachment() ) ? get_post( $post->post_parent ) : get_adjacent_post( false, '', true );
$next     = get_adjacent_post( false, '', false );

if ( ! $next && ! $previous ) {
	return;
}?>

<?php previous_post_link( '%link', _x( '%title', 'Previous post link', 'mangoJuice' ) ); ?>
<?php next_post_link( '%link', _x( '%title', 'Next post link', 'mangoJuice' ) ); ?>
