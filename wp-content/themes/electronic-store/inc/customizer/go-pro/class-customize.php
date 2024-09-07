<?php
/**
 * Blog Starter Theme Info
 *
 * @package Blog_Starter
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class Electronic_Store_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self();
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object $manager
	 * @return void
	 */
	public function sections( $manager ) {

		// Load custom sections.
		require get_template_directory() . '/inc/customizer/go-pro/section-pro.php';

		// Register custom section types.
		$manager->register_section_type( 'Electronic_Store_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section(
			new Electronic_Store_Customize_Section_Pro(
				$manager,
				'go-pro',
				array(
					'priority'       => 1,
					'pro_text' => esc_html__( 'View Premium Version', 'electronic-store' ),
					'pro_url'  => electronic_store_utm_url('customizer_screen'),
				)
			)
		);
	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {
		wp_enqueue_script( 'electronic-store-customize-controls', get_theme_file_uri( '/inc/customizer/go-pro/customize-controls.js' ), array( 'customize-controls' ) );

		wp_enqueue_style( 'electronic-store-customize-controls', get_theme_file_uri( '/inc/customizer/go-pro/customize-controls.css' ));
	}
}

// Doing this customizer thang!
Electronic_Store_Customize::get_instance();
