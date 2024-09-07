<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package Electronic Store
 */

function electronic_store_body_classes( $classes ) {
	global $post;

	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}
	if (is_page()) {
		$get_page_sidebar_settings = get_theme_mod('page_sidebar', 'no');
		$sidebar_layouts = $get_page_sidebar_settings;
		$indvPageSidebarSettings = get_post_meta( $post->ID, 'electronic_store_sidebar-settings', true );
		if ('customizer' === $indvPageSidebarSettings || empty($indvPageSidebarSettings)) {
			$sidebar_layouts = $get_page_sidebar_settings;
		}else{
			$sidebar_layouts = $indvPageSidebarSettings;
		}
		$classes[] = $sidebar_layouts . '-sidebar';
	}elseif (is_single()) {
		$get_post_sidebar_settings = get_theme_mod('post_sidebar', 'no');
		$sidebar_layouts = $get_post_sidebar_settings;
		$indvPostSidebarSettings = get_post_meta( $post->ID, 'electronic_store_sidebar-settings', true );
		if ('customizer' === $indvPostSidebarSettings || empty($indvPostSidebarSettings)) {
			$sidebar_layouts = $get_post_sidebar_settings;
		}else{
			$sidebar_layouts = $indvPostSidebarSettings;
		}
		$classes[] = $sidebar_layouts . '-sidebar';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'right-sidebar' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'electronic_store_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function electronic_store_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}
add_action( 'wp_head', 'electronic_store_pingback_header' );
if ( ! function_exists( 'electronic_store_comment_list' ) ) :
	/**
	 * Template for comments and pingbacks.
	 *
	 * Used as a callback by wp_list_comments() for displaying the comments.
	 *
	 * @since Shape 1.0
	 */
	function electronic_store_comment_list( $comment, $args, $depth ) {
		extract( $args, EXTR_SKIP );
		if ( 'div' == $args['style'] ) {
			$tag       = 'div';
			$add_below = 'comment';
		} else {
			$tag       = 'li';
			$add_below = 'div-comment';
		}
		?>
  <<?php echo esc_attr( $tag ); ?> <?php comment_class( empty( $args['has_children'] ) ? '' : 'parent' ); ?> id="comment-<?php comment_ID(); ?>">
		<?php if ( 'div' == $args['style'] ) : ?>
  <div id="div-comment-<?php comment_ID(); ?>" class="comment-body review-list">
	<?php endif; ?>
	<div class="single-comment">
		<div class="commenter-image">
			<?php
			if ( 0 != $args['avatar_size'] ) {
				echo get_avatar( $comment, $args['avatar_size'] );}
			?>
		</div>
		<div class="commnenter-details">
		<?php if ( $comment->comment_approved == '0' ) : ?>
			<em><?php esc_html_e( 'Your comment is awaiting moderation.', 'electronic-store' ); ?></em>
			<br />
		<?php endif; ?>
			<div class="comment-meta">
				<div class="comment-time">
					<p>
						<time datetime="<?php comment_time( 'c' ); ?>">
							<?php
								echo esc_html( get_comment_date() . ' ' );
								echo esc_html( get_comment_time() );
							?>
						</time>
					</p>
				</div>
				<h4><?php printf( wp_kses_post( '%s', 'electronic-store' ), sprintf( '%s', get_comment_author_link() ) ); ?></h4>
			</div>
				<?php comment_text(); ?>
				<?php
				comment_reply_link(
					array_merge(
						$args,
						array(
							'depth'     => $depth,
							'max_depth' => $args['max_depth'],
							'before'    => '<div class="reply">',
							'after'     => '</div>',
						)
					)
				);
				?>
		</div>
	</div>
		<?php if ( 'div' == $args['style'] ) : ?>
  </div>
			<?php
  endif;
	}
endif; // ends check for electronic_store_comment_list();

/**
 * Author VCard
 */
function electronic_store_author_vcard() {
	?>
	<div class="author-vcard">
		<div class="author-vcard__image">
			<?php
			echo get_avatar( get_the_author_meta( 'ID' ), 100, '', '', null );
			?>
		</div>
		<div class="author-vcard__about">
			<h4><?php echo esc_html( get_the_author_meta( 'nickname' ) ); ?></h4>
			<?php if(!empty(get_the_author_meta( 'description' ))): ?>
			<p><?php echo wp_kses_post( get_the_author_meta( 'description' ) ); ?></p>
			<?php endif; ?>
			<p>
			<?php
			$userpost_count = count_user_posts( get_the_author_meta( 'ID' ), 'post', false );
			if ( $userpost_count > 1 ) {
				$numberingtext = 'posts';
			} else {
				$numberingtext = 'post';
			}
			$userposts = esc_html__( 'The author has %1$s %2$s', 'electronic-store' );
			printf( $userposts, $userpost_count, $numberingtext );
			?>
			 </p>
		</div>
	</div>
	<?php
	return;
}

/**
 * Get Current Year
 */

 function electronic_store_currentYear(){
    return date('Y');
}

/**
 * Get theme Data
 */
function electronic_store_author_uri(){
	$themeData = wp_get_theme();
	return $authorURI = $themeData->get( 'AuthorURI' );
}

/**
 * Masonry Layout Control
 */
function electronic_store_masonry_layout_control(){
	$get_masonry_layout = get_theme_mod('active_masonry_layout', true);
	if (true === $get_masonry_layout) {
		return ' masonry_active';
	}
	return '';
}

/**
 * Limit Excerpt length
 */
function electronic_store_post_excerpt_limit( $length ) {
	$length = get_theme_mod('post_loop_excerpt_limit', 42);
   return $length;
}
add_filter( 'excerpt_length', 'electronic_store_post_excerpt_limit', 999 );


/**
 * Social Links
 */
function electronic_store_social_links() {
    $social_media_fields = array(
        'facebook' => 'Facebook',
        'twitter' => 'Twitter',
        'instagram' => 'Instagram',
        'tiktok' => 'Tiktok',
        'linkedin' => 'Linkedin',
        'pinterest' => 'Pinterest',
        'line' => 'Line',
        'github' => 'Github',
        'discord' => 'Discord',
        'youtube' => 'Youtube',
        'wordpress' => 'WordPress',
        'slack' => 'Slack',
        'apple' => 'Apple',
        'stack-overflow' => 'Stack-overflow',
        'kickstarter' => 'kickstarter',
        'dribbble' => 'Dribbble',
        'codepen' => 'Codepen',
        'whatsapp' => 'Whatsapp',
        'medium' => 'Medium',
        'goodreads' => 'Goodreads'
    );

    $output = '';

    foreach ( $social_media_fields as $field => $label ) {
        $value = get_theme_mod( $field, '#' );
        if ( ! empty( $value ) && '#' != $value ) {
            $output .= '<a target="_blank" href="' . esc_url( $value ) . '" class="rswpthemes-icon icon-'.$field.'"></a>';
        }
    }

    return $output;
}

function electronic_store_get_books_layout(){
	$getBooksLayout = get_theme_mod('books_layout', 'product');
	return $getBooksLayout;
}

function electronic_store_template_chooser($template){
	  global $wp_query;
	  $post_type = get_query_var('post_type');
	  if( $wp_query->is_search && $post_type == 'books-gallery' )
	  {
	    return locate_template('search-books.php');  //  redirect to archive-search.php
	  }
	  return $template;
}
add_filter('template_include', 'electronic_store_template_chooser');

add_action('admin_menu', 'electronic_store_personalize');
function electronic_store_personalize(){
	remove_submenu_page( 'sb-instagram-feed', 'sb-instagram-feed-about' );
}

add_action('sbi_before_feed', 'electronic_store_sbi_before_feed');
function electronic_store_sbi_before_feed(){
	?>
	<div class="electronic-store-instagram-section">
	<?php
}

add_action('sbi_after_feed', 'electronic_store_sbi_after_feed');
function electronic_store_sbi_after_feed(){
	?>
	</div>
	<?php
}

function electronic_store_page_header_control(){
	$get_page_header = true;
	if (is_archive()) {
		$get_page_header = get_theme_mod('show_page_banner_on_archive_pages', true);
	}elseif(is_page()){
		$get_page_header = get_theme_mod('show_page_banner_on_pages', true);
	}
	$page_header = $get_page_header;
	$page_meta_header = true;
	if (is_page()) :
		$get_page_meta_header_settings = get_post_meta( get_the_ID(), 'electronic_store_show-page-banner', true );
		if ('show' == $get_page_meta_header_settings) {
			$page_meta_header = true;
		}elseif('hide' == $get_page_meta_header_settings){
			$page_meta_header = false;
		}
		if ('customizer' === $get_page_meta_header_settings || NULL === $get_page_meta_header_settings) {
			$page_header = $get_page_header;
		}else{
			$page_header = $page_meta_header;
		}
	endif;

	return $page_header;
}


function electronic_store_utm_url($medium){
    $rawUrl = sprintf(
        'https://rswpthemes.com/shofy-premium-multipurpose-woocommerce-theme/?utm_source=free_theme&utm_medium=%s&utm_campaign=electronic_store',
        rawurlencode($medium)
    );
    return $rawUrl;
}

/**
 * electronic_store_is_woocommerce_exist
 */
if ( ! function_exists( 'electronic_store_is_woocommerce_exists' ) ) {
	function electronic_store_is_woocommerce_exists() {
		if ( class_exists( 'woocommerce' ) && is_woocommerce() ) {
			return true;
		}
		return false;
	}
}
/**
 * electronic_store is default page
 */
if ( ! function_exists( 'electronic_store_is_default_page' ) ) {
	function electronic_store_is_default_page() {
		if ( is_home() || is_archive() || is_404() || is_author() || is_category() || electronic_store_is_woocommerce_exists() || is_search() || is_tag() ) {
			return true;
		}
		return false;
	}
}

/**
 * Fix skip link focus in IE11.
 * This does not enqueue the script because it is tiny and because it is only for IE11,
 * thus it does not warrant having an entire dedicated blocking script being loaded.
 *
 * @link https://git.io/vWdr2
 */
function electronic_store_skip_link_focus_fix() {
	// The following is minified via `terser --compress --mangle -- js/skip-link-focus-fix.js`.
	?>
	<script>
	/(trident|msie)/i.test(navigator.userAgent)&&document.getElementById&&window.addEventListener&&window.addEventListener("hashchange",function(){var t,e=location.hash.substring(1);/^[A-z0-9_-]+$/.test(e)&&(t=document.getElementById(e))&&(/^(?:a|select|input|button|textarea)$/i.test(t.tagName)||(t.tabIndex=-1),t.focus())},!1);
	</script>
	<?php
}
add_action( 'wp_print_footer_scripts', 'electronic_store_skip_link_focus_fix' );
