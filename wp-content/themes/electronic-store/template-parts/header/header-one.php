<?php
/**
* Template Name: Header Two
*
*/
$showCartIcon = false;
$containerClass = 'container';
$showCartIcon = get_theme_mod('show_cart_icon', false);
$getHeaderContainer = get_theme_mod('header_container_size', 'container');
$containerClass = $getHeaderContainer;
if ('container-custom-size' == $getHeaderContainer) {
	$containerClass = 'container container-custom-size';
}
$menuWrapperClass = 'col-xl-9';
if (true == $showCartIcon && class_exists('WooCommerce')) {
	$menuWrapperClass = 'col-xl-8';
}
?>
<header id="masthead" class="site-header header-one" style="background-image: url(<?php echo esc_url( get_header_image() ); ?>);">
	<div class="header_overlay_color"></div>
	<div class="<?php echo esc_attr($containerClass);?>">
		<div class="row justify-content-between">
			<div class="col-md-12 col-lg-3 col-xl-3 align-self-center order-1 order-md-1 order-lg-1">
				<div class="site-branding-wrapper d-flex justify-content-between">
					<div class="site-branding align-self-center header-logo">
						<?php
						if ( has_custom_logo() ) :
							the_custom_logo();
						endif;
						?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
							<?php
							$electronic_store_description = get_bloginfo( 'description', 'display' );
							if ( $electronic_store_description || is_customize_preview() ) :
								?>
							<p class="site-description"><?php echo esc_html( $electronic_store_description ); /* WPCS: xss ok. */ ?></p>
								<?php
						endif;
						?>
					</div>
					<?php
					if (true == $showCartIcon && class_exists('WooCommerce') && function_exists('wc_get_cart_url')) :
						$cart_url = wc_get_cart_url();
					?>
					<div class=" align-self-center small-devices-cart-icon d-md-block d-lg-none d-xl-none d-block">
						<div class="header-cart align-self-center">
						    <a class="cart-contents" href="<?php echo wc_get_cart_url(); ?>" title="<?php esc_attr_e( 'View your shopping cart', 'electronic-store' ); ?>">
						    	<span class="electronic-store-cart-count rswpthemes-icon icon-bag-shopping-solid"></span>
						        <span class="cart-count"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
						    </a>
						</div>
					</div>
					<?php
					endif;
					?>
				</div>
			</div>
			<div class="mt-md-3 mt-0 mt-lg-0 mb-lg-0 col-md-12 col-lg-8 <?php echo esc_attr($menuWrapperClass);?> m-auto align-self-center order-3 order-md-3 order-lg-3 order-xl-2 d-flex justify-content-between justify-content-md-center justify-content-lg-end text-right">
				<div class="cssmenu text-right align-self-center" id="cssmenu">
					<?php
					if (has_nav_menu('main-menu')) :
						wp_nav_menu(
							array(
								'theme_location'    => 'main-menu',
								'container'         => 'ul',
								'fallback_cb'    => '__return_false',
							)
						);
					endif;
					?>
				</div>
			</div>
			<?php
			if (true == $showCartIcon && class_exists('WooCommerce') && function_exists('wc_get_cart_url')) :
				$cart_url = wc_get_cart_url();
			?>
			<div class="col-md-1 col-lg-1 col-xl-1 align-self-center justify-content-center justify-content-md-end text-center text-md-right order-4 order-md-4 order-lg-4 order-xl-4 d-md-none d-none d-lg-flex d-xl-flex ">
                <div class="header-cart align-self-center">
				    <a class="cart-contents" href="<?php echo wc_get_cart_url(); ?>" title="<?php esc_attr_e( 'View your shopping cart', 'electronic-store' ); ?>">
				    	<span class="electronic-store-cart-count rswpthemes-icon icon-bag-shopping-solid"></span>
				        <span class="cart-count"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
				    </a>
				</div>
			</div>
			<?php
			endif;
			?>
		</div>
	</div>
</header><!-- #masthead -->

