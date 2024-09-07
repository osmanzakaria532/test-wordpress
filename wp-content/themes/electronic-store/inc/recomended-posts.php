<?php
// Recomended Posts Section For Reader
function electronic_store_cats_related_post() {
    $post_id = get_the_ID();
    $cat_ids = array();
    $categories = get_the_category( $post_id );
    if( is_array($categories) && !empty($categories) ):
        foreach ($categories as $category):
            array_push($cat_ids, $category->term_id);
        endforeach;
    endif;
    $current_post_type = get_post_type($post_id);
    $query_args = array(
        'category__in'   => $cat_ids,
        'post_type'      => $current_post_type,
        'post__not_in'    => array($post_id),
        'posts_per_page'  => '2'
     );
    $post_el_is_on = array(
        'show_post_category' => get_theme_mod('show_post_category', true),
        'show_post_thumbnail' => get_theme_mod('show_post_thumbnail', true),
        'show_post_date' => get_theme_mod('show_post_date', true),
        'show_post_author' => get_theme_mod('show_post_author', true),
        'show_post_title' => get_theme_mod('show_post_title', true),
        'show_post_excerpt' => get_theme_mod('show_post_excerpt', true),
    );
    $get_post_page_sidebar = get_theme_mod('post_sidebar', 'no');
    $sidebar_layouts = $get_post_page_sidebar;

    $post_columns_class =  'col-md-6 col-lg-4 blog-grid-layout';
    if ('no' == $sidebar_layouts) {
        $post_columns_class =  'col-md-6 col-lg-4 blog-grid-layout';
    }elseif('right' == $sidebar_layouts || 'left' == $sidebar_layouts){
        $post_columns_class =  'col-md-12 col-lg-6 col-xl-6 blog-grid-layout';
    }elseif('both' == $sidebar_layouts){
        $post_columns_class =  'col-md-12 blog-grid-layout';
    }
    $related_cats_post = new WP_Query( $query_args );
    if($related_cats_post->have_posts()):
    	?>
        <div class="recommended-post-section mt-5 mb-5">
			<h4 class="related-post-title text-left"><?php esc_html_e( 'Recommended Posts', 'electronic-store' ); ?></h4>
        	<?php
        	echo '<div class="related-post-slider masonry_active row justify-content-md-center">';
             while($related_cats_post->have_posts()): $related_cats_post->the_post(); ?>
               <div class="<?php echo esc_attr($post_columns_class);?>">
                    <?php get_template_part( 'template-parts/content/post', 'layout' );?>
                </div>
            <?php endwhile;
            echo '</div>';
        echo '</div>';
        // Restore original Post Data
        wp_reset_postdata();
     endif;
}?>
