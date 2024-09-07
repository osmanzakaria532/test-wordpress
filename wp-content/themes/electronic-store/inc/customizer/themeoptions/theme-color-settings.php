<?php
$primary_color = get_theme_mod( 'primary_color' );
if ( $primary_color ) {
    set_theme_mod( 'primary_bg_color', $primary_color );
}
remove_theme_mod( 'primary_color' );

Kirki::add_field( 'electronic_store_config', [
	'type'        => 'color',
	'settings'    => 'primary_bg_color',
	'label'       => __( 'Primary Background Color', 'electronic-store' ),
	'section'     => 'colors',
	'default'     => '#0989ff',
	'transport'   => 'auto',
	'output' => array(
		array(
			'element'  => '.electronic-store-standard-post__overlay-category span.cat-links a, .electronic-store-standard-post__post-meta span.cat-links a, .widget .tagcloud a, blockquote.wp-block-quote.is-style-red-qoute, .scrooltotop a:hover, .discover-me-button a, .woocommerce .woocommerce-pagination .page-numbers li a, .woocommerce .woocommerce-pagination .page-numbers li span, .woocommerce ul.products li.product .onsale, .woocommerce span.onsale, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce table.shop_table tr td.product-remove a, .woocommerce-info, .woocommerce-noreviews, p.no-comments, .electronic-store-single-page .entry-footer a,nav.woocommerce-MyAccount-navigation ul li a, .rs-wp-themes-cookies-banner-area .cookies_accept_button, .widget_search button, aside.widget-area .widget .widget-title:before, .pagination li.page-item a, .pagination li.page-item span, form#commentform p.form-submit button.btn-primary, .rswpthemes-featured-book-purchase-button a.rswpthemes-book-buy-now-button, .scrooltotop a, .rswpthemes-book-list-widget-area-inner .book-image .book-view-button a:hover, .woocommerce ul.products li.product .button',
			'property' => 'background-color',
		),
		array(
			'element'  => '#cssmenu ul ul li:first-child',
			'property' => 'border-top-color',
		),
		array(
			'element'  => '.electronic-store-standard-post.sticky:before',
			'property' => 'color',
		),
		array(
			'element'  => '.widget_search button, .rswpthemes-featured-book-purchase-button a.rswpthemes-book-buy-now-button',
			'property' => 'border-color',
		),
	),
] );

Kirki::add_field( 'electronic_store_config', [
	'type'        => 'color',
	'settings'    => 'text_color_for_primary_bg',
	'label'       => __( 'Text Color for Primary Background', 'electronic-store' ),
	'section'     => 'colors',
	'default'     => '#ffffff',
	'transport'   => 'auto',
	'output' => array(
		array(
			'element'  => '.electronic-store-standard-post__overlay-category span.cat-links a, .electronic-store-standard-post__post-meta span.cat-links a, .widget .tagcloud a, blockquote.wp-block-quote.is-style-red-qoute, .scrooltotop a:hover, .discover-me-button a, .woocommerce .woocommerce-pagination .page-numbers li a, .woocommerce .woocommerce-pagination .page-numbers li span, .woocommerce ul.products li.product .onsale, .woocommerce span.onsale, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce table.shop_table tr td.product-remove a, .woocommerce-info, .woocommerce-noreviews, p.no-comments, .electronic-store-single-page .entry-footer a,nav.woocommerce-MyAccount-navigation ul li a, .rs-wp-themes-cookies-banner-area .cookies_accept_button, .widget_search button, aside.widget-area .widget .widget-title:before, .pagination li.page-item a, .pagination li.page-item span, form#commentform p.form-submit button.btn-primary, .rswpthemes-featured-book-purchase-button a.rswpthemes-book-buy-now-button, .scrooltotop a, .rswpthemes-book-list-widget-area-inner .book-image .book-view-button a:hover, .woocommerce ul.products li.product .button',
			'property' => 'color',
		),
	),
] );

Kirki::add_field( 'electronic_store_config', [
	'type'        => 'color',
	'settings'    => 'primary_text_color',
	'label'       => __( 'Primary Text Color', 'electronic-store' ),
	'section'     => 'colors',
	'transport'   => 'auto',
	'default'     => '#0989ff',
	'output' => array(
		array(
			'element'  => '.widget-area .widget.widget_rss a.rsswidget, .widget ul li a:hover, .widget ul li a:visited, .widget ul li a:focus, .widget ul li a:active, .widget ol li a:hover, .widget ol li a:visited, .widget ol li a:focus, .widget ol li a:active, a:hover, a:focus, a:active, span.opacity-none:before, header.archive-page-header span, .woocommerce ul.products li.product .price, .woocommerce div.product p.price, .woocommerce div.product span.price, .woocommerce .product_meta > * a, .woocommerce-account .woocommerce-MyAccount-content a, .electronic-store-standard-post_post-meta .tags-links a:hover, .post-details-page .electronic-store-standard-post__blog-meta .rswpthemes-icon,  .electronic-store-standard-post__blog-meta>span .rswpthemes-icon, .electronic-store-standard-post__blog-meta>span.posted_by span.post-author-image i, .books-loop-item .loop-book-content-wrapper .book-price, .electronic-store-standard-post__post-title h2 a:hover, .rswpthemes-book-list-widget-area-inner .book-price',
			'property' => 'color',
		),
		array(
			'element'  => '.electronic-store-standard-post__blog-meta>span.posted-on i.line',
			'property' => 'background-color',
		),
	),
] );
