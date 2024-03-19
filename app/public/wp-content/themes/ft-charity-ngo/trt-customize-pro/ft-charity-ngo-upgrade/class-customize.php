<?php
/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class ft_charity_ngo_Customize {

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
			$instance = new self;
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
	 * @param  object  $manager
	 * @return void
	 */
	public function sections( $manager ) {

		// Load custom sections.
		require_once( trailingslashit( get_template_directory() ) . 'trt-customize-pro/ft-charity-ngo-upgrade/section-pro.php' );

		// Register custom section types.
		$manager->register_section_type( 'ft_charity_ngo_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section(
			new ft_charity_ngo_Customize_Section_Pro(
				$manager,
				'example_1',
				array(
					'title'    => esc_html__( 'FT Charity NGO', 'ft-charity-ngo' ),
					'pro_text' => esc_html__( 'Upgrade to Premium',         'ft-charity-ngo' ),
					'pro_url'  => 'https://www.flawlessthemes.com/theme/ft-charity-ngo-best-charity-ngo-wordpress-theme-ever/',
					'priority' => 1
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

		wp_enqueue_script( 'ft-charity-ngo-upgrade-customize-controls', trailingslashit( get_template_directory_uri() ) . 'trt-customize-pro/ft-charity-ngo-upgrade/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'ft-charity-ngo-upgrade-customize-controls', trailingslashit( get_template_directory_uri() ) . 'trt-customize-pro/ft-charity-ngo-upgrade/customize-controls.css' );
	}
}

// Doing this customizer thang!
ft_charity_ngo_Customize::get_instance();
