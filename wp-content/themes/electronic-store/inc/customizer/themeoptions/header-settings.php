<?php
Kirki::add_section( 'electronic_store_theme_header_section', array(
    'title'          => esc_html__( 'Header Settings', 'electronic-store' ),
    'panel'          => 'electronic_store_global_panel',
    'priority'      => 10,
) );

Kirki::add_field( 'electronic_store_config', [
    'type'        => 'color',
    'settings'    => 'header_bg_color',
    'label'       => __( 'Background Color', 'electronic-store' ),
    'section'     => 'electronic_store_theme_header_section',
    'default'     => '#ffffff',
    'transport'   => 'auto',
    'priority'  => 3,
    'output' => array(
        array(
            'element'  => 'header#masthead',
            'property' => 'background-color',
        ),
    ),
] );

Kirki::add_field( 'electronic_store_config', [
    'type'        => 'typography',
    'settings'    => 'header_title_typography',
    'label'       => esc_html__( 'Site Title Typography', 'electronic-store' ),
    'section'     => 'title_tagline',
    'priority'     => 80,
    'default'     => [
        'font-family'    => 'Roboto',
        'variant'        => 'bold',
        'font-size'      => '1.3rem',
        'line-height'    => '1.6',
        'letter-spacing' => '0px',
        'color'          => '#000000',
        'text-transform' => 'none',
    ],
    'transport'   => 'auto',
    'output'      => [
        [
            'element' => '.site-branding .site-title a',
        ],
    ],
] );

Kirki::add_field( 'electronic_store_config', [
    'type'        => 'typography',
    'settings'    => 'header_desc_typography',
    'label'       => esc_html__( 'Site Description Typography', 'electronic-store' ),
    'section'     => 'title_tagline',
    'priority'     => 85,
    'default'     => [
        'font-family'    => 'Roboto',
        'variant'        => 'regular',
        'font-size'      => '1rem',
        'line-height'    => '1.4',
        'letter-spacing' => '0px',
        'color'          => '#000000',
        'text-transform' => 'none',
    ],
    'transport'   => 'auto',
    'output'      => [
        [
            'element' => '.site-branding p.site-description',
        ],
    ],
] );

Kirki::add_field( 'electronic_store_config', [
    'type'        => 'typography',
    'settings'    => 'header_menu_typography',
    'label'       => esc_html__( 'Menu Typography', 'electronic-store' ),
    'section'     => 'electronic_store_theme_header_section',
    'default'     => [
        'font-family'    => 'Roboto',
        'variant'        => 'regular',
        'font-size'      => '1rem',
        'line-height'    => '1.6',
        'letter-spacing' => '0px',
        'color'          => '#000000',
        'text-transform' => 'none',
    ],
    'transport'   => 'auto',
    'priority'  => 8,
    'output'      => [
        [
            'element' => '#cssmenu>ul>li>a',
        ],
    ],
] );

Kirki::add_field( 'electronic_store_config', [
    'type'        => 'color',
    'settings'    => 'header_icon_color',
    'label'       => esc_html__( 'Icon Color', 'electronic-store' ),
    'section'     => 'electronic_store_theme_header_section',
    'default'     => '#000000',
    'transport'   => 'auto',
    'priority'      => 12,
    'output'      => [
        [
            'element' => '.social-links-wrapper.header-social-links a',
        ],
    ],
] );


/**
 * Pro Settings
 */
Kirki::add_field( 'electronic_store_config', [
    'type'        => 'select',
    'settings'    => 'header_container_size',
    'label'       => esc_html__( 'Header Area Container Size', 'electronic-store' ),
    'section'     => 'electronic_store_theme_header_section',
    'default'     => 'container',
    'priority'  => 1,
    'choices'   => [
        'container' => __('Container', 'electronic-store'),
        'container-fluid' => __('Container Full Width', 'electronic-store'),
        'container-custom-size' => __('Container Custom Size', 'electronic-store'),
    ]
] );

Kirki::add_field( 'electronic_store_config', [
    'type'        => 'number',
    'settings'    => 'header_container_custom_size',
    'label'       => esc_html__( 'Header Container Custom Size px', 'electronic-store' ),
    'section'     => 'electronic_store_theme_header_section',
    'default'     => '1170',
    'priority'  => 1,
    'transport' => 'postMessage',
    'active_callback'   => function(){
        $containerSize = get_theme_mod('header_container_size', 'container');
        if ('container-custom-size' == $containerSize) {
            return true;
        }
        return false;
    }
] );

Kirki::add_field( 'electronic_store_config', [
    'type'        => 'toggle',
    'settings'    => 'show_cart_icon',
    'label'       => esc_html__( 'Show Cart Icon', 'electronic-store' ),
    'section'     => 'electronic_store_theme_header_section',
    'default'     => '0',
    'priority'  => 2
] );

Kirki::add_field( 'electronic_store_config', [
    'type'        => 'color',
    'settings'    => 'header_bg_overlay_color',
    'label'       => __( 'Header Overly Color', 'electronic-store' ),
    'section'     => 'electronic_store_theme_header_section',
    'transport'   => 'auto',
    'priority'    => 4,
    'choices'     => [
            'alpha' => true,
        ],
    'output' => array(
        array(
            'element'  => '.header_overlay_color',
            'property' => 'background',
        ),
    ),
    'active_callback' => function(){
        $headerImg = get_header_image();
        if (!empty($headerImg)) {
            return true;
        }
        return false;
    }
] );

