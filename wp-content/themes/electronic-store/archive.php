<?php
/**
 *   The template for displaying archive pages
 *
 *   @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 *   @package Electronic Store
 */
get_header();
if (true === electronic_store_page_header_control()) {
	get_template_part('template-parts/page-header/page', 'header');
}
?>
<div id="primary" class="content-area">
	<main id="main" class="site-main">
		<?php
		do_action( 'electronic_store_before_default_page' );
		if ( have_posts() ) :
			echo '<div class="row'.electronic_store_masonry_layout_control().'">';
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();
				get_template_part( 'template-parts/content/content', get_post_type() );
				endwhile;
			echo '</div>';
			electronic_store_navigation();
			else :
				get_template_part( 'template-parts/content/content', 'none' );
			endif;
			do_action( 'electronic_store_after_default_page' );
			?>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
