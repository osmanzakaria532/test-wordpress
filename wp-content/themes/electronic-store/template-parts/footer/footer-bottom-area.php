<?php
/**
 * Footer Bootom Area
 */
$showFooterLogo = get_theme_mod('show_footer_logo', true);
$footerLogo = get_theme_mod('footer_logo');
$showFooterMenu = get_theme_mod('show_footer_menu', true);
$showFooterSocialLinks = get_theme_mod('show_footer_social_links', true);
if (!empty($footerLogo) || has_nav_menu('footer-menu') || !empty(electronic_store_social_links()) ) :
?>
<section class="footer-content footer-bottom-area">
	<div class="container">
		<div class="row justify-content-center text-center">
			<div class="col-md-12">
				<?php
				if (!empty($footerLogo)) :
				?>
				<div class="footer-logo-wrapper">
					<?php echo wp_get_attachment_image( $footerLogo, 'full' ); ?>
				</div>
				<?php
				endif;
				if (true == $showFooterMenu && has_nav_menu('footer-menu')) :
				?>
				<div class="footer-menu-wrapper">
					<?php
						wp_nav_menu(
							array(
								'theme_location'    => 'footer-menu',
								'container'         => 'ul',
							)
						);
					?>
				</div>
				<?php
				endif;
				if (true == $showFooterSocialLinks) :
				?>
				<div class="footer-social-links-wrapper">
					<?php electronic_store_social_links(); ?>
				</div>
				<?php
				endif;
				?>
			</div>
		</div>
	</div>
</section>
<?php
endif;
?>