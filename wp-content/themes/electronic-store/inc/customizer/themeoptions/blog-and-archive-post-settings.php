<?php
/*Blog Page Settings*/

Kirki::add_section( 'blog_and_archive_post_section', array(
    'title'          => esc_html__( 'Blog & Archive Post Settings', 'electronic-store' ),
    'panel'          => 'electronic_store_global_panel',
) );

Kirki::add_field( 'electronic_store_config', [
    'type'        => 'switch',
    'settings'    => 'active_masonry_layout',
    'label'       => esc_html__( 'Activate Masonry Layout', 'electronic-store' ),
    'section'     => 'blog_and_archive_post_section',
    'default'     => '1',
    'choices' => [
        'on'  => esc_html__( 'Activate', 'electronic-store' ),
        'off' => esc_html__( 'Deactivate', 'electronic-store' )
    ]
] );

Kirki::add_field( 'rs_personal_blog_config', array(
    'type'        => 'custom',
    'settings'    => 'sep_after_post_column',
    'label'       => '',
    'section'     => 'blog_and_archive_post_section',
    'default'     => '<hr>',
) );

Kirki::add_field( 'electronic_store_config', [
    'type'        => 'toggle',
    'settings'    => 'show_post_category',
    'label'       => esc_html__( 'Show Post Category', 'electronic-store' ),
    'section'     => 'blog_and_archive_post_section',
    'default'     => '1',
] );

Kirki::add_field( 'electronic_store_config', [
    'type'        => 'toggle',
    'settings'    => 'show_post_title',
    'label'       => esc_html__( 'Show Post Title', 'electronic-store' ),
    'section'     => 'blog_and_archive_post_section',
    'default'     => '1',
] );

Kirki::add_field( 'electronic_store_config', [
    'type'        => 'toggle',
    'settings'    => 'show_post_author',
    'label'       => esc_html__( 'Show Post Author', 'electronic-store' ),
    'section'     => 'blog_and_archive_post_section',
    'default'     => '1',
] );

Kirki::add_field( 'electronic_store_config', [
    'type'        => 'toggle',
    'settings'    => 'show_post_thumbnail',
    'label'       => esc_html__( 'Thumbnail  On//Off', 'electronic-store' ),
    'section'     => 'blog_and_archive_post_section',
    'default'     => '1',
] );
Kirki::add_field( 'electronic_store_config', [
    'type'        => 'toggle',
    'settings'    => 'show_post_excerpt',
    'label'       => esc_html__( 'Show Post Excerpt', 'electronic-store' ),
    'section'     => 'blog_and_archive_post_section',
    'default'     => '1',
] );
Kirki::add_field( 'electronic_store_config', [
    'type'        => 'number',
    'settings'    => 'post_loop_excerpt_limit',
    'label'       => esc_html__( 'Post Excerpt Limit', 'electronic-store' ),
    'section'     => 'blog_and_archive_post_section',
    'default'     => 42,
    'choices'     => [
        'min'  => 0,
        'max'  => 400,
        'step' => 1,
    ],
    'active_callback' => [
        [
            'setting'  => 'show_post_excerpt',
            'operator' => '==',
            'value'    => '1',
        ],
    ],
] );

Kirki::add_field( 'electronic_store_config', [
    'type'        => 'toggle',
    'settings'    => 'show_post_date',
    'label'       => esc_html__( 'Show Post Date', 'electronic-store' ),
    'section'     => 'blog_and_archive_post_section',
    'default'     => '1',
] );
