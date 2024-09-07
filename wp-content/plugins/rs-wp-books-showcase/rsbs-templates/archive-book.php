<?php
/**
 * Archive Template For Book Post Type
 */
get_header();

$showSearchSection = 'true';
$bookPerPage = 8;
$show_sorting_section = 'true';
$bookCoverPosition = 'top';
$booksPerRow = '4';
$showBookTItle = 'true';
$showBookAuthor = 'true';
$showBookPrice = 'true';
$showBookDescription = 'true';
$showBuyNowBtn = 'true';
if (class_exists('Rswpbs_Pro')) {
	$showSearchSection = get_field('show_search_section', 'option');
	$showSearchSection =  ($showSearchSection === NULL || $showSearchSection === true) ? 'true' : 'false';
	$bookPerPage = get_field('books_per_page', 'option');
	$bookPerPage = ($bookPerPage === NULL ) ? 8 : $bookPerPage;
	$show_sorting_section = get_field('show_sorting_section', 'option');
	$show_sorting_section = ($show_sorting_section === NULL || $show_sorting_section === true) ? 'true' : 'false';
	$bookCoverPosition = get_field('book_cover_position', 'option');
	$booksPerRow = get_field('books_per_row', 'option');
    $showBookTItle = get_field('show_book_title', 'option');
    $showBookTItle = ($showBookTItle === NULL || $showBookTItle === true) ? 'true' : 'false';
    $showBookAuthor = get_field('show_author_name', 'option');
    $showBookAuthor = ($showBookAuthor === NULL || $showBookAuthor === true) ? 'true' : 'false';
    $showBookPrice = get_field('show_price', 'option');
    $showBookPrice = ($showBookPrice === NULL || $showBookPrice === true) ? 'true' : 'false';
    $showBookDescription = get_field('show_description', 'option');
    $showBookDescription = ($showBookDescription === NULL || $showBookDescription === true) ? 'true' : 'false';
    $showBuyNowBtn = get_field('show_buy_now_button', 'option');
    $showBuyNowBtn = ($showBuyNowBtn === NULL || $showBuyNowBtn === true) ? 'true' : 'false';
}
?>
<div class="rswpbs-archive-pages-wrapper">
	<div class="rswpbs-container">
		<?php
		do_action('rswpbs_archive_before_book_loop');
		echo do_shortcode("[rswpbs_book_gallery books_per_page=\"$bookPerPage\" books_per_row=\"$booksPerRow\" categories_include='false' categories_exclude='false' authors_include='false' authors_exclude='false' exclude_books='false' order='DESC' orderby='date' show_pagination='true' show_author=\"$showBookAuthor\" show_title=\"$showBookTItle\" title_type='title' show_image='true' image_type='book_cover' image_position=\"$bookCoverPosition\" show_excerpt=\"$showBookDescription\" excerpt_type='excerpt' excerpt_limit='30' show_price=\"$showBookPrice\" show_buy_button=\"$showBuyNowBtn\" show_msl='false' msl_title_align='center' content_align='center' show_search_form=\"$showSearchSection\" show_sorting_form=\"$show_sorting_section\"]");
		do_action('rswpbs_archive_after_book_loop');
		?>
	</div>
</div>
<?php
get_footer();
