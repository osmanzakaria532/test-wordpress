<?php
Kirki::add_section( 'social_links_settings_section', array(
    'title'          => esc_html__( 'Social Links Settings', 'electronic-store' ),
    'panel'          => 'electronic_store_global_panel',
    'capability'     => 'edit_theme_options',
) );

$social_media_fields = array(
    'facebook' => 'Facebook',
    'twitter' => 'Twitter',
    'instagram' => 'Instagram',
    'tiktok' => 'Tiktok',
    'linkedin' => 'Linkedin',
    'pinterest' => 'Pinterest',
    'line' => 'Line',
    'github' => 'Github',
    'discord' => 'Discord',
    'youtube' => 'Youtube',
    'wordpress' => 'WordPress',
    'slack' => 'Slack',
    'apple' => 'Apple',
    'stack-overflow' => 'Stack-overflow',
    'kickstarer' => 'Kickstarer',
    'dribble' => 'Dribble',
    'codepen' => 'Codepen',
    'whatsapp' => 'Whatsapp',
    'medium' => 'Medium',
    'goodreads' => 'Goodreads'
);

foreach ( $social_media_fields as $field => $label ) {
    Kirki::add_field( 'electronic_store_config', array(
        'type' => 'text',
        'settings' => $field,
        'label' => __( $label . ' URL', 'electronic-store' ),
        'section' => 'social_links_settings_section',
        'default' => '#',
    ) );
}

