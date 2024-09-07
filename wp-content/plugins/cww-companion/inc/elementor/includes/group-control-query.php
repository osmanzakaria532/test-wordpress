<?php

namespace NewzzElements;

use Elementor\Controls_Manager;
use Elementor\Group_Control_Base;

if (!defined('ABSPATH'))
    exit; // Exit if accessed directly

    
// Get all Authors
if ( !function_exists( 'code_elements_get_auhtors' ) ) {

    function code_elements_get_auhtors() {

        $options = array();

        $users = get_users();

        foreach ( $users as $user ) {
            $options[ $user->ID ] = $user->display_name;
        }

        return $options;
    }

}

// Get all Posts
if ( !function_exists( 'code_elements_get_posts' ) ) {

    function code_elements_get_posts() {

        $post_list = get_posts( array(
            'post_type' => 'post',
            'orderby' => 'date',
            'order' => 'DESC',
            'posts_per_page' => -1,
                ) );

        $posts = array();

        if ( !empty( $post_list ) && !is_wp_error( $post_list ) ) {
            foreach ( $post_list as $post ) {
                $posts[ $post->ID ] = $post->post_title;
            }
        }

        return $posts;
    }

}


class Group_Control_Query extends Group_Control_Base {

    protected static $fields;

    public static function get_type() {
        return 'code-elements-query';
    }
   

    protected function init_fields() {
        $fields = [];

        $fields['post_type'] = [
            'label' => _x('Source', 'Posts Query Control', 'newzz-elements'),
            'type' => Controls_Manager::SELECT,
        ];

        return $fields;
    }

    protected function prepare_fields($fields) {


        $post_types = self::get_post_types();

        $fields['post_type']['options'] = $post_types;

        $fields['post_type']['default'] = 'post'; //key($post_types);

        $taxonomy_filter_args = [
            'show_in_nav_menus' => true,
        ];

        $taxonomies = get_taxonomies($taxonomy_filter_args, 'objects');
        
        foreach ($taxonomies as $taxonomy => $object) {
            $options = array();
            
            $terms = get_terms($taxonomy);

            foreach ($terms as $term) {
                $options[$term->term_id] = $term->name;
            }
            
            $fields[$taxonomy . '_ids'] = [
                'label'         => $object->label,
                'type'          => Controls_Manager::SELECT2,
                'label_block'   => true,
                'multiple'      => true,
                'object_type'   => $taxonomy,
                'options'       => $options,
                'condition'     => [
                    'post_type' => $object->object_type,
                ],
            ];
        }
        
        $fields['authors'] = [
            'label'         => esc_html__('Authors', 'newzz-elements'),
            'type'          => Controls_Manager::SELECT2,
            'label_block'   => true,
            'multiple'      => true,
            'options'       => code_elements_get_auhtors(),
            'condition'     => [
                'post_type' => 'post'
            ]
        ];

        $fields['exclude_posts'] = [
            'label'         => esc_html__('Exclude Posts', 'newzz-elements'),
            'type'          => Controls_Manager::SELECT2,
            'label_block'   => true,
            'multiple'      => true,
            'options'       => code_elements_get_posts(),
            'condition'     => [
                'post_type' => 'post'
            ]
        ];
        
        $fields['orderby'] = [
            'label'         => esc_html__('Order By', 'newzz-elements'),
            'type'          => Controls_Manager::SELECT,
            'options'       => [
                'date'          => esc_html__('Date', 'newzz-elements'),
                'modified'      => esc_html__('Last Modified Date', 'newzz-elements'),
                'rand'          => esc_html__('Rand', 'newzz-elements'),
                'comment_count' => esc_html__('Comment Count', 'newzz-elements'),
                'title'         => esc_html__('Title', 'newzz-elements'),
                'ID'            => esc_html__('Post ID', 'newzz-elements'),
                'author'        => esc_html__('Post Author', 'newzz-elements'),
            ],
            'default' => 'date',
        ];

        $fields['order'] = [
            'label'     => esc_html__('Order', 'newzz-elements'),
            'type'      => Controls_Manager::SELECT,
            'options'   => [
                'DESC'  => esc_html__('Descending', 'newzz-elements'),
                'ASC'   => esc_html__('Ascending', 'newzz-elements'),
            ],
            'default'   => 'DESC',
        ];
        
        $fields['offset'] = [
            'label'     => esc_html__('Offset', 'newzz-elements'),
            'type'      => Controls_Manager::NUMBER,
            'default'   => 0,
        ];

        return parent::prepare_fields($fields);
    }

    private static function get_post_types() {
        $post_type_args = [
            'show_in_nav_menus' => true,
        ];
        
        $_post_types = get_post_types($post_type_args, 'objects');

        $post_types = [];

        foreach ($_post_types as $post_type => $object) {
            $post_types[$post_type] = $object->label;
        }

        return $post_types;
    }

    protected function get_default_options() {
        return [
            'popover' => false,
        ];
    }
}
 // Register Group
 \Elementor\Plugin::instance()->controls_manager->add_group_control( 'code-elements-query', new Group_Control_Query() );