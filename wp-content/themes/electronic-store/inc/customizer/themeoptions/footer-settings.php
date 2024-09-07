<?php
Kirki::add_section( 'footer_section', array(
    'title'          => esc_html__( 'Footer Section', 'electronic-store' ),
    'panel'          => 'electronic_store_global_panel',
    'capability'     => 'edit_theme_options',
) );

Kirki::add_field( 'electronic_store_config', array(
    'type'        => 'custom',
    'settings'    => 'separator_before_footer_top_section',
    'label'       => '',
    'section'     => 'footer_section',
    'default'     => '<div class="settings-separator">'.esc_html__('Footer Top Section', 'electronic-store').'</div>',
) );

Kirki::add_field( 'electronic_store_config', [
	'type'        => 'toggle',
	'settings'    => 'show_footer_top_section',
	'label'       => esc_html__( 'Show Footer Top Section', 'electronic-store' ),
	'section'     => 'footer_section',
	'default'    => '1',
] );

Kirki::add_field( 'electronic_store_config', [
	'type'        => 'color',
	'settings'    => 'footer_top_bg_color',
	'label'       => __( 'Background Color', 'electronic-store' ),
	'section'     => 'footer_section',
	'default'     => '#1a1a1a',
	'transport'   => 'auto',
	'choices'	=> array(
		'alpha'	=> true,
	),
	'output' => array(
		array(
			'element'  => 'section.footer-content.footer-top-area',
			'property' => 'background-color',
		),
	),
	'active_callback'	=> function(){
		$showFooterTop = get_theme_mod('show_footer_top_section', true);
		if (true == $showFooterTop) {
			return true;
		}
		return false;
	}
] );

Kirki::add_field( 'electronic_store_config', [
	'type'        => 'color',
	'settings'    => 'footer_top_title_color',
	'label'       => __( 'Title Color', 'electronic-store' ),
	'section'     => 'footer_section',
	'default'     => 'rgb(255 255 255 / 50%)',
	'choices'	=> array(
		'alpha'	=> true,
	),
	'transport'   => 'auto',
	'output' => array(
		array(
			'element'  => 'section.footer-content.footer-top-area .widget-title.footer-title',
			'property' => 'color',
		),
	),
	'active_callback'	=> function(){
		$showFooterTop = get_theme_mod('show_footer_top_section', true);
		if (true == $showFooterTop) {
			return true;
		}
		return false;
	}
] );

Kirki::add_field( 'electronic_store_config', [
	'type'        => 'color',
	'settings'    => 'footer_top_title_border_color',
	'label'       => __( 'Title Border Color', 'electronic-store' ),
	'section'     => 'footer_section',
	'default'     => 'rgb(255 255 255 / 50%)',
	'transport'   => 'auto',
	'choices'	=> array(
		'alpha'	=> true,
	),
	'output' => array(
		array(
			'element'  => 'section.footer-content.footer-top-area .widget-title.footer-title',
			'property' => 'border-bottom-color',
		),
	),
	'active_callback'	=> function(){
		$showFooterTop = get_theme_mod('show_footer_top_section', true);
		if (true == $showFooterTop) {
			return true;
		}
		return false;
	}
] );

Kirki::add_field( 'electronic_store_config', [
	'type'        => 'color',
	'settings'    => 'footer_top_title_sep_color',
	'label'       => __( 'Title Separator Color', 'electronic-store' ),
	'section'     => 'footer_section',
	'default'     => 'rgb(255 255 255 / 50%)',
	'transport'   => 'auto',
	'choices'	=> array(
		'alpha'	=> true,
	),
	'output' => array(
		array(
			'element'  => 'section.footer-content.footer-top-area .widget-title.footer-title:before',
			'property' => 'background-color',
		),
	),
	'active_callback'	=> function(){
		$showFooterTop = get_theme_mod('show_footer_top_section', true);
		if (true == $showFooterTop) {
			return true;
		}
		return false;
	}
] );

