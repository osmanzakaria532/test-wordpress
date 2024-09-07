<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Electronic Store
 */

if ( ! is_active_sidebar( 'right-sidebar' ) ) {
	return;
}
?>
<aside id="secondary" class="widget-area">
	<?php
    if (is_single()) {
        ?>
        <div class="sticky-sidebar-inner">
        <?php
    }
        dynamic_sidebar( 'right-sidebar' );
    if (is_single()) {
        ?>
        </div>
        <?php
    }
    ?>


</aside><!-- #secondary -->
