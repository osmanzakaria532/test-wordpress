<?php
Kirki::add_section( 'home_banner_settings_section', array(
    'title'          => esc_html__( 'Home Banner Settings', 'electronic-store' ),
    'panel'          => 'electronic_store_global_panel',
    'capability'     => 'edit_theme_options',
    'priority'      => 20,
) );

Kirki::add_field( 'electronic_store_config', [
    'type'     => 'toggle',
    'settings' => 'show_home_banner',
    'label'    => esc_html__( 'Show Banner', 'electronic-store' ),
    'section'  => 'home_banner_settings_section',
    'default'   => '0',
    'choices' => [
        'on'  => esc_html__( 'Show', 'electronic-store' ),
        'off' => esc_html__( 'Hide', 'electronic-store' )
    ],
] );

Kirki::add_field( 'electronic_store_config', [
    'type'     => 'textarea',
    'settings' => 'home_banner_subtitle',
    'label'    => esc_html__( 'Sub Title', 'electronic-store' ),
    'section'  => 'home_banner_settings_section',
    'default'  => wp_kses_post( 'Hello Spring 2024', 'electronic-store' ),
    'transport' => 'postMessage',
    'js_vars'   => [
        [
            'element'  => '.electronic-store-home-banner h4',
            'function' => 'html',
        ]
    ],
    'active_callback'   => function(){
        $showPageHeader = get_theme_mod('show_home_banner', true);
        if (true == $showPageHeader) {
            return true;
        }
        return false;
    }
] );

Kirki::add_field( 'electronic_store_config', [
    'type'     => 'textarea',
    'settings' => 'home_banner_title',
    'label'    => esc_html__( 'Title', 'electronic-store' ),
    'section'  => 'home_banner_settings_section',
    'default'  => wp_kses_post( 'SALL OF UP TO 50%', 'electronic-store' ),
    'transport' => 'postMessage',
    'js_vars'   => [
        [
            'element'  => '.electronic-store-home-banner h2',
            'function' => 'html',
        ]
    ],
    'active_callback'   => function(){
        $showPageHeader = get_theme_mod('show_home_banner', true);
        if (true == $showPageHeader) {
            return true;
        }
        return false;
    }
] );

Kirki::add_field( 'electronic_store_config', [
    'type'     => 'textarea',
    'settings' => 'home_banner_desc',
    'label'    => esc_html__( 'Description', 'electronic-store' ),
    'section'  => 'home_banner_settings_section',
    'default'  => wp_kses_post( 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Natus vitae sint, blanditiis consequuntur iste ullam reprehenderit eum officia possimus eligendi cupiditate sed deserunt libero autem praesentium, quod tempore corporis ad.', 'electronic-store' ),
    'transport' => 'postMessage',
    'js_vars'   => [
        [
            'element'  => '.electronic-store-home-banner p',
            'function' => 'html',
        ]
    ],
    'active_callback'   => function(){
        $showPageHeader = get_theme_mod('show_home_banner', true);
        if (true == $showPageHeader) {
            return true;
        }
        return false;
    }
] );

Kirki::add_field( 'electronic_store_config', [
    'type'     => 'text',
    'settings' => 'home_banner_button_text',
    'label'    => esc_html__( 'Button Text', 'electronic-store' ),
    'section'  => 'home_banner_settings_section',
    'default'  => esc_html__( 'Shop Now', 'electronic-store' ),
    'transport' => 'postMessage',
    'js_vars'   => [
        [
            'element'  => '.electronic-store-home-banner a span.button-text',
            'function' => 'html',
        ]
    ],
    'active_callback'   => function(){
        $showPageHeader = get_theme_mod('show_home_banner', true);
        if (true == $showPageHeader) {
            return true;
        }
        return false;
    }
] );

Kirki::add_field( 'electronic_store_config', [
    'type'     => 'text',
    'settings' => 'home_banner_button_link',
    'label'    => esc_html__( 'Button Link', 'electronic-store' ),
    'section'  => 'home_banner_settings_section',
    'default'  => '#',
    'transport' => 'refresh',
    'active_callback'   => function(){
        $showPageHeader = get_theme_mod('show_home_banner', true);
        if (true == $showPageHeader) {
            return true;
        }
        return false;
    }
] );

Kirki::add_field( 'electronic_store_config', [
    'type'     => 'image',
    'settings' => 'home_banner_featured_image',
    'label'    => esc_html__( 'Featured Image', 'electronic-store' ),
    'section'  => 'home_banner_settings_section',
    'transport' => 'refresh',
    'choices'     => [
            'save_as' => 'array',
        ],
    'active_callback'   => function(){
        $showPageHeader = get_theme_mod('show_home_banner', true);
        if (true == $showPageHeader) {
            return true;
        }
        return false;
    }
] );

Kirki::add_field( 'electronic_store_config', [
    'type'        => 'number',
    'settings'    => 'home_banner_custom_height',
    'label'       => esc_html__( 'Banner Height', 'electronic-store' ),
    'section'     => 'home_banner_settings_section',
    'default'     => '700',
    'transport' => 'postMessage',
    'active_callback'   => function(){
        $showPageHeader = get_theme_mod('show_home_banner', true);
        if (true == $showPageHeader) {
            return true;
        }
        return false;
    }
] );


Kirki::add_field( 'electronic_store_config', [
    'type'        => 'background',
    'settings'    => 'home_banner_background',
    'label'       => esc_html__( 'Banner Background', 'electronic-store' ),
    'section'     => 'home_banner_settings_section',
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
            'element' => '.electronic-store-home-banner',
        ],
    ],
    'active_callback' => [
        [
            'setting'  => 'show_home_banner',
            'operator' => '==',
            'value'    => true,
        ]
    ],
] );

