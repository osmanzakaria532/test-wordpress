<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Electronic Store
 */
get_header();
$showHomeBanner = get_theme_mod('show_home_banner', false);
if (true == $showHomeBanner && !is_paged()) :
	get_template_part( 'template-parts/home-banner/home-banner' );
endif;
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
</div>
<?php
get_footer();
