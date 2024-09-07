<?php
/*Blog Page Settings*/

Kirki::add_section( 'sidebar_settings_section', array(
    'title'          => esc_html__( 'Sidebar Settings', 'electronic-store' ),
    'description'          => esc_html__( 'Control Sidebar Of Your Website', 'electronic-store' ),
    'panel'          => 'electronic_store_global_panel',
) );

Kirki::add_field( 'electronic_store_config', [
	'type'        => 'select',
	'settings'    => 'blog_page_sidebar',
	'label'       => esc_html__( 'Blog Page Sidebar', 'electronic-store' ),
	'section'     => 'sidebar_settings_section',
	'default'     => 'no',
	'multiple'    => 1,
	'choices'     => [
		'left' => esc_html__( 'left Sidebar', 'electronic-store' ),
		'right' => esc_html__( 'Right Sidebar', 'electronic-store' ),
		'no' => esc_html__( 'No Sidebar', 'electronic-store' ),
		'both' => esc_html__( 'Left & Right Sidebar', 'electronic-store' ),
		'narrow' => esc_html__( 'No Sidebar Narrow', 'electronic-store' ),
	],
] );

Kirki::add_field( 'electronic_store_config', [
	'type'        => 'select',
	'settings'    => 'blog_page_post_column',
	'label'       => esc_html__( 'Post Column', 'electronic-store' ),
	'section'     => 'sidebar_settings_section',
	'default'    => '3',
	'choices' => [
			'4' => __( '4 Colmun', 'electronic-store' ),
			'3' => __( '3 Column', 'electronic-store' ),
			'2' => __( '2 Column', 'electronic-store' ),
			'1' => __( 'Single Column', 'electronic-store' ),
		],
] );

Kirki::add_field( 'rs_personal_blog_config', array(
    'type'        => 'custom',
    'settings'    => 'sep_after_blog_post_column',
    'label'       => '',
    'section'     => 'sidebar_settings_section',
    'default'     => '<hr>',
) );

Kirki::add_field( 'electronic_store_config', [
	'type'        => 'select',
	'settings'    => 'archive_page_sidebar',
	'label'       => esc_html__( 'Archive Page Sidebar', 'electronic-store' ),
	'section'     => 'sidebar_settings_section',
	'default'     => 'no',
	'multiple'    => 1,
	'choices'     => [
		'left' => esc_html__( 'left Sidebar', 'electronic-store' ),
		'right' => esc_html__( 'Right Sidebar', 'electronic-store' ),
		'no' => esc_html__( 'No Sidebar', 'electronic-store' ),
		'both' => esc_html__( 'Left & Right Sidebar', 'electronic-store' ),
		'narrow' => esc_html__( 'No Sidebar Narrow', 'electronic-store' ),
	],
] );

Kirki::add_field( 'electronic_store_config', [
	'type'        => 'select',
	'settings'    => 'archive_page_post_column',
	'label'       => esc_html__( 'Post Column', 'electronic-store' ),
	'section'     => 'sidebar_settings_section',
	'default'    => '3',
	'choices' => [
			'4' => __( '4 Colmun', 'electronic-store' ),
			'3' => __( '3 Column', 'electronic-store' ),
			'2' => __( '2 Column', 'electronic-store' ),
			'1' => __( 'Single Column', 'electronic-store' ),
		],
] );

Kirki::add_field( 'rs_personal_blog_config', array(
    'type'        => 'custom',
    'settings'    => 'sep_after_archive_post_column',
    'label'       => '',
    'section'     => 'sidebar_settings_section',
    'default'     => '<hr>',
) );

Kirki::add_field( 'electronic_store_config', [
	'type'        => 'select',
	'settings'    => 'page_sidebar',
	'label'       => esc_html__( 'Page Sidebar', 'electronic-store' ),
	'section'     => 'sidebar_settings_section',
	'default'     => 'no',
	'multiple'    => 1,
	'choices'     => [
		'left' => esc_html__( 'left Sidebar', 'electronic-store' ),
		'right' => esc_html__( 'Right Sidebar', 'electronic-store' ),
		'no' => esc_html__( 'No Sidebar', 'electronic-store' ),
		'both' => esc_html__( 'Left & Right Sidebar', 'electronic-store' ),
		'narrow' => esc_html__( 'No Sidebar Narrow', 'electronic-store' ),
	],
] );

Kirki::add_field( 'electronic_store_config', [
	'type'        => 'select',
	'settings'    => 'post_sidebar',
	'label'       => esc_html__( 'Post Sidebar', 'electronic-store' ),
	'section'     => 'sidebar_settings_section',
	'default'     => 'no',
	'multiple'    => 1,
	'choices'     => [
		'left' => esc_html__( 'left Sidebar', 'electronic-store' ),
		'right' => esc_html__( 'Right Sidebar', 'electronic-store' ),
		'no' => esc_html__( 'No Sidebar', 'electronic-store' ),
		'both' => esc_html__( 'Left & Right Sidebar', 'electronic-store' ),
		'narrow' => esc_html__( 'No Sidebar Narrow', 'electronic-store' ),
	],
] );
Kirki::add_field( 'rs_personal_blog_config', array(
    'type'        => 'custom',
    'settings'    => 'sep_after_post_sidebar',
    'label'       => '',
    'section'     => 'sidebar_settings_section',
    'default'     => '<hr>',
) );
Kirki::add_field( 'electronic_store_config', [
	'type'        => 'select',
	'settings'    => 'search_page_sidebar',
	'label'       => esc_html__( 'Search Page Sidebar', 'electronic-store' ),
	'section'     => 'sidebar_settings_section',
	'default'     => 'no',
	'choices'     => [
		'left' => esc_html__( 'left Sidebar', 'electronic-store' ),
		'right' => esc_html__( 'Right Sidebar', 'electronic-store' ),
		'no' => esc_html__( 'No Sidebar', 'electronic-store' ),
		'both' => esc_html__( 'Left & Right Sidebar', 'electronic-store' ),
		'narrow' => esc_html__( 'No Sidebar Narrow', 'electronic-store' ),
	],
] );

Kirki::add_field( 'electronic_store_config', [
	'type'        => 'select',
	'settings'    => 'search_page_post_column',
	'label'       => esc_html__( 'Post Column', 'electronic-store' ),
	'section'     => 'sidebar_settings_section',
	'default'    => '3',
	'choices' => [
			'4' => __( '4 Colmun', 'electronic-store' ),
			'3' => __( '3 Column', 'electronic-store' ),
			'2' => __( '2 Column', 'electronic-store' ),
			'1' => __( 'Single Column', 'electronic-store' ),
		],
] );