Kirki::add_field( 'electronic_store_config', [
    'type'        => 'color',
    'settings'    => 'home_banner_overlay_color',
    'label'       => __( 'Banner Overly Color', 'electronic-store' ),
    'section'     => 'home_banner_settings_section',
    'transport'   => 'auto',
    'default'       => 'rgba(0, 0, 0, 0.3)',
    'choices'     => [
            'alpha' => true,
        ],
    'output' => array(
        array(
            'element'  => '.electronic-store-home-banner .banner_overlay',
            'property' => 'background',
        ),
    ),
    'active_callback' => [
        [
            'setting'  => 'show_home_banner',
            'operator' => '==',
            'value'    => true,
        ]
    ],
] );

Kirki::add_field( 'electronic_store_config', [
	'type'        => 'typography',
	'settings'    => 'home_banner_subtitle_typography',
	'label'       => esc_html__( 'Subtitle Typography', 'electronic-store' ),
	'section'     => 'home_banner_settings_section',
	'default'     => [
		'font-family'    => 'Roboto',
		'variant'        => '700',
		'font-size'      => '1.5rem',
		'line-height'    => '1.6',
		'letter-spacing' => '0px',
		'color'          => '#fffff',
		'text-transform' => 'none',
		'text-align'     => 'left',
	],
	'active_callback' => [
		[
			'setting'  => 'show_home_banner',
			'operator' => '==',
			'value'    => true,
		]
	],
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => '.electronic-store-home-banner h4',
		],
	],
] );

Kirki::add_field( 'electronic_store_config', [
    'type'        => 'typography',
    'settings'    => 'home_banner_title_typography',
    'label'       => esc_html__( 'Title Typography', 'electronic-store' ),
    'section'     => 'home_banner_settings_section',
    'default'     => [
        'font-family'    => 'Roboto',
        'variant'        => '900',
        'font-size'      => '46px',
        'line-height'    => '1.6',
        'letter-spacing' => '0px',
        'color'          => '#fffff',
        'text-transform' => 'none',
        'text-align'     => 'left',
    ],
    'active_callback' => [
        [
            'setting'  => 'show_home_banner',
            'operator' => '==',
            'value'    => true,
        ]
    ],
    'transport'   => 'auto',
    'output'      => [
        [
            'element' => '.electronic-store-home-banner h2',
        ],
    ],
] );

Kirki::add_field( 'electronic_store_config', [
    'type'        => 'typography',
    'settings'    => 'home_banner_description_typography',
    'label'       => esc_html__( 'Description Typography', 'electronic-store' ),
    'section'     => 'home_banner_settings_section',
    'default'     => [
        'font-family'    => 'Roboto',
        'variant'        => '400',
        'font-size'      => '1rem',
        'line-height'    => '1.6',
        'letter-spacing' => '0px',
        'color'          => '#fffff',
        'text-transform' => 'none',
        'text-align'     => 'left',
    ],
    'active_callback' => [
        [
            'setting'  => 'show_home_banner',
            'operator' => '==',
            'value'    => true,
        ]
    ],
    'transport'   => 'auto',
    'output'      => [
        [
            'element' => '.electronic-store-home-banner p',
        ],
    ],
] );