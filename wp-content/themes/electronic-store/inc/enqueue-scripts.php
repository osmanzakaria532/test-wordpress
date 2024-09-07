<?php
/**
 * Enqueue scripts and styles.
 */
function electronic_store_scripts() {
	$isBookSliderActivated = get_theme_mod('books_slider_on_off', false);
	if ( (is_home() && true == $isBookSliderActivated) || class_exists('WooCommerce') && is_product()) {
		wp_enqueue_style( 'slick', esc_url( get_theme_file_uri( 'assets/css/slick.css' ) ) );
	}
	wp_enqueue_style( 'electronic-store-style', get_stylesheet_uri() );
	if ( function_exists( 'is_woocommerce' ) && ( is_woocommerce() || is_cart() || is_checkout() || is_account_page() ) ) {
		wp_enqueue_style( 'woocommerce-style', esc_url(get_theme_file_uri( 'assets/css/woocommerce-style.css' )) );
	}
	$headerContainerSize = '1170';
	$banner_height = 200;
	$headerContainerSize = get_theme_mod('header_container_custom_size', '1170');
	$banner_height = get_theme_mod('page_banner_custom_height', 200);
	$headerBgColor = get_theme_mod('header_bg_color', '#000000');
	$bannerHeight = get_theme_mod('home_banner_custom_height', 700);
	$inline_style_data = '
		@media (min-width: 1200px) {
			#masthead .container.container-custom-size{
				width: '.$headerContainerSize.'px;
				max-width: '.$headerContainerSize.'px;
			}
		}
		.page-header-area.banner-custom-height{
			height: '.$banner_height.'px;
		}
		header.site-header.header-one{
			background-color: '.$headerBgColor.';
		}
		@media (min-width: 1200px) {
			.electronic-store-home-banner{
				height: '.$bannerHeight.'px;
			}
		}
	';
	wp_add_inline_style('electronic-store-style', $inline_style_data);
	$isMasonryActivated = get_theme_mod('active_masonry_layout', true);
	if ( ( is_home() || is_archive() || is_search() ) && true == $isMasonryActivated ) :
		wp_enqueue_script( 'imagesloaded', esc_url( get_template_directory_uri() ) . '/assets/js/imagesloaded.pkgd.min.js', array( 'jquery' ), '1.0', true );
		wp_enqueue_script( 'masonry' );
	endif;
	wp_enqueue_script( 'electronic-store-menu', esc_url( get_template_directory_uri() ) . '/assets/js/menu.js', array( 'jquery' ), '1.0', true );
	if ( ( is_home() && true == $isBookSliderActivated ) || class_exists('WooCommerce') && is_product() ) {
		wp_enqueue_script( 'slick', esc_url( get_template_directory_uri() ) . '/assets/js/slick.js', array( 'jquery' ), '1.0', true );
	}
	wp_enqueue_script( 'electronic-store-active', esc_url( get_template_directory_uri() ) . '/assets/js/active.js', array( 'jquery' ), '1.0', true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'electronic_store_scripts' );

add_action('customize_controls_enqueue_scripts', 'electronic_store_customizer_scripts');
function electronic_store_customizer_scripts(){
	wp_enqueue_style('customizer-style', esc_url(get_theme_file_uri('assets/customizer/customizer-style.css')));
}

add_action('enqueue_block_editor_assets', 'electronic_store_global_scripts');
add_action('wp_enqueue_scripts', 'electronic_store_global_scripts');

function electronic_store_global_scripts(){
	wp_enqueue_style( 'bootstrap-grid', esc_url(get_theme_file_uri( 'assets/css/bootstrap-grid.css' )) );
	wp_enqueue_style( 'rswpthemes-icons', esc_url(get_theme_file_uri( 'assets/css/icons.css' )), array(), '1.5' );
	wp_enqueue_style( 'block-style', esc_url(get_theme_file_uri( 'assets/blocks-style/block-styles.css' )) );
	/**
	 * Title Border Color
	 */
	$getTitleBorderColor = get_theme_mod('primary_text_color', '#0989ff');
	$containerWidth = '1200';
	$containerWidth = get_theme_mod('container_custom_width', '1200');
	$inline_style_data = '
		@media (min-width: 1300px) {
			.container{
				max-width: '.$containerWidth.'px;
			}
		}
		.electronic-store-standard-post__post-title h2 a, .electronic-store-standard-post__post-title h3 a, ul.recent-post-widget li .recent-widget-content h2 a{
            background-image: linear-gradient(to right, '.$getTitleBorderColor.' 0%, '.$getTitleBorderColor.' 100%);
        }
	';
	wp_add_inline_style('block-style', $inline_style_data);
}


/**
 * Conditional Script
 */

add_action('wp_print_footer_scripts', 'electronic_store_print_scripts');
function electronic_store_print_scripts(){
	$showBookSlider = get_theme_mod('books_slider_on_off', false);
	if (is_home() && true == $showBookSlider) :
		?>
		<script type="text/javascript" id="electronic-store-book-slider">
			var $ = jQuery;
			var booksSliders = $('.books-slider-active');
	    	booksSliders.each(function(index) {
	        var slideToShow = $(this).attr('data-slideToshow');
		        $(this).slick({
		            slidesToShow: 4,
		            slidesToScroll: 1,
		            arrows: true,
		            fade: false,
		            nextArrow: '<div class="slick-next"><i class="fa fa-arrow-right"></i></div>',
		            prevArrow: '<div class="slick-prev"><i class="fa fa-arrow-left"></i></div>',
		            responsive: [{
		                    breakpoint: 1024,
		                    settings: {
		                        slidesToShow: 3,
		                    }
		                },
		                {
		                    breakpoint: 600,
		                    settings: {
		                        slidesToShow: 2,
		                    }
		                },
		                {
		                    breakpoint: 480,
		                    settings: {
		                        slidesToShow: 1,
		                        adaptiveHeight: true
		                    }
		                }
		            ]
		        });
		    });
		</script>
    <?php
	endif;
	/**
	 * Print Below Script if its woocommerce product page
	 */
	if (class_exists('WooCommerce') && is_product()) {
		?>
		<script type="text/javascript" id="electronic-store-product-page-sliders">
			var $ = jQuery;
			$('.active-single-gallery').slick({
		        slidesToShow: 1,
		        slidesToScroll: 1,
		        dots: true,
		        arrows: true,
		        fade: true,
		        nextArrow: '<div class="slick-next"><i class="fa fa-arrow-right"></i></div>',
		        prevArrow: '<div class="slick-prev"><i class="fa fa-arrow-left"></i></div>',
		    });
		    $('.active-product-related-post-slider').slick({
		        slidesToShow: 4,
		        slidesToScroll: 1,
		        dots: false,
		        arros: true,
		        centerMode: false,
		        focusOnSelect: true,
		        nextArrow: '<div class="slick-next"><i class="fa fa-arrow-right"></i></div>',
		        prevArrow: '<div class="slick-prev"><i class="fa fa-arrow-left"></i></div>',
		    });
		</script>
		<?php
	}
}