Kirki::add_field( 'electronic_store_config', [
    'type'        => 'color',
    'settings'    => 'header_border_color',
    'label'       => __( 'Header Border Color', 'electronic-store' ),
    'section'     => 'electronic_store_theme_header_section',
    'default'     => '#f8f8f8',
    'transport'   => 'auto',
    'priority'    => 5,
    'choices'     => [
            'alpha' => true,
        ],
    'output' => array(
        array(
            'element'  => 'header.site-header.header-two .header-menu-area, header.site-header.header-three .header-menu-area, header.site-header.header-five .header-menu-area',
            'property' => 'border-top-color',
        ),
        array(
            'element'  => 'header.site-header.header-four .header-menu-area, header.site-header.header-three .header-menu-area, header.site-header.header-one',
            'property' => 'border-bottom-color',
        ),
    ),
] );

Kirki::add_field( 'electronic_store_config', [
    'type'        => 'color',
    'settings'    => 'header_menu_hover_color',
    'label'       => __( 'Menu Hover Color', 'electronic-store' ),
    'section'     => 'electronic_store_theme_header_section',
    'default'     => '#0989ff',
    'transport'   => 'auto',
    'priority'      => 9,
    'output' => array(
        array(
            'element'  => '#cssmenu>ul>li:hover>a',
            'property' => 'color',
        ),
    ),

] );

Kirki::add_field( 'electronic_store_config', [
    'type'        => 'color',
    'settings'    => 'header_sub_menu_hover_color',
    'label'       => __( 'Sub Menu Hover Color', 'electronic-store' ),
    'section'     => 'electronic_store_theme_header_section',
    'default'     => '#0989ff',
    'transport'   => 'auto',
    'priority'    => 10,
    'output' => array(
        array(
            'element'  => '#cssmenu ul ul li:hover>a, #cssmenu ul ul li a:hover',
            'property' => 'color',
        ),
    ),
] );

Kirki::add_field( 'electronic_store_config', [
    'type'        => 'typography',
    'settings'    => 'header_social_icons_style',
    'label'       => esc_html__( 'Social Icons Styles', 'electronic-store' ),
    'section'     => 'electronic_store_theme_header_section',
    'default'     =>  '1',
    'transport'   => 'auto',
    'priority'    => 11,
    'default'     => [
        'font-size'      => '1rem',
    ],
    'output'      => [
        [
            'element' => '.social-links-wrapper.header-social-links a',
        ],
    ],
] );

Kirki::add_field( 'electronic_store_config', [
    'type'        => 'color',
    'settings'    => 'header_icon_hover_color',
    'label'       => __( 'Header Icon Hover Color', 'electronic-store' ),
    'section'     => 'electronic_store_theme_header_section',
    'default'     => '#0989ff',
    'transport'   => 'auto',
    'priority'    => 13,
    'output' => array(
        array(
            'element'  => '.social-links-wrapper.header-social-links a:hover',
            'property' => 'color',
        ),
    ),
] );

Kirki::add_field( 'electronic_store_config', [
    'type'        => 'typography',
    'settings'    => 'mobile_menu_icon_typography',
    'label'       => esc_html__( 'Mobile Menu Icon', 'electronic-store' ),
    'section'     => 'electronic_store_theme_header_section',
    'priority'    => 14,
    'default'     => [
        'font-size'      => '1.2rem',
        'color'          => '#000000',
    ],
    'transport'   => 'auto',
    'output'      => [
        [
            'element' => '#cssmenu.small-screen #menu-button',
        ],
    ],
] );

Kirki::add_field( 'electronic_store_config', [
    'type'        => 'color',
    'settings'    => 'mobile_menu_icon_hover_color',
    'label'       => __( 'Mobile Menu Icon Hover', 'electronic-store' ),
    'section'     => 'electronic_store_theme_header_section',
    'default'     => '#0989ff',
    'priority'    => 15,
    'transport'   => 'auto',
    'output' => array(
        array(
            'element'  => '#cssmenu.small-screen #menu-button:hover',
            'property' => 'color',
        ),
    ),
] );

Kirki::add_field( 'electronic_store_config', [
    'type'        => 'color',
    'settings'    => 'mobile_menu_item_hover_color',
    'label'       => __( 'Mobile Menu Items Border Color', 'electronic-store' ),
    'section'     => 'electronic_store_theme_header_section',
    'default'     => '#0989ff',
    'priority'    => 15,
    'transport'   => 'auto',
    'output' => array(
        array(
            'element'  => '#cssmenu.small-screen ul li, #cssmenu.small-screen ul.menu, #cssmenu.small-screen ul ul li:first-child, #cssmenu.small-screen ul ul li',
            'property' => 'border-color',
        ),
        array(
            'element'  => '#cssmenu.small-screen #menu-button:focus',
            'property' => 'outline-color',
        ),
    ),
] );