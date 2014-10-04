<?php
/**
 * The template for displaying a "No posts found" message.
 */
?>
<h1>Niets gevonden | content-none.php</h1>

	<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>
	    <p>Een nieuwe post maken? <a href="<?php admin_url( 'post-new.php' ); ?>">Begin hier!</a></p>
	<?php elseif ( is_search() ) : ?>
	    <p> Sorry, but nothing matched your search terms. Please try again with different keywords.</p>
	<?php get_search_form(); ?>
	<?php else : ?>
	    <p>It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.</p>
	<?php get_search_form(); ?>

	<?php endif; ?>

