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
class Xews_Lite_Slider1 extends Widget_Base {

    /**
     * Retrieve  widget name.
     *
     * @access public
     *
     * @return string Widget name.
     */
    public function get_name() {
        return 'slider1';
    }

    /**
     * Retrieve  widget title.
     *
     * @access public
     *
     * @return string Widget title.
     */
    public function get_title() {
        return esc_html__('Slider 1', 'cww-companion');
    }

    public function is_reload_preview_required() {
		return true;  
	  }

    //   public function get_script_depends() {
    //     return [
    //         'code-elements-companion-frontend'
    //     ];
    // }
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

        $this->add_control(
            'post_excerpt',
            [
                'label'             => esc_html__( 'Post Excerpt', 'cww-companion' ),
                'type'              => Controls_Manager::SWITCHER,
                'default'           => 'no',
                'label_on'          => esc_html__( 'Yes', 'cww-companion' ),
                'label_off'         => esc_html__( 'No', 'cww-companion' ),
                'return_value'      => 'yes',
                
            ]
        );

        
        
        $this->add_control(
            'excerpt_length',
            [
                'label'             => esc_html__( 'Excerpt Length', 'cww-companion' ),
                'type'              => Controls_Manager::NUMBER,
                'default'           => 125,
                'min'               => 0,
                'max'               => 950,
                'step'              => 1,
                'condition'         => [
                    'post_excerpt'  => 'yes'
                ]
            ]
        );
        
        $this->add_control(
            'read_more',
            [
                'label'             => esc_html__( 'Read More Button', 'cww-companion' ),
                'type'              => Controls_Manager::SWITCHER,
                'default'           => 'no',
                'label_on'          => esc_html__( 'Yes', 'cww-companion' ),
                'label_off'         => esc_html__( 'No', 'cww-companion' ),
                'return_value'      => 'yes',
                'condition'         => [
                    'post_excerpt'  => 'yes'
                ]
                
            ]
        );

       

        $this->add_control(
            'posts_per_page',
            [
                'label'             => esc_html__( 'No. Of Posts To Display', 'cww-companion' ),
                'type'              => Controls_Manager::NUMBER,
                'default'           => 8,
                'min'               => 1,
                'max'               => 50,
                'step'              => 1,
               
            ]
        );

      

        $this->end_controls_section();
        
        /**
         * Slider options
         */
        $this->start_controls_section(
            'section_post_slider',
            [
                'label'             => esc_html__( 'Slider Options', 'cww-companion' ),
            ]
        );


        $this->add_control(
            'slider_arrows',
            [
                'label'             => esc_html__( 'Slider Arrows', 'cww-companion' ),
                'type'              => Controls_Manager::SWITCHER,
                'default'           => 'yes',
                'label_on'          => esc_html__( 'Yes', 'cww-companion' ),
                'label_off'         => esc_html__( 'No', 'cww-companion' ),
                'return_value'      => 'yes',
                
            ]
        );

