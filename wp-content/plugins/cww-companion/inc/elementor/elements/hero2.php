<?php

namespace Elementor;
// Elementor Classes
use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Utils;
use Elementor\Group_Control_Image_Size;
use Elementor\Group_Control_Typography;
use NewzzElements\Group_Control_Query;
use Elementor\Core\Schemes;
use Elementor\Controls_Stack;


if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

/**
 *  Widget
 */
class Xews_Lite_Hero2 extends Widget_Base {

    /**
     * Retrieve  widget name.
     *
     * @access public
     *
     * @return string Widget name.
     */
    public function get_name() {
        return 'hero2';
    }

    /**
     * Retrieve  widget title.
     *
     * @access public
     *
     * @return string Widget title.
     */
    public function get_title() {
        return esc_html__('Hero 2', 'cww-companion');
    }

    public function get_style_depends() {
        return [
            'biz-elements-blogs'
        ];
    }

    /**
     * Retrieve the list of categories the  widget belongs to.
     *
     * Used to determine where to display the widget in the editor.
     *
     * @access public
     *
     * @return array Widget categories.
     */
    public function get_categories() {
        return ['xews-lite-elements'];
    }



    /**
     * Retrieve  widget icon.
     *
     * @access public
     *
     * @return string Widget icon.
     */
    public function get_icon() {
        return 'eicon-columns';
    }

