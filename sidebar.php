<?php
/**
 * The sidebar containing the secondary widget area, displays on posts and pages.
 */

if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
    <ul>
        <?php dynamic_sidebar( 'sidebar-1' ); ?>
    </ul>
<?php endif; ?>