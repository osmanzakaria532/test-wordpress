<?php
/**
 * Electronic Store Sidebar Control
 */
function electronic_store_before_default_page_markup() {
	global $post;
	if (is_home()) {
		$sidebar_layouts = get_theme_mod( 'blog_page_sidebar', 'no' );
	}elseif (is_archive()) {
		$sidebar_layouts = get_theme_mod('archive_page_sidebar', 'no');
	}elseif (is_page()) {
		$get_page_sidebar_settings = get_theme_mod('page_sidebar', 'no');
		$sidebar_layouts = $get_page_sidebar_settings;
		$indvPageSidebarSettings = get_post_meta( $post->ID, 'electronic_store_sidebar-settings', true );
		if ('customizer' === $indvPageSidebarSettings || empty($indvPageSidebarSettings)) {
			$sidebar_layouts = $get_page_sidebar_settings;
		}else{
			$sidebar_layouts = $indvPageSidebarSettings;
		}
	}elseif (is_single()) {
		$get_post_sidebar_settings = get_theme_mod('post_sidebar', 'no');
		$sidebar_layouts = $get_post_sidebar_settings;
		$indvPostSidebarSettings = get_post_meta( $post->ID, 'electronic_store_sidebar-settings', true );

		if ('customizer' === $indvPostSidebarSettings || empty($indvPostSidebarSettings)) {
			$sidebar_layouts = $get_post_sidebar_settings;
		}else{
			$sidebar_layouts = $indvPostSidebarSettings;
		}
	}elseif (is_search()) {
		$sidebar_layouts = get_theme_mod('search_page_sidebar', 'no');
	}
	$leftsidebarcol = 'col-md-6 col-lg-3 order-1 order-lg-0';
	$leftsidebarshow = true;
	$blogcontentcol    = 'col-md-12';
	if ( $sidebar_layouts === 'right' ) {
		$leftsidebarshow = false;
		$blogcontentcol = 'col-md-7 col-lg-8 order-0';
	} elseif ( $sidebar_layouts === 'left' ) {
		$blogcontentcol = 'col-md-7 col-lg-8 order-1 order-lg-1 ';
		$leftsidebarshow = true;
		$leftsidebarcol = 'col-md-5 col-lg-4 order-2 order-md-0 order-lg-0';
	} elseif ( $sidebar_layouts === 'no' ) {
		$blogcontentcol = 'col-md-12';
		$leftsidebarshow = false;
	} elseif ( $sidebar_layouts === 'both' ) {
		$leftsidebarshow = true;
		$blogcontentcol = 'col-md-12 col-lg-6 order-0 order-lg-1';
		$leftsidebarcol = 'col-md-6 col-lg-3 order-1 order-lg-0';
	} elseif ( $sidebar_layouts === 'narrow' ) {
		$leftsidebarshow = false;
		$blogcontentcol = 'col-lg-9 col-xl-8 col-md-12';
	} else {
		$blogcontentcol = 'col-md-12';
	}
	?>
		<div class="blog-post-section">
			<div class="container">
				<div class="row">
					<?php
					if (true === $leftsidebarshow) :?>
					<div class="<?php echo esc_attr($leftsidebarcol);?>">
						<aside id="left-sidebar-area" class="widget-area left-sidebar-area">
							<?php dynamic_sidebar('left-sidebar'); ?>
						</aside>
					</div>
					<?php
					endif; ?>
					<div class="<?php echo esc_attr( $blogcontentcol ); ?>">
	<?php
}
add_action( 'electronic_store_before_default_page', 'electronic_store_before_default_page_markup' );
function electronic_store_after_default_page_markup() {
	global $post;
	if (is_home()) {
		$sidebar_layouts = get_theme_mod( 'blog_page_sidebar', 'no' );
	}elseif (is_archive()) {
		$sidebar_layouts = get_theme_mod('archive_page_sidebar', 'no');
	}elseif (is_page()) {
		$get_page_sidebar_settings = get_theme_mod('page_sidebar', 'no');
		$sidebar_layouts = $get_page_sidebar_settings;
		$indvPageSidebarSettings = get_post_meta( $post->ID, 'electronic_store_sidebar-settings', true );
		if ('customizer' === $indvPageSidebarSettings || empty($indvPageSidebarSettings)) {
			$sidebar_layouts = $get_page_sidebar_settings;
		}else{
			$sidebar_layouts = $indvPageSidebarSettings;
		}
	}elseif (is_single()) {
		$get_post_sidebar_settings = get_theme_mod('post_sidebar', 'no');
		$sidebar_layouts = $get_post_sidebar_settings;
		$indvPostSidebarSettings = get_post_meta( $post->ID, 'electronic_store_sidebar-settings', true );
		if ('customizer' === $indvPostSidebarSettings || empty($indvPostSidebarSettings)) {
			$sidebar_layouts = $get_post_sidebar_settings;
		}else{
			$sidebar_layouts = $indvPostSidebarSettings;
		}
	}elseif (is_search()) {
		$sidebar_layouts = get_theme_mod('search_page_sidebar', 'no');
	}
	$rightsidebarcol    = 'col-md-5 col-lg-4 order-1 pl-xl-4';
	$rightsidebarshow    = true;
	if ( $sidebar_layouts === 'right' ) {
		$rightsidebarcol = 'col-md-5 col-lg-4 order-1 pl-xl-4';
		$rightsidebarshow = true;
	} elseif ( $sidebar_layouts === 'left' ) {
		$rightsidebarcol = 'col-md-5 col-lg-4 order-0 pl-xl-4';
		$rightsidebarshow = false;
	} elseif ( $sidebar_layouts === 'no' ) {
		$rightsidebarcol = 'sidebar-hide';
		$rightsidebarshow = false;
	} elseif ( $sidebar_layouts === 'both' ) {
		$rightsidebarcol = 'col-md-6 col-lg-3 order-2 order-lg-2';
		$rightsidebarshow = true;
	} elseif ( $sidebar_layouts === 'narrow' ) {
		$rightsidebarshow = false;
		$rightsidebarcol = 'sidebar-hide';
	} else {
		$rightsidebarcol = 'col-md-5 col-lg-4 order-1 pl-xl-4';
	}
	?>
					 </div>
					<?php if ( $rightsidebarshow === true ) : ?>
						<div class="<?php echo esc_attr( $rightsidebarcol ); ?>">
							<?php get_sidebar(); ?>
						</div>
					<?php endif; ?>
				</div>
			</div>
		</div>
		<?php
}
add_action( 'electronic_store_after_default_page', 'electronic_store_after_default_page_markup' );