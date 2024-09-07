<?php
Kirki::add_section( 'electronic_store_container_settings_section', array(
    'title'          => esc_html__( 'Container Settings.', 'electronic-store' ),
    'panel'          => 'electronic_store_global_panel',
    'capability'     => 'edit_theme_options',
    'priority'      => 1
) );
Kirki::add_field( 'blog_author_blog_config', [
    'type'        => 'select',
    'settings'    => 'electronic_store_container_size',
    'label'       => esc_html__( 'Container Width', 'electronic-store' ),
    'section'     => 'electronic_store_container_settings_section',
    'default'     => 'container',
    'choices'     => [
        'container'   => esc_html__( 'Container Default', 'electronic-store' ),
        'container-fluid'   => esc_html__( 'Container Full Width', 'electronic-store' ),
        'custom-width'   => esc_html__( 'Custom Width', 'electronic-store' ),
    ],
] );
Kirki::add_field( 'blog_author_blog_config', [
    'type'        => 'number',
    'settings'    => 'container_custom_width',
    'label'       => esc_html__( 'Container Custom Width', 'electronic-store' ),
    'label'       => esc_html__( 'The width will be applied to the entire website container on larger screens, while retaining its default size on mobile and tablet screens.', 'electronic-store' ),
    'section'     => 'electronic_store_container_settings_section',
    'default'     => '1200',
    'transport'		=> 'postMessage',
    'active_callback'	=> function(){
    	$containerWidthType = get_theme_mod('electronic_store_container_size', 'container');
    	if ('custom-width' == $containerWidthType) {
    		return true;
    	}
    	return false;
    }
] );
