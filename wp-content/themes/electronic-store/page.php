<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress electronic_storet of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Electronic Store
 */
get_header();
if (true === electronic_store_page_header_control()) {
	get_template_part('template-parts/page-header/page', 'header');
}
$site_main_class = 'site-main';
$get_page_content_layouts = get_post_meta( get_the_ID(), 'electronic_store_content-layout', true );
if ('stretched' === $get_page_content_layouts) {
	$site_main_class = 'pt-0 pb-0 site-main';
}
?>
<div id="primary" class="content-area">
	<main id="main" class="<?php echo esc_attr($site_main_class);?>">
		<?php
		do_action('electronic_store_before_default_page');
		while ( have_posts() ) :
			the_post();
			get_template_part( 'template-parts/content/content', 'page' );
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
		endwhile; // End of the loop.
		do_action('electronic_store_after_default_page');
		?>
	</main><!-- #main -->
</div><!-- #primary -->
<?php
get_footer(); ?>