Kirki::add_field( 'electronic_store_config', [
	'type'        => 'color',
	'settings'    => 'footer_top_text_color',
	'label'       => __( 'Text Color', 'electronic-store' ),
	'section'     => 'footer_section',
	'default'     => '#ffffff',
	'transport'   => 'auto',
	'choices'	=> array(
		'alpha'	=> true,
	),
	'output' => array(
		array(
			'element'  => 'section.footer-content.footer-top-area .widget p,section.footer-content.footer-top-area .widget,section.footer-content.footer-top-area .widget span,section.footer-content.footer-top-area .widget li,section.footer-content.footer-top-area .widget div,section.footer-content.footer-top-area .widget cite,section.footer-content.footer-top-area .widget span.rss-date,section.footer-content.footer-top-area .widget table',
			'property' => 'color',
		),
	),
	'active_callback'	=> function(){
		$showFooterTop = get_theme_mod('show_footer_top_section', true);
		if (true == $showFooterTop) {
			return true;
		}
		return false;
	}
] );

Kirki::add_field( 'electronic_store_config', [
	'type'        => 'color',
	'settings'    => 'footer_top_link_color',
	'label'       => __( 'Link Color', 'electronic-store' ),
	'section'     => 'footer_section',
	'default'     => '#ffffff',
	'transport'   => 'auto',
	'choices'	=> array(
		'alpha'	=> true,
	),
	'output' => array(
		array(
			'element'  => 'section.footer-content.footer-top-area .widget a:not(.rswpthemes-book-buy-now-button), section.footer-content.footer-top-area .rswpthemes-featured-book-area-inner .book-author h4, section.footer-content.footer-top-area ul.recent-post-widget li .recent-widget-content h2',
			'property' => 'color',
		),
	),
	'active_callback'	=> function(){
		$showFooterTop = get_theme_mod('show_footer_top_section', true);
		if (true == $showFooterTop) {
			return true;
		}
		return false;
	}
] );

Kirki::add_field( 'electronic_store_config', [
	'type'        => 'color',
	'settings'    => 'footer_top_menu_item_separator_color',
	'label'       => __( 'Menu Item Separator Color', 'electronic-store' ),
	'section'     => 'footer_section',
	'default'     => '#ffffff',
	'transport'   => 'auto',
	'choices'	=> array(
		'alpha'	=> true,
	),
	'output' => array(
		array(
			'element'  => 'section.footer-content.footer-top-area .widget.widget_nav_menu li, section.footer-content.footer-top-area .widget.widget_categories li',
			'property' => 'border-bottom-color',
		),
	),
	'active_callback'	=> function(){
		$showFooterTop = get_theme_mod('show_footer_top_section', true);
		if (true == $showFooterTop) {
			return true;
		}
		return false;
	}
] );

Kirki::add_field( 'electronic_store_config', array(
    'type'        => 'custom',
    'settings'    => 'separator_before_footer_bottom_section',
    'label'       => '',
    'section'     => 'footer_section',
    'default'     => '<div class="settings-separator">'.esc_html__('Footer Bottom Section', 'electronic-store').'</div>',
) );


Kirki::add_field( 'electronic_store_config', [
	'type'        => 'toggle',
	'settings'    => 'show_footer_bottom_section',
	'label'       => esc_html__( 'Show Footer Bottom Section', 'electronic-store' ),
	'section'     => 'footer_section',
	'default'    => '0',
] );

Kirki::add_field( 'electronic_store_config', [
	'type'        => 'color',
	'settings'    => 'footer_bg_color',
	'label'       => __( 'Footer Background Color', 'electronic-store' ),
	'section'     => 'footer_section',
	'default'     => '#f8f8f8',
	'transport'   => 'auto',
	'output' => array(
		array(
			'element'  => 'section.footer-content.footer-bottom-area',
			'property' => 'background-color',
		),
	),
	'active_callback'	=> function(){
		$showFooterBottom = get_theme_mod('show_footer_bottom_section', true);
		if (true == $showFooterBottom) {
			return true;
		}
		return false;
	}
] );

Kirki::add_field( 'electronic_store_config', [
	'type'        => 'toggle',
	'settings'    => 'show_footer_logo',
	'label'       => esc_html__( 'Show Footer Logo', 'electronic-store' ),
	'section'     => 'footer_section',
	'default'    => '1',
	'active_callback'	=> function(){
		$showFooterBottom = get_theme_mod('show_footer_bottom_section', true);
		if (true == $showFooterBottom) {
			return true;
		}
		return false;
	}
] );

Kirki::add_field( 'electronic_store_config', [
	'type'        => 'image',
	'settings'    => 'footer_logo',
	'label'       => __( 'Upload Footer Logo', 'electronic-store' ),
	'section'     => 'footer_section',
	'default'     => '',
	'transport'   => 'refresh',
	'choices'     => [
		'save_as' => 'id',
	],
	'active_callback'	=> function(){
		$showFooterLogo = get_theme_mod('show_footer_logo', true);
		$showFooterBottom = get_theme_mod('show_footer_bottom_section', true);
		if (true == $showFooterBottom && true == $showFooterLogo) {
			return true;
		}
		return false;
	}
] );

Kirki::add_field( 'electronic_store_config', [
	'type'        => 'toggle',
	'settings'    => 'show_footer_menu',
	'label'       => esc_html__( 'Show Footer Menu', 'electronic-store' ),
	'section'     => 'footer_section',
	'default'    => '1',
	'active_callback'	=> function(){
		$showFooterBottom = get_theme_mod('show_footer_bottom_section', true);
		if (true == $showFooterBottom) {
			return true;
		}
		return false;
	}
] );


Kirki::add_field( 'electronic_store_config', [
	'type'        => 'toggle',
	'settings'    => 'show_footer_social_links',
	'label'       => esc_html__( 'Show Footer Social Links', 'electronic-store' ),
	'section'     => 'footer_section',
	'default'    => '1',
	'active_callback'	=> function(){
		$showFooterBottom = get_theme_mod('show_footer_bottom_section', true);
		if (true == $showFooterBottom) {
			return true;
		}
		return false;
	}
] );

Kirki::add_field( 'electronic_store_config', array(
    'type'        => 'custom',
    'settings'    => 'separator_before_footer_s_l',
    'label'       => '',
    'section'     => 'footer_section',
    'default'     => '<div class="settings-separator">'.esc_html__('Social Links Style', 'electronic-store').'</div>',
    'active_callback'	=> function(){
		$showFooterBottom = get_theme_mod('show_footer_bottom_section', true);
		if (true == $showFooterBottom) {
			return true;
		}
		return false;
	}
) );

Kirki::add_field( 'electronic_store_config', [
    'type'        => 'color',
    'settings'    => 'footer_social_links_bg_c',
    'label'       => esc_html__( 'Icon Background Color', 'electronic-store' ),
    'section'     => 'footer_section',
    'transport'   => 'auto',
    'default'     => '#ffffff',
    'output'      => array(
        array(
            'element'  => '.footer-social-links-wrapper a',
            'property' => 'background-color',
        ),
    ),
    'active_callback'	=> function(){
		$showFooterBottom = get_theme_mod('show_footer_bottom_section', true);
		if (true == $showFooterBottom) {
			return true;
		}
		return false;
	}
] );

Kirki::add_field( 'electronic_store_config', [
    'type'        => 'color',
    'settings'    => 'footer_social_links_txt_c',
    'label'       => esc_html__( 'Icon Text Color', 'electronic-store' ),
    'section'     => 'footer_section',
    'transport'   => 'auto',
    'default'      => '#000000',
    'output'      => array(
        array(
            'element'  => '.footer-social-links-wrapper a',
            'property' => 'color',
        ),
    ),
    'active_callback'	=> function(){
		$showFooterBottom = get_theme_mod('show_footer_bottom_section', true);
		if (true == $showFooterBottom) {
			return true;
		}
		return false;
	}
] );

Kirki::add_field( 'electronic_store_config', [
    'type'        => 'color',
    'settings'    => 'footer_social_links_h_bg_c',
    'label'       => esc_html__( 'Icon Hover Background Color', 'electronic-store' ),
    'section'     => 'footer_section',
    'transport'   => 'auto',
    'default'     =>   '#0989ff',
    'output'      => array(
        array(
            'element'  => '.footer-social-links-wrapper a:hover',
            'property' => 'background-color',
        ),
    ),
	'active_callback'	=> function(){
		$showFooterBottom = get_theme_mod('show_footer_bottom_section', true);
		if (true == $showFooterBottom) {
			return true;
		}
		return false;
	}
] );

Kirki::add_field( 'electronic_store_config', [
    'type'        => 'color',
    'settings'    => 'footer_social_links_h_txt_c',
    'label'       => esc_html__( 'Icon Hover Text Color', 'electronic-store' ),
    'section'     => 'footer_section',
    'transport'   => 'auto',
    'default'     => '#ffffff',
    'output'      => array(
        array(
            'element'  => '.footer-social-links-wrapper a:hover',
            'property' => 'color',
        ),
    ),
	'active_callback'	=> function(){
		$showFooterBottom = get_theme_mod('show_footer_bottom_section', true);
		if (true == $showFooterBottom) {
			return true;
		}
		return false;
	}
] );


Kirki::add_field( 'electronic_store_config', array(
    'type'        => 'custom',
    'settings'    => 'separator_before_m_s',
    'label'       => '',
    'section'     => 'footer_section',
    'default'     => '<div class="settings-separator">'.esc_html__('Footer Menu Style', 'electronic-store').'</div>',
	'active_callback'	=> function(){
		$showFooterBottom = get_theme_mod('show_footer_bottom_section', true);
		if (true == $showFooterBottom) {
			return true;
		}
		return false;
	}
) );


Kirki::add_field( 'electronic_store_config', [
	'type'        => 'color',
	'settings'    => 'footer_menu_color',
	'label'       => __( 'Footer Menu Color', 'electronic-store' ),
	'section'     => 'footer_section',
	'default'     => '#000000',
	'transport'   => 'auto',
	'output' => array(
		array(
			'element'  => '.footer-menu-wrapper ul.menu li a',
			'property' => 'color',
		),
	),
	'active_callback'	=> function(){
		$showFooterBottom = get_theme_mod('show_footer_bottom_section', true);
		if (true == $showFooterBottom) {
			return true;
		}
		return false;
	}
] );

Kirki::add_field( 'electronic_store_config', [
	'type'        => 'color',
	'settings'    => 'footer_menu_hover_color',
	'label'       => __( 'Footer Menu Hover Color', 'electronic-store' ),
	'section'     => 'footer_section',
	'default'     => '#0989ff',
	'transport'   => 'auto',
	'output' => array(
		array(
			'element'  => '.footer-menu-wrapper ul.menu li a:hover',
			'property' => 'color',
		),
	),
	'active_callback'	=> function(){
		$showFooterBottom = get_theme_mod('show_footer_bottom_section', true);
		if (true == $showFooterBottom) {
			return true;
		}
		return false;
	}
] );

Kirki::add_field( 'electronic_store_config', array(
    'type'        => 'custom',
    'settings'    => 'separator_before_copyright_style',
    'label'       => '',
    'section'     => 'footer_section',
    'default'     => '<div class="settings-separator">'.esc_html__('Copyright Section Style', 'electronic-store').'</div>',
) );

Kirki::add_field( 'electronic_store_config', [
	'type'        => 'color',
	'settings'    => 'copyright_section_bg_color',
	'label'       => __( 'Copyright Background Color', 'electronic-store' ),
	'section'     => 'footer_section',
	'default'     => '#f8f8f8',
	'choices'     => [
		'alpha' => true,
	],
	'transport'   => 'auto',
	'output' => array(
		array(
			'element'  => '.site-copyright',
			'property' => 'background-color',
		),
	),
] );

Kirki::add_field( 'electronic_store_config', [
	'type'        => 'color',
	'settings'    => 'copyright_br_color',
	'label'       => __( 'Copyright Top Border Color', 'electronic-store' ),
	'section'     => 'footer_section',
	'default'     => '#f1f1f1',
	'choices'     => [
		'alpha' => true,
	],
	'transport'   => 'auto',
	'output' => array(
		array(
			'element'  => '.site-copyright',
			'property' => 'border-color',
		),
	),

] );

Kirki::add_field( 'electronic_store_config', [
	'type'        => 'color',
	'settings'    => 'copyright_text_color',
	'label'       => __( 'Copyright Text Color', 'electronic-store' ),
	'section'     => 'footer_section',
	'default'     => '#000000',
	'transport'   => 'auto',
	'output' => array(
		array(
			'element'  => '.site-copyright .site-info, .theme-by-wrapper .theme-by-inner',
			'property' => 'color',
		),
	),

] );

Kirki::add_field( 'electronic_store_config', [
	'type'        => 'color',
	'settings'    => 'copyright_text_link_color',
	'label'       => __( 'Copyright Text Link Color', 'electronic-store' ),
	'section'     => 'footer_section',
	'default'     => '#000000',
	'transport'   => 'auto',
	'output' => array(
		array(
			'element'  => '.site-copyright .site-info a, .theme-by-wrapper .theme-by-inner a',
			'property' => 'color',
		),
	),
] );