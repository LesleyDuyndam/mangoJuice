<?php
/**
 * The sidebar containing the footer widget area, displays on posts and pages.
 */

if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
    <ul>
        <?php dynamic_sidebar( 'sidebar-2' ); ?>
    </ul>
<?php endif; ?>