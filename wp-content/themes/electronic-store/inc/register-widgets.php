<?php
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function electronic_store_widgets_init() {

	register_sidebar(
		array(
			'name'          => esc_html__( 'Rigth Sidebar Area', 'electronic-store' ),
			'id'            => 'right-sidebar',
			'description'   => esc_html__( 'Add widgets here.', 'electronic-store' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
        	'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Left Sidebar Area', 'electronic-store' ),
			'id'            => 'left-sidebar',
			'description'   => esc_html__( 'Add widgets here.', 'electronic-store' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
        	'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Sidebar One', 'electronic-store' ),
			'id'            => 'footer-1',
			'description'   => esc_html__( 'Add widgets here.', 'electronic-store' ),
			'before_widget' => '<section id="%1$s" class="footer-sidebar widget footer-right-sidebar %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title footer-title">',
        	'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Sidebar Two', 'electronic-store' ),
			'id'            => 'footer-2',
			'description'   => esc_html__( 'Add widgets here.', 'electronic-store' ),
			'before_widget' => '<section id="%1$s" class="footer-sidebar widget footer-sidebar-2 %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title footer-title">',
        	'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Sidebar Three', 'electronic-store' ),
			'id'            => 'footer-3',
			'description'   => esc_html__( 'Add widgets here.', 'electronic-store' ),
			'before_widget' => '<section id="%1$s" class="footer-sidebar widget footer-sidebar-3 %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title footer-title">',
        	'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Sidebar Four', 'electronic-store' ),
			'id'            => 'footer-4',
			'description'   => esc_html__( 'Add widgets here.', 'electronic-store' ),
			'before_widget' => '<section id="%1$s" class="footer-sidebar widget footer-sidebar-4 %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title footer-title">',
        	'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Layout Two', 'electronic-store' ),
			'id'            => 'footer-layout-two',
			'description'   => esc_html__( 'Add widgets here.', 'electronic-store' ),
			'before_widget' => '<section id="%1$s" class="footer-sidebar widget footer-layout-two %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title footer-title">',
        	'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'electronic_store_widgets_init' );
