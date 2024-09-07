<?php
add_shortcode('rswpbs_advanced_search', 'rswpbs_advanced_search');
function rswpbs_advanced_search($atts){
	global $post;
	$atts = shortcode_atts(array(
		'show_name_field'	=>	'',
		), $atts
	);
	ob_start();
	$book_formats = array();
	$book_publishers = array();
	$book_publish_years = array();
	$args = array(
		'post_type'	=>	'book',
		'numberposts'	=>	-1,
	);
	$booksQuery = get_posts( $args );
	foreach($booksQuery as $query) :
		$format = strtolower(rswpbs_get_book_format($query->ID));
		$publisher = strtolower(rswpbs_get_book_publisher_name($query->ID));
		$year = strtolower(rswpbs_get_book_publish_year($query->ID));
		if (!in_array($format, $book_formats) && '' != $format) {
			$book_formats[] = strtolower($format);
		}
		if (!in_array($publisher, $book_publishers) && '' != $publisher) {
			$book_publishers[] = strtolower($publisher);
		}
		if (!in_array($year, $book_publish_years) && '' != $year && 'nan' != $year) {
			$book_publish_years[] = strtolower($year);
		}
	endforeach;

	$bookAuthors = get_terms( array(
				    'taxonomy' => 'book-author',
				    'hide_all' => false,
				) );
	$bookSeries = get_terms( array(
				    'taxonomy' => 'book-series',
				    'hide_all' => false,
				) );
	$bookCategories = get_terms( array(
				    'taxonomy' => 'book-category',
				    'hide_all' => false,
				) );
	$search_fields = rswpbs_search_fields();

	$actionUrl = rswpbs_search_page_base_url();


	$showNameField = true;
	$showAuthorField = true;
	$showCategoryField = true;
	$showSeriesField = true;
	$showFormatsField = true;
	$showYearsField = true;
	$ShowResetIcon = true;
	$showPublishersField = true;
	if (class_exists('Rswpbs_Pro')) {
		$showNameField = get_field( 'show_name_field' ,'option');
		$showAuthorField = get_field( 'show_author_field' ,'option');
		$showCategoryField = get_field( 'show_category_field' ,'option');
		$showSeriesField = get_field( 'show_series_field' ,'option');
		$showFormatsField = get_field( 'show_formats_field' ,'option');
		$showYearsField = get_field( 'show_years_field' ,'option');
		$ShowResetIcon = get_field( 'show_reset_icon' ,'option');
		$showPublishersField = get_field( 'show_publishers_field' ,'option');
	}
	?>
		<div class="rswpthemes-books-showcase-search-form-container">
			<form class="rswpthemes-books-search-form" id="rswpthemes-books-search-form" action="<?php echo esc_url( $actionUrl ); ?>" method="get">
				<input type="hidden" name="search_type" value="book">
				<input type="hidden" name="sortby" id="rswpbs-sortby" value="">
				<div class="rswpthemes-search-form rswpbs-row">
					<?php
					if (true == $showNameField) :
					?>
					<div class="rswpbs-col-lg-3 rswpbs-col-6 rswpbs-col-md-6">
						<div class="search-field">
							<input type="text" name="book_name" id="book-name" placeholder="<?php echo rswpbs_static_text_book_name();?>" value="<?php echo $search_fields['name']?>">
						</div>
					</div>
					<?php
					endif;
					if (true == $showAuthorField) :
						sort($bookAuthors);
					?>
					<div class="rswpbs-col-lg-3 rswpbs-col-6 rswpbs-col-md-6">
						<div class="search-field">
							<select name="author" id="book-author" class="rswpthemes-select-field">
								<option value="all"><?php echo rswpbs_static_text_all_authors();?></option>
								<?php foreach( $bookAuthors as $author ) : ?>
								<option value="<?php echo esc_attr( $author->slug );?>" <?php selected( $author->slug, $search_fields['author'], true );?>>
									<?php echo esc_html( $author->name );?>
								</option>
								<?php endforeach; ?>
							</select>
						</div>
					</div>
					<?php
					endif;
					if (true == $showCategoryField) :
						sort($bookCategories);
					?>
					<div class="rswpbs-col-lg-3 rswpbs-col-6 rswpbs-col-md-6">
						<div class="search-field">
							<select name="category" id="book-category" class="rswpthemes-select-field">
								<option value="all"><?php echo rswpbs_static_text_all_categories();?></option>
								<?php foreach($bookCategories as $category) : ?>
								<option value="<?php echo esc_attr($category->slug);?>" <?php selected($category->slug, $search_fields['category'], true);?> >
									<?php echo esc_html( $category->name );?>
								</option>
								<?php endforeach; ?>
							</select>
						</div>
					</div>
					<?php
					endif;
					if (true == $showSeriesField) :
						sort($bookSeries);
					?>
					<div class="rswpbs-col-lg-3 rswpbs-col-6 rswpbs-col-md-6">
						<div class="search-field">
							<select name="series" id="book-series" class="rswpthemes-select-field">
								<option value="all"><?php echo rswpbs_static_text_all_series();?></option>
								<?php foreach($bookSeries as $series) : ?>
								<option value="<?php echo esc_attr($series->slug);?>" <?php selected($series->slug, $search_fields['series'], true);?> >
									<?php echo esc_html( $series->name );?>
								</option>
								<?php endforeach; ?>
							</select>
						</div>
					</div>
					<?php
					endif;
					if (true == $showFormatsField) :
						sort($book_formats);
					?>
					<div class="rswpbs-col-lg-3 rswpbs-col-6 rswpbs-col-md-6">
						<div class="search-field">
							<select name="format" id="book-format" class="rswpthemes-select-field">
								<option value="all"><?php echo rswpbs_static_text_all_formats();?></option>
								<?php foreach($book_formats as $bookFormat) : ?>
								<option value="<?php echo esc_html($bookFormat) ?>" <?php echo selected( $bookFormat, $search_fields['format'], true );?>>
									<?php echo esc_html($bookFormat);?>
								</option>
								<?php endforeach; ?>
							</select>
						</div>
					</div>
					<?php
					endif;
					if (true == $showPublishersField) :
						sort($book_publishers);
					?>
					<div class="rswpbs-col-lg-3 rswpbs-col-6 rswpbs-col-md-6">
						<div class="search-field">
							<select name="publisher" id="book-publisher" class="rswpthemes-select-field">
								<option value="all"><?php echo rswpbs_static_text_all_publishers();?></option>
								<?php foreach($book_publishers as $publisher) : ?>
								<option value="<?php echo esc_html($publisher) ?>" <?php selected( $publisher, $search_fields['publisher'], true ); ?>>
									<?php echo esc_html($publisher);?>
								</option>
								<?php endforeach; ?>
							</select>
						</div>
					</div>
					<?php
					endif;
					if (true == $showYearsField) :
						sort($book_publish_years);
					?>
					<div class="rswpbs-col-lg-3 rswpbs-col-6 rswpbs-col-md-6">
						<div class="search-field">
							<select name="publish_year" id="publish_year" class="rswpthemes-select-field">
								<option value="all"><?php echo rswpbs_static_text_all_years();?></option>
								<?php foreach($book_publish_years as $year) : ?>
								<option value="<?php echo esc_html($year) ?>" <?php selected( $year, $search_fields['publish_year'], true ); ?>>
									<?php echo esc_html($year);?>
								</option>
								<?php endforeach; ?>
							</select>
						</div>
					</div>
					<?php
					endif;
					?>
					<div class="rswpbs-col-lg-2 rswpbs-col-6 rswpbs-col-md-6">
						<div class="search-field">
							<input type="submit" value="<?php echo rswpbs_static_text_search();?>">
						</div>
					</div>
					<?php
					if( true == $ShowResetIcon) :
					?>
					<div class="rswpbs-col-lg-1 rswpbs-col-3">
						<div class="search-field">
							<button type="button" class="reset-search-form"><i class="fa-solid fa-arrows-rotate"></i></button>
						</div>
					</div>
					<?php
					endif;
					?>
				</div>
			</form>
		</div>
	<?php
	wp_reset_postdata();
	return ob_get_clean();
}