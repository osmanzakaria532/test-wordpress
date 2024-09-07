<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Electronic Store
 */

$s_post_el_is_on = array(
	'show_post_category' => get_theme_mod('show_single_post_category', true),
	'show_post_thumbnail' => get_theme_mod('show_single_post_thumbnail', true),
	'show_post_date' => get_theme_mod('show_single_post_date', true),
	'show_post_comments' => get_theme_mod('show_single_post_comments', true),
	'show_post_author' => get_theme_mod('show_single_post_author', true),
	'show_post_title' => get_theme_mod('show_single_post_title', true),
	'show_recommend_posts' => get_theme_mod('show_recommend_posts', true),
	'show_post_navigation' => get_theme_mod('show_post_navigation', true),
	'show_post_tags' => get_theme_mod('show_single_post_tags', true),
);
$nolinebetweenmeta = '';
if (false == $s_post_el_is_on['show_post_author']) {
	$nolinebetweenmeta = ' no-line-between-meta';
}
$singlePostExtraClassess = 'electronic-store-standard-post';
?>
<article id="post-<?php the_ID(); ?>" <?php post_class( $singlePostExtraClassess ); ?>>
	<div class="electronic-store-standard-post__entry-content text-left">
		<div class="electronic-store-standard-post__post-meta-wrapper">
			<?php
			if(true == $s_post_el_is_on['show_post_category']) :
			?>
			<div class="electronic-store-standard-post__overlay-category">
				<?php electronic_store_categories(); ?>
			</div>
			<?php endif;?>
			<div class="electronic-store-standard-post__post-title pl-0">
				<?php
				if(true == $s_post_el_is_on['show_post_title']) :?>
					<h1 class="single-post-title text-center"><?php the_title(); ?></h1>
				<?php endif;
				?>
			</div>
			<div class="electronic-store-standard-post__blog-meta<?php echo esc_attr($nolinebetweenmeta);?> pl-0">
				<?php
				if (true == $s_post_el_is_on['show_post_author']) :
					electronic_store_posted_by( true );
				endif;
				if(true == $s_post_el_is_on['show_post_date']) :
					electronic_store_posted_on(true);
				endif;
				if (true == $s_post_el_is_on['show_post_comments']) :
					electronic_store_comment_popuplink();
				endif;
				?>
			</div>
		</div>
		<?php if ( has_post_thumbnail() ) : ?>
			<div class="electronic-store-standard-post__thumbnail post-header p-0">
				<?php
				if (true == $s_post_el_is_on['show_post_thumbnail']) :
					electronic_store_post_thumbnail();
				endif;?>
			</div>
		<?php endif;?>
		<div class="electronic-store-standard-post__content-wrapper pl-0 pr-0">
			<div class="electronic-store-standard-post__content-inner">
				<div class="electronic-store-standard-post__full-summery text-left">
					<?php
						the_content();
						wp_link_pages(
							array(
								'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'electronic-store' ),
								'after'  => '</div>',
							)
						);
					?>
				</div>
				<?php if( true == $s_post_el_is_on['show_post_tags']) : ?>
					<div class="electronic-store-standard-post_post-meta text-center">
						<?php electronic_store_post_tag(); ?>
					</div>
				<?php endif;?>
			</div>
		</div>
	</div>
</article>