        $this->add_control(
            'slider_dots',
            [
                'label'             => esc_html__( 'Slider Dots', 'cww-companion' ),
                'type'              => Controls_Manager::SWITCHER,
                'default'           => 'no',
                'label_on'          => esc_html__( 'Yes', 'cww-companion' ),
                'label_off'         => esc_html__( 'No', 'cww-companion' ),
                'return_value'      => 'yes',
                
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
                'selector' => '{{WRAPPER}} .code-wrapp.slider1 h2.entry-title a',
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
                    '{{WRAPPER}} .code-wrapp.slider1 h2.entry-title a' => 'color: {{VALUE}}',
                ],
            ]
        );
       

        $this->end_controls_section();


         /**
         * Style Tab: Post Contents
         */
        $this->start_controls_section(
                'content_style', [
                    'label' => esc_html__('Slider Descriptions', 'cww-companion'),
                    'tab' => Controls_Manager::TAB_STYLE,
                ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(), [
                'name' => 'content_typography',
                'label' => esc_html__('Typography', 'cww-companion'),
                'selector' => '{{WRAPPER}} .code-wrapp.slider1 .post-content p',
                'scheme' => Schemes\Typography::TYPOGRAPHY_1,
            ]
        );


        $this->add_control(
            'content_color', [
                'label'     => __('Text Color', 'cww-companion'),
                'type'      => Controls_Manager::COLOR,
                'scheme'    => [
                    'type'  => Schemes\Color::get_type(),
                    'value' => Schemes\Color::COLOR_3,
                ],
                'selectors' => [
                    '{{WRAPPER}} .code-wrapp.slider1 .post-content p' => 'color: {{VALUE}}',
                ],
            ]
        );
       

        $this->end_controls_section();


         /**
         * Style Tab: Read More Button
         */
        $this->start_controls_section(
                'button_style', [
                    'label' => esc_html__('Read More Button', 'cww-companion'),
                    'tab' => Controls_Manager::TAB_STYLE,
                ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(), [
                'name' => 'btn_typography',
                'label' => esc_html__('Typography', 'cww-companion'),
                'selector' => '{{WRAPPER}} a.btn.read-more',
                'scheme' => Schemes\Typography::TYPOGRAPHY_1,
            ]
        );


        $this->add_control(
            'btn_color', [
                'label'     => __('Text Color', 'cww-companion'),
                'type'      => Controls_Manager::COLOR,
                'scheme'    => [
                    'type'  => Schemes\Color::get_type(),
                    'value' => Schemes\Color::COLOR_3,
                ],
                'selectors' => [
                    '{{WRAPPER}} a.btn.read-more' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_control(
            'btn_color_hover', [
                'label'     => __('Text Color:hover', 'cww-companion'),
                'type'      => Controls_Manager::COLOR,
                'scheme'    => [
                    'type'  => Schemes\Color::get_type(),
                    'value' => Schemes\Color::COLOR_3,
                ],
                'selectors' => [
                    '{{WRAPPER}} a.btn.read-more:hover' => 'color: {{VALUE}}',
                ],
            ]
        );
       
        $this->add_control(
            'btn_color_bg', [
                'label'     => __('Background Color', 'cww-companion'),
                'type'      => Controls_Manager::COLOR,
                'scheme'    => [
                    'type'  => Schemes\Color::get_type(),
                    'value' => Schemes\Color::COLOR_3,
                ],
                'selectors' => [
                    '{{WRAPPER}} a.btn.read-more' => 'background: {{VALUE}}',
                ],
            ]
        );

        $this->add_control(
            'btn_color_bg_hover', [
                'label'     => __('Background Color:hover', 'cww-companion'),
                'type'      => Controls_Manager::COLOR,
                'scheme'    => [
                    'type'  => Schemes\Color::get_type(),
                    'value' => Schemes\Color::COLOR_3,
                ],
                'selectors' => [
                    '{{WRAPPER}} a.btn.read-more:hover' => 'background: {{VALUE}}',
                ],
            ]
        );

        $this->end_controls_section();

          /**
         * Style Tab: Slider nav
         */
        $this->start_controls_section(
            'content_nav_style', [
                'label' => esc_html__('Slider Navigation', 'cww-companion'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(), [
                'name' => 'content_nav_typography',
                'label' => esc_html__('Typography', 'cww-companion'),
                'selector' => '{{WRAPPER}} .code-wrapp.slider1 .slider-nav h2.entry-title.font-medium',
                'scheme' => Schemes\Typography::TYPOGRAPHY_1,
            ]
        );


        $this->add_control(
            'content_nav_color', [
                'label'     => __('Text Color', 'cww-companion'),
                'type'      => Controls_Manager::COLOR,
                'scheme'    => [
                    'type'  => Schemes\Color::get_type(),
                    'value' => Schemes\Color::COLOR_3,
                ],
                'selectors' => [
                    '{{WRAPPER}} .code-wrapp.slider1 .slider-nav h2.entry-title.font-medium' => 'color: {{VALUE}}',
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
        $slider_arrows  = $settings['slider_arrows'];
        $slider_dots    = $settings['slider_dots'];
        $slides_show    = 4;

        $this->add_render_attribute('code-wrapp', 'class', 'code-wrapp slider1');
        

        
        
        ?>

        <div <?php echo $this->get_render_attribute_string('code-wrapp'); ?> data-val=":<?php echo esc_attr($slider_arrows.':'.$slider_dots.':'.$slides_show)?>">

           <div class="slider-main-wrapper"> <?php $this->get_current_loop_contents(); ?></div>

        </div>

        <?php }



    protected function get_current_loop_contents(){
        $settings           = $this->get_settings();
        $posts_per_page     = $settings['posts_per_page'];
        $post_category      = $settings['post_category'];
        $posts_offset       = $settings['posts_offset'];
        
        
        

        $args = code_elements_query($settings, $first_id = '',$posts_per_page, $posts_offset);
        $featured_posts = new \WP_Query( $args );
        

         if ( $featured_posts->have_posts() ) : while ($featured_posts->have_posts()) : $featured_posts->the_post();
            $total_posts =  $featured_posts->post_count;

            $image_id      = get_post_thumbnail_id( get_the_ID() );
            $image_path    = wp_get_attachment_image_src( $image_id, 'full', true );
            $img_src       = $image_path[0];

        ?>
        <div class="blog-outer-wrapp">
            <div class="blog-inner-wrapp">
                <?php if ( has_post_thumbnail() ) { ?>
                <div class="img-wrapp" style="background-image:url(<?php echo esc_url($img_src)?>)"></div>
                <?php } ?>
                <div class="post-content container">
                    <?php
                    if( $post_category == 'yes' ){
                        do_action('xews_post_cat_or_tag_lists');
                    } ?>
                    <h2 class="entry-title font-medium">
                        <a href="<?php the_permalink() ?>"> <?php the_title(); ?> </a>
                    </h2>
                    <div class="entry-meta">
                        <?php echo code_elements_post_meta($settings); ?>
                    </div>
                    <?php if( $settings['post_excerpt'] == 'yes' ): ?>
                        <p>
                            <?php echo code_elements_custom_excerpt($settings['excerpt_length']); ?>    
                        </p>
                        <?php if( $settings['read_more'] == 'yes' ): ?>
                            <div class="read-more-link">
                                <a href="<?php the_permalink();?>" class="btn read-more"><?php esc_html_e('Read More','cww-companion');?>
                                    <i class="fas fa-long-arrow-alt-right"></i>
                                </a>
                            </div>
                        <?php endif; ?>
                    <?php endif; ?>
                   
                </div>
            </div>
        </div>
        <?php
        
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
    Plugin::instance()->widgets_manager->register_widget_type( new Xews_Lite_Slider1() );