    /**
     * Register  widget controls.
     *
     * Adds different input fields to allow the user to change and customize the widget settings.
     *
     * @access protected
     */
    protected function register_controls() {

        $this->start_controls_section(
            'header', [
                'label' => esc_html__('Blogs', 'cww-companion'),
            ]
        );

       
         $this->add_control(
            'post_meta',
            [
                'label'             => esc_html__( 'Post Meta', 'cww-companion' ),
                'type'              => Controls_Manager::SWITCHER,
                'default'           => 'yes',
                'label_on'          => esc_html__( 'Yes', 'cww-companion' ),
                'label_off'         => esc_html__( 'No', 'cww-companion' ),
                'return_value'      => 'yes',
            ]
        );

      
        
        $this->add_control(
            'post_author',
            [
                'label'             => esc_html__( 'Post Author', 'cww-companion' ),
                'type'              => Controls_Manager::SWITCHER,
                'default'           => 'yes',
                'label_on'          => esc_html__( 'Yes', 'cww-companion' ),
                'label_off'         => esc_html__( 'No', 'cww-companion' ),
                'return_value'      => 'yes',
                'condition'         => [
                    'post_meta'     => 'yes',
                ],
            ]
        );
        
        $this->add_control(
            'post_category',
            [
                'label'             => esc_html__( 'Post Category', 'cww-companion' ),
                'type'              => Controls_Manager::SWITCHER,
                'default'           => 'yes',
                'label_on'          => esc_html__( 'Yes', 'cww-companion' ),
                'label_off'         => esc_html__( 'No', 'cww-companion' ),
                'return_value'      => 'yes',
                'condition'         => [
                    'post_meta'     => 'yes',
                ],
            ]
        );
        
        $this->add_control(
            'post_date',
            [
                'label'             => esc_html__( 'Post Date', 'cww-companion' ),
                'type'              => Controls_Manager::SWITCHER,
                'default'           => 'yes',
                'label_on'          => esc_html__( 'Yes', 'cww-companion' ),
                'label_off'         => esc_html__( 'No', 'cww-companion' ),
                'return_value'      => 'yes',
                'condition'         => [
                    'post_meta'     => 'yes',
                ],
            ]
        );
        

        

        $this->add_group_control(
            Group_Control_Image_Size::get_type(),
            [
                'name'              => 'image_size',
                'label'             => esc_html__( 'Image Size', 'cww-companion' ),
                'default'           => 'full',
            ]
        );

        $this->end_controls_section();

        

          /**
         * Content Tab: Query
         */
        $this->start_controls_section(
            'section_post_query',
            [
                'label'             => esc_html__( 'Query', 'cww-companion' ),
            ]
        );

        $this->add_group_control(
                Group_Control_Query::get_type(), [
            'name' => 'posts',
            'label' => esc_html__( 'Posts', 'cww-companion' ),
                ]
        );

        $this->end_controls_section();



         /**
         * Style Tab: Post Meta
         */
        $this->start_controls_section(
                'meta_style', [
                    'label' => esc_html__('Post Meta', 'cww-companion'),
                    'tab' => Controls_Manager::TAB_STYLE,
                ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(), [
                'name' => 'meta_typography',
                'label' => esc_html__('Typography', 'cww-companion'),
                'selector' => 
                    '{{WRAPPER}} .entry-meta span a,
                    {{WRAPPER}} .entry-meta span',
                
                'scheme' => Schemes\Typography::TYPOGRAPHY_1,
            ]
        );


        $this->add_control(
            'meta_color', [
                'label'     => __('Text Color', 'cww-companion'),
                'type'      => Controls_Manager::COLOR,
                'scheme'    => [
                    'type'  => Schemes\Color::get_type(),
                    'value' => Schemes\Color::COLOR_3,
                ],
                'selectors' => [
                    '{{WRAPPER}} .entry-meta span a' => 'color: {{VALUE}}',
                    '{{WRAPPER}} .entry-meta span' => 'color: {{VALUE}}',
                ],
            ]
        );
       

        $this->end_controls_section();


        /**
         * Style Tab: Title
         */
        $this->start_controls_section(
                'section_header_style', [
                    'label' => esc_html__('Title', 'cww-companion'),
                    'tab' => Controls_Manager::TAB_STYLE,
                ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(), [
                'name' => 'header_typography',
                'label' => esc_html__('Typography', 'cww-companion'),
                'selector' => '{{WRAPPER}} .code-wrapp.hero1 h2.entry-title a',
                'scheme' => Schemes\Typography::TYPOGRAPHY_1,
            ]
        );


        $this->add_control(
            'header_text_color', [
                'label'     => __('Text Color', 'cww-companion'),
                'type'      => Controls_Manager::COLOR,
                'scheme'    => [
                    'type'  => Schemes\Color::get_type(),
                    'value' => Schemes\Color::COLOR_3,
                ],
                'selectors' => [
                    '{{WRAPPER}} .code-wrapp.hero1 h2.entry-title a' => 'color: {{VALUE}}',
                ],
            ]
        );
       

        $this->end_controls_section();
      

    }

    /**
     * Render widget output on the frontend.
     *
     * Written in PHP and used to generate the final HTML.
     *
     * 
     */
    public function render() {

        $settings       = $this->get_settings();
        
        $this->add_render_attribute('code-wrapp', 'class', 'code-wrapp hero1 hero2');
        
        
        ?>

        <div <?php echo $this->get_render_attribute_string('code-wrapp'); ?>>

           <?php $this->get_current_loop_contents(); ?>

        </div>

        <?php }



    protected function get_current_loop_contents(){
        $settings           = $this->get_settings();
        $posts_per_page     = 3;
        $post_category      = $settings['post_category'];
        $posts_offset       = $settings['posts_offset'];
        
        $counter = 1;
        $args = code_elements_query($settings, $first_id = '',$posts_per_page, $posts_offset);
        $featured_posts = new \WP_Query( $args );
        

         if ( $featured_posts->have_posts() ) : while ($featured_posts->have_posts()) : $featured_posts->the_post();
            $total_posts =  $featured_posts->post_count;

            if ( has_post_thumbnail() ) {
                $image_id = get_post_thumbnail_id( get_the_ID() );
                
                $thumb_url = Group_Control_Image_Size::get_attachment_image_src( $image_id, 'image_size', $settings );
                
            } else {
               $thumb_url = '#';
            }

       ?>
        <div class="blog-outer-wrapp section-<?php echo esc_attr($counter)?>">
        
            <div class="blog-inner-wrapp">

                <?php if ( has_post_thumbnail() ) { ?>
                <div class="background-img" style="background-image:url(<?php echo esc_url($thumb_url)?>)">
                    <a href="<?php the_permalink(); ?>" class="post-thumbnail"></a>
                </div>
                <?php } ?>
                <div class="post-content-outer">
                <div class="post-content">
                <div class="post-content-inner">

                    <?php if( $post_category == 'yes' ){
                        do_action('xews_post_cat_or_tag_lists');
                    } ?>

                    <h2 class="entry-title font-medium">
                        <a href="<?php the_permalink() ?>"> <?php the_title(); ?> </a>
                    </h2>
                    <div class="entry-meta">
                        <?php echo code_elements_post_meta($settings); ?>
                    </div>
                </div>
                </div>
                </div>

            </div>

       
        </div>
        <?php

        $counter++;
        endwhile; endif; wp_reset_postdata(); 

     }

        
        

        /**
         * Render posts widget output in the editor.
         *
         * Written as a Backbone JavaScript template and used to generate the live preview.
         *
         * @access protected
         */
        protected function content_template() {
            
        }

    }
    Plugin::instance()->widgets_manager->register_widget_type( new Xews_Lite_Hero2() );