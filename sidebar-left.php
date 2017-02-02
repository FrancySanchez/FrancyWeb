<?php
/**
 * The left sidebar containing the main widget area.
 */
if ( ! is_active_sidebar( 'read-more-sidebar' ) ) {
    return;
}
$sidebar_layout = read_more_sidebar_selection();
?>
<?php if( $sidebar_layout == "left-sidebar" ) : ?>
    <div id="secondary-left" class="widget-area at-remove-width sidebar secondary-sidebar" role="complementary">
        <div id="sidebar-section-top" class="widget-area sidebar clearfix">
            <?php dynamic_sidebar( 'read-more-sidebar' ); ?>
        </div>
    </div>
<?php endif;