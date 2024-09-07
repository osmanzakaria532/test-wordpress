<?php
/**
 * Blog single content customization
 */
Kirki::add_section( 'post_page_section', array(
    'title'          => esc_html__( 'Post Page Settings', 'electronic-store' ),
    'description'    => esc_html__( 'Customize The Looks of Post Page', 'electronic-store' ),
    'panel'          => 'electronic_store_global_panel',
) );
Kirki::add_field( 'electronic_store_config', [
    'type'        => 'toggle',
    'settings'    => 'show_single_post_category',
    'label'       => esc_html__( 'Show Post Category', 'electronic-store' ),
    'section'     => 'post_page_section',
    'default'     => '1',
] );
Kirki::add_field( 'electronic_store_config', [
    'type'        => 'toggle',
    'settings'    => 'show_single_post_author',
    'label'       => esc_html__( 'Show Post Author', 'electronic-store' ),
    'section'     => 'post_page_section',
    'default'     => '1',
] );
Kirki::add_field( 'electronic_store_config', [
    'type'        => 'toggle',
    'settings'    => 'show_single_post_thumbnail',
    'label'       => esc_html__( 'Show Post Thumbnail', 'electronic-store' ),
    'section'     => 'post_page_section',
    'default'     => '1',

] );
Kirki::add_field( 'electronic_store_config', [
    'type'        => 'toggle',
    'settings'    => 'show_single_post_title',
    'label'       => esc_html__( 'Show Post Title', 'electronic-store' ),
    'section'     => 'post_page_section',
    'default'     => '1',
] );
Kirki::add_field( 'electronic_store_config', [
    'type'        => 'toggle',
    'settings'    => 'show_single_post_date',
    'label'       => esc_html__( 'Show Post Date', 'electronic-store' ),
    'section'     => 'post_page_section',
    'default'     => '1',

] );
Kirki::add_field( 'electronic_store_config', [
    'type'        => 'toggle',
    'settings'    => 'show_single_post_comments',
    'label'       => esc_html__( 'Show Post Comments', 'electronic-store' ),
    'section'     => 'post_page_section',
    'default'     => '1',

] );
Kirki::add_field( 'electronic_store_config', [
    'type'        => 'toggle',
    'settings'    => 'show_single_post_tags',
    'label'       => esc_html__( 'Show Post Tags', 'electronic-store' ),
    'section'     => 'post_page_section',
    'default'     => '1',

] );
Kirki::add_field( 'electronic_store_config', [
    'type'        => 'toggle',
    'settings'    => 'show_post_author_box',
    'label'       => esc_html__( 'Show Post Author Box', 'electronic-store' ),
    'section'     => 'post_page_section',
    'default'     => '1',
] );
Kirki::add_field( 'electronic_store_config', [
    'type'        => 'toggle',
    'settings'    => 'show_recommend_posts',
    'label'       => esc_html__( 'Show Recommend Posts', 'electronic-store' ),
    'section'     => 'post_page_section',
    'default'     => '1',
] );
Kirki::add_field( 'electronic_store_config', [
    'type'        => 'toggle',
    'settings'    => 'show_post_navigation',
    'label'       => esc_html__( 'Show Post Navigation', 'electronic-store' ),
    'section'     => 'post_page_section',
    'default'     => '1',
] );

Kirki::add_field( 'electronic_store_config', [
    'type'        => 'typography',
    'settings'    => 'single_post_title_typography',
    'label'       => esc_html__( 'Post Title Typography', 'electronic-store' ),
    'section'     => 'post_page_section',
    'default'     => [
        'font-family'    => 'Roboto',
        'variant'        => 'bold',
        'font-size'      => '2.25rem',
        'line-height'    => '1.4',
        'letter-spacing' => '0px',
        'color'          => '#000000',
        'text-transform' => 'none',
        'text-align'     => 'left',
    ],
    'transport'   => 'auto',
    'output'      => [
        [
            'element' => '.post-details-page .electronic-store-standard-post__post-title h1.single-post-title',
        ],
    ],
] );

do_action('bab_post_page_settings');