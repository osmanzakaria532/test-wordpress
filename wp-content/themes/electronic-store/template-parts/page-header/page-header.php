<?php
/**
 * Electric Store Theme Page Header
 */
$pagebannerExtraClass = '';
$textAlign = ' text-left';

$textAlign = '';
$banner_height = get_theme_mod('page_banner_custom_height', 200);
if ($banner_height == 200) {
    $pagebannerExtraClass = ' banner-custom-height banner-default-height';
} elseif ($banner_height > 200) {
    $pagebannerExtraClass = ' banner-custom-height banner-height-higher-than-200';
} else {
    $pagebannerExtraClass = ' banner-custom-height banner-height-lower-than-200';
}
?>
<section class="page-header-area<?php echo esc_attr($pagebannerExtraClass);?>">
	<?php
	echo '<div class="page_banner_overlay"></div>';
	?>
	<div class="container">
		<div class="row">
			<div class="col-md-12<?php echo esc_attr($textAlign);?>">
				<?php
				do_action('electronic_store_before_page_title');
				if (is_page()) :
				?>
				<h1 class="page-title<?php echo esc_attr($textAlign);?>"><?php the_title(); ?></h1>
				<?php
				elseif(is_category() || is_tag() || is_tax()):
					?>
					<h1 class="page-title<?php echo esc_attr($textAlign);?>">
						<?php single_term_title('', true); ?>
					</h1>
					<?php
					the_archive_description();
				elseif(is_author()):
					electronic_store_author_vcard();
				elseif (is_search()):
					?>
					<h1 class="page-title<?php echo esc_attr($textAlign);?>">
					<?php printf( esc_html__( 'Search Results for: %s', 'electronic-store' ), '<span>' . get_search_query() . '</span>' ); ?>
					</h1>
					<?php
				elseif (class_exists('woocommerce') && is_woocommerce()) :
					if (is_shop()) :
						?>
						<h1 class="page-title<?php echo esc_attr($textAlign);?>">
							<?php woocommerce_page_title(); ?>
						</h1>
						<?php
					endif;
				elseif (is_post_type_archive()) :
					?>
					<h1 class="page-title<?php echo esc_attr($textAlign);?>">
						<?php post_type_archive_title(); ?>
					</h1>
					<div class="archive-description">
						<?php the_archive_description(); ?>
					</div>
					<?php
				elseif(is_archive()):
					the_archive_title( '<h1 class="page-title'.$textAlign.'">', '</h1>' );
					the_archive_description( '<div class="archive-description">', '</div>' );
				endif;
				 do_action('electronic_store_after_page_title'); ?>
			</div>
		</div>
	</div>
</section>