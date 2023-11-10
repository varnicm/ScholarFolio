<?php
if ( is_active_sidebar( 'custom-sidebar' ) ) : ?>
    <div id="sidebar" class="widget-area">
        <?php dynamic_sidebar( 'custom-sidebar' ); ?>
    </div>
<?php endif; ?>
