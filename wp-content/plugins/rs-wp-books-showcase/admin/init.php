<?php
/**
 * Admin Functions
 */

add_action('admin_enqueue_scripts', 'rswpbs_admin_assets');
function rswpbs_admin_assets(){
	$getCurrentScreen = get_current_screen();
	if (is_admin()) {
		if ('book' === $getCurrentScreen->id || 'book_reviews' === $getCurrentScreen->id || 'book_page_rswpbs-tutorial' === $getCurrentScreen->id || 'book_page_rswpbs-page-settings' === $getCurrentScreen->id) {
			wp_enqueue_style( 'rswpbs-grid', RSWPBS_PLUGIN_URL . 'includes/assets/css/rswpbs-grid.css' );
		}
		if ('book-author' === $getCurrentScreen->taxonomy || 'book' === $getCurrentScreen->id || 'book_reviews' === $getCurrentScreen->id || 'book_page_book-settings' === $getCurrentScreen->id || 'book_page_rswpbs-tutorial' === $getCurrentScreen->id) {
			wp_enqueue_style( 'rswpbs-admin-meta-style', RSWPBS_PLUGIN_URL . 'admin/assets/css/style-for-meta-box.css' );
			wp_enqueue_script('rs-wp-book-showcase-admin-custom', RSWPBS_PLUGIN_URL . 'admin/assets/js/admin-custom.js', array('jquery'), '1.0', true);
			wp_enqueue_media();
		}
	}
}

add_action('admin_enqueue_scripts', 'rswpbs_menu_style');
function rswpbs_menu_style(){
	wp_enqueue_style( 'rswpbs-custom-menu-style', RSWPBS_PLUGIN_URL . 'admin/assets/css/admin-style.css' );
	$data = "
	.taxonomy-book-author .term-description-wrap {
	    display: none;
	}
	";
	$enableWysiwygForDesc = false;
    if (class_exists('Rswpbs_Pro')) {
        $getWysiwygPermission = get_field('enable_editor_for_author_description', 'option');
        if (null == $getWysiwygPermission || false == $getWysiwygPermission) {
            $enableWysiwygForDesc = false;
        }elseif (true == $getWysiwygPermission) {
            $enableWysiwygForDesc = true;
        }
    }
    if (true === $enableWysiwygForDesc) {
		wp_add_inline_style( 'rswpbs-custom-menu-style', $data );
    }
}
