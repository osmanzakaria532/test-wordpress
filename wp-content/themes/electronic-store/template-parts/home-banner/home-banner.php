<?php
/**
 * Electric Store Theme Main Banner
 */
$bannerSubtitle = get_theme_mod( 'home_banner_subtitle', esc_html__( 'Hello Spring 2024', 'electronic-store') );
$bannerTitle = get_theme_mod( 'home_banner_title', esc_html__( 'SALL OF UP TO 50%', 'electronic-store') );
$bannerDesc = get_theme_mod( 'home_banner_desc', esc_html__( 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Natus vitae sint, blanditiis consequuntur iste ullam reprehenderit eum officia possimus eligendi cupiditate sed deserunt libero autem praesentium, quod tempore corporis ad.', 'electronic-store') );
$buttonText = get_theme_mod('home_banner_button_text', esc_html__('Shop Now', 'electronic-store'));
$buttonLink = get_theme_mod('home_banner_button_link', '#');
$getFeaturedImageArray = get_theme_mod('home_banner_featured_image');
?>
<div class="electronic-store-home-banner">
	<div class="banner_overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-lg-7 align-self-center">
				<div class="home-banner-wrapper">
					<div class="home-banner-inner">
						<?php
						if (!empty($bannerSubtitle)) :
						?>
						<h4><?php echo esc_html( $bannerSubtitle );?></h4>
						<?php
						endif;
						if (!empty($bannerTitle)) :
						?>
						<h2><?php echo esc_html( $bannerTitle );?></h2>
						<?php
						endif;
						if (!empty($bannerDesc)) :
						?>
						<p><?php echo esc_html( $bannerDesc );?></p>
						<?php
						endif;
						if (!empty($buttonText)) :
						?>
						<div class="home-banner-button-wrapper">
							<a href="<?php echo esc_url( $buttonLink );?>">
								<span class="button-text"><?php echo esc_html( $buttonText );?></span>
								<span class="rswpthemes-icon icon-arrow-right-solid"></span>
							</a>
						</div>
						<?php
						endif;
						?>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-5 align-self-center">
				<div class="home-banner-featured-image">
					<?php
					if (!empty($getFeaturedImageArray)) {
					    $image_id = intval($getFeaturedImageArray['id']);
					    echo wp_get_attachment_image($image_id, 'full');
					}
					?>
				</div>
			</div>
		</div>
	</div>
</div>