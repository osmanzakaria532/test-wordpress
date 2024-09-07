<?php
Kirki::add_section( 'copyright_section', array(
    'title'          => esc_html__( 'Copyright Settings', 'electronic-store' ),
    'panel'          => 'electronic_store_global_panel',
    'capability'     => 'edit_theme_options',
) );

Kirki::add_field( 'electronic_store_config', [
	'type'     => 'editor',
	'settings' => 'copyright_text',
	'label'    => esc_html__( 'Edit Copyright Text', 'electronic-store' ),
	'section'  => 'copyright_section',
	'default'  => wp_kses_post( 'Copyright <i class="fa fa-copyright" aria-hidden="true"></i> 2024. All rights reserved.', 'electronic-store' ),
	'transport' => 'postMessage',
    'js_vars'   => [
        [
            'element'  => '.site-copyright .site-info .site-copyright-text',
            'function' => 'html',
        ]
    ],
] );