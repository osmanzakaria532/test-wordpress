<?php
namespace Elementor;

function cww_companion_xews_lite_elementor_init(){
	Plugin::instance()->elements_manager->add_category(
		'xews-lite-elements',
		[
			'title'  => esc_html__('Xews Lite','ultra-el'),
			'icon' => 'font'
		],
		0
	);
}
add_action('elementor/init','Elementor\cww_companion_xews_lite_elementor_init');


/**
* Queries for the elements
*
*/
if( ! function_exists('code_elements_query')){
    function code_elements_query( $settings, $first_id = '',$post_per_page = 4, $offset = 0 ){

        $post_type      = $settings['posts_post_type'];
        $category       = '';
        $tags           = '';
        $exclude_posts  = '';
        $post_formats   = '';
        if( get_post_format() ){
            $post_formats   = $settings['posts_post_format_ids'];
        }
        

        if ( !empty( $post_formats) ) {
            $post_formats[] = implode( ",", $post_formats );
        }



        if( 'post' == $post_type ){

            $category       = $settings['posts_category_ids'];
            $tags           = $settings['posts_post_tag_ids'];
            $exclude_posts  = $settings['posts_exclude_posts'];

        }elseif( 'product' == $post_type ){

          $category         = $settings['posts_product_cat_ids'];  
          $exclude_posts    = $settings['posts_exclude_posts'];

        }

        //Categories
        $post_cat = '';
        $post_cats = $category;
        if ( ! empty( $category) ){
            asort($category);    
        }
        
        if ( !empty( $post_cats) ) {
            $post_cat = implode( ",", $post_cats );
        }

        
        if( !empty($first_id)){
            $post_cat = $category[0];
        }


        // Post Authors
        $post_author = '';
        $post_authors = $settings['posts_authors'];
        if ( !empty( $post_authors) ) {
            $post_author = implode( ",", $post_authors );
        }

        if( $post_formats ){

            $args = array(
                    'post_type'             => $post_type,
                    'post__in'              => '',
                    'cat'                   => $post_cat,
                    'author'                => $post_author,
                    'tag__in'               => $tags,
                    'orderby'               => $settings['posts_orderby'],
                    'order'                 => $settings['posts_order'],
                    'post__not_in'          => $exclude_posts,
                    'offset'                => $offset,
                    'ignore_sticky_posts'   => 1,
                    'posts_per_page'        => $post_per_page,
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'post_format',
                            'field'    => 'slug',
                            'terms'    => $post_formats,
                            'operator' => 'IN',
                        ),
                    ),
                );

        }else{

            $args = array(
                        'post_status'           => array( 'publish' ),
                        'post_type'             => $post_type,
                        'post__in'              => '',
                        'cat'                   => $post_cat,
                        'author'                => $post_author,
                        'tag__in'               => $tags,
                        'orderby'               => $settings['posts_orderby'],
                        'order'                 => $settings['posts_order'],
                        'post__not_in'          => $exclude_posts,
                        'offset'                => $offset,
                        'ignore_sticky_posts'   => 1,
                        'posts_per_page'        => $post_per_page
                    );
        }

        if( 'product' == $post_type ){

            $args = array(
                        'post_type'             => 'product',
                        'post__in'              => '',
                        'orderby'               => $settings['posts_orderby'],
                        'order'                 => $settings['posts_order'],
                        'author'                => $post_author,
                        'posts_per_page'        => $post_per_page,
                        'post__not_in'          => $exclude_posts,
                        'offset'                => $offset,
                       
                    );

            if( $post_cat ){
                 $args['tax_query'] = array(
                            array(
                                'taxonomy' => 'product_cat',
                                'field' => 'term_id',
                                'terms' => $post_cat
                            )
                        );
            }
        }


         return $args;

    }
}

/**
* Function to generate post meta 
*
*/
if( ! function_exists('code_elements_post_meta')):
    function code_elements_post_meta($settings){

        if( $settings['post_meta'] == 'yes' ){ ?>
            <div class="post-meta">
              

                <?php if ( $settings['post_author'] == 'yes' ) { ?>
                        <span class="cww-post-author">
                            
                            <span class="author-by">
							    <?php esc_html_e('BY','newzz-elements'); ?>
							</span>
                            <?php
							$byline = sprintf(
                                /* translators: %s: post author. */
                                esc_html_x( '%s', 'post author', 'newzz-elements' ),
                                '<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
                            );
                    
                            echo '<span class="byline"> ' . $byline . '</span>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                            ?>
                        </span>
                    <?php } ?>

                    <?php if ( $settings['post_date'] == 'yes' ) { 
                        newzz_elements_posted_on();
                    } 
                  ?>
            </div>
    <?php
        }
    }
endif;


if ( ! function_exists( 'newzz_elements_posted_on' ) ) :
	/**
	 * Prints HTML with meta information for the current post-date/time.
	 */
	function newzz_elements_posted_on() {
		$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
		if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
			$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
		}

		$time_string = sprintf(
			$time_string,
			esc_attr( get_the_date( DATE_W3C ) ),
			esc_html( get_the_date() ),
			esc_attr( get_the_modified_date( DATE_W3C ) ),
			esc_html( get_the_modified_date() )
		);

		$posted_on = sprintf(
			/* translators: %s: post date. */
			esc_html_x( '%s', 'post date', 'newzz-elements' ),
			'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
		);

		echo '<span class="posted-on">' . $posted_on . '</span>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped

	}
endif;

// Custom Excerpt
if ( !function_exists( 'code_elements_custom_excerpt' ) ) {

    function code_elements_custom_excerpt( $limit = '' ) {
        $striped_contents   = strip_shortcodes( get_the_excerpt() );
        $striped_content    = strip_tags( $striped_contents );
        $limit_content      = mb_substr( $striped_content, 0 , $limit );
       
        return $limit_content;
    }

}