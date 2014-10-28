<?php
/**
 * The sidebar containing the secondary widget area, displays on posts and pages.
 */

if ( is_active_sidebar( 'main' ) ) : ?>
    <aside id="main-sidebar">
        <ul>
            <?php dynamic_sidebar( 'main' ); ?>
        </ul>
    </aside>
<?php endif; ?>