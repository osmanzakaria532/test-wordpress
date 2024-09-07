<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Electronic Store
 */
get_header();
$s_post_el_is_on = array(
	'show_recommend_posts' => get_theme_mod('show_recommend_posts', true),
	'show_post_navigation' => get_theme_mod('show_post_navigation', true),
	'show_post_author_box' => get_theme_mod('show_post_author_box', true),
	'post_layout' => get_theme_mod('post_page_layout', '1'),
);
?>
<div id="primary" class="content-area">
	<main id="main" class="site-main">
		<?php do_action('electronic_store_before_default_page'); ?>
			<div class="post-details-page">
				<?php
				while ( have_posts() ) :
					the_post();
					get_template_part( 'template-parts/content/content', 'single' );
				endwhile; // End of the loop.
				if(true == $s_post_el_is_on['show_post_navigation']):
					electronic_store_post_page_navigation();
				endif;

				if( true == $s_post_el_is_on['show_post_author_box'] ) :
					electronic_store_postedby();
				endif;
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
				if (true == $s_post_el_is_on['show_recommend_posts']) :
					echo '<div class="related-post-wrapper">';
						electronic_store_cats_related_post();
					echo '</div>';
				endif;
				?>
			</div>
		<?php do_action('electronic_store_after_default_page'); ?>
	</main><!-- #main -->
</div><!-- #primary -->
<?php
get_footer();
