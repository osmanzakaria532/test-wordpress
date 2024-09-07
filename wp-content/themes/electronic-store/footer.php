<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Electronic Store
 */

$show_scroll_to_top_button = get_theme_mod('show_scroll_to_top_button', true);
$button_extra_class = '';
if (true == get_theme_mod('hide_button_on_mobile_device', true)) {
	$button_extra_class = ' hide-button-on-mobile';
}

$showFooterTop = get_theme_mod('show_footer_top_section', true);
$showFooterBottom = get_theme_mod('show_footer_bottom_section', false);

?>
</div><!-- #content -->
<footer id="colophon" class="site-footer">
	<?php
	if (true == $showFooterTop) {
		get_template_part('template-parts/footer/footer-top-area');
	}
	if (true == $showFooterBottom) {
		get_template_part('template-parts/footer/footer-bottom-area');
	}
	?>
	<!-- Footer Copyright Section -->
	<section class="site-copyright">
		<div class="container">
			<div class="row">
				<div class="col-md-12 align-self-center">
					<div class="site-info text-center">
						<div class="site-copyright-text d-inline-block">
						<?php
						echo wp_kses_post( get_theme_mod('copyright_text', __( 'Copyright <i class="fa fa-copyright" aria-hidden="true"></i> 2024. All rights reserved.', 'electronic-store' )));
						?>
						</div>
					</div><!-- .site-info -->
				</div>
			</div>
		</div>
	</section>
</footer><!-- #colophon -->
<?php if(true == $show_scroll_to_top_button) : ?>
<div class="scrooltotop<?php echo esc_attr($button_extra_class);?>">
	<a href="#" class="rswpthemes-icon icon-angle-up-solid"></a>
</div>
<?php endif; ?>
</div><!-- #page -->
<?php wp_footer(); ?>
</body>
</html>
