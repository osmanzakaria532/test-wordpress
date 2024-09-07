<?php
Kirki::add_section( 'page_banner_settings_section', array(
    'title'          => esc_html__( 'Page Banner Settings', 'electronic-store' ),
    'panel'          => 'electronic_store_global_panel',
    'capability'     => 'edit_theme_options',
    'priority'      => 20,
) );

Kirki::add_field( 'electronic_store_config', [
    'type'     => 'toggle',
    'settings' => 'show_page_banner_on_archive_pages',
    'label'    => esc_html__( 'Show On Archive Pages', 'electronic-store' ),
    'section'  => 'page_banner_settings_section',
    'default'   => '1',
    'choices' => [
        'on'  => esc_html__( 'Show', 'electronic-store' ),
        'off' => esc_html__( 'Hide', 'electronic-store' )
    ]
] );

Kirki::add_field( 'electronic_store_config', [
    'type'     => 'toggle',
    'settings' => 'show_page_banner_on_pages',
    'label'    => esc_html__( 'Show On Pages', 'electronic-store' ),
    'section'  => 'page_banner_settings_section',
    'default'   => '1',
    'choices' => [
        'on'  => esc_html__( 'Show', 'electronic-store' ),
        'off' => esc_html__( 'Hide', 'electronic-store' )
    ]
] );

Kirki::add_field( 'electronic_store_config', [
    'type'        => 'number',
    'settings'    => 'page_banner_custom_height',
    'label'       => esc_html__( 'Page Banner Height', 'electronic-store' ),
    'section'     => 'page_banner_settings_section',
    'default'     => '200',
    'transport' => 'postMessage',
    'active_callback'   => function(){
        $showPageHeader = get_theme_mod('show_page_header', true);
        if (true == $showPageHeader) {
            return true;
        }
        return false;
    }
] );


Kirki::add_field( 'electronic_store_config', [
    'type'        => 'background',
    'settings'    => 'page_banner_background',
    'label'       => esc_html__( 'Page Banner Background', 'electronic-store' ),
    'section'     => 'page_banner_settings_section',
    'default'     => [
        'background-color'      => '#f8f8f8',
        'background-image'      => '',
        'background-repeat'     => 'repeat',
        'background-position'   => 'center center',
        'background-size'       => 'cover',
        'background-attachment' => 'scroll',
    ],
    'transport'   => 'auto',
    'output'      => [
        [
            'element' => 'section.page-header-area, .books-category-archive-header',
        ],
    ],
    'active_callback' => [
        [
            'setting'  => 'show_page_header',
            'operator' => '==',
            'value'    => true,
        ]
    ],
] );

Kirki::add_field( 'electronic_store_config', [
    'type'        => 'color',
    'settings'    => 'page_banner_overlay_color',
    'label'       => __( 'Banner Overly Color', 'electronic-store' ),
    'section'     => 'page_banner_settings_section',
    'transport'   => 'auto',
    'default'       => 'rgba(0, 0, 0, 0.3)',
    'choices'     => [
            'alpha' => true,
        ],
    'output' => array(
        array(
            'element'  => '.page_banner_overlay',
            'property' => 'background',
        ),
    ),
    'active_callback' => [
        [
            'setting'  => 'show_page_header',
            'operator' => '==',
            'value'    => true,
        ]
    ],
] );

Kirki::add_field( 'electronic_store_config', [
	'type'        => 'typography',
	'settings'    => 'page_banner_title_typography',
	'label'       => esc_html__( 'Page Title Typography', 'electronic-store' ),
	'section'     => 'page_banner_settings_section',
	'default'     => [
		'font-family'    => 'Roboto',
		'variant'        => '700',
		'font-size'      => '2.5rem',
		'line-height'    => '1.6',
		'letter-spacing' => '0px',
		'color'          => '#000000',
		'text-transform' => 'none',
		'text-align'     => 'center',
	],
	'active_callback' => [
		[
			'setting'  => 'show_page_header',
			'operator' => '==',
			'value'    => true,
		]
	],
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => 'section.page-header-area h1',
		],
	],
] );