<?php
/**
 * Template Name: No Container / Blank Template
 * Template Post Type: page
 *
 * @package Electronic Store
 */
get_header();
?>
<div class="blank-page-template-wrapper">
<?php
while ( have_posts() ) :
	the_post();
	get_template_part( 'template-parts/content/content', 'page' );
	// If comments are open or we have at least one comment, load up the comment template.
	if ( comments_open() || get_comments_number() ) :
		comments_template();
		endif;
	endwhile; // End of the loop.
	?>
</div>
<?php
get_footer();
