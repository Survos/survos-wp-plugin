<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    survos_wp
 * @subpackage survos_wp/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    survos_wp
 * @subpackage survos_wp/admin
 * @author     Your Name <email@example.com>
 */
class survos_wp_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $survos_wp    The ID of this plugin.
	 */
	private $survos_wp;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $survos_wp       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $survos_wp, $version ) {

		$this->survos_wp = $survos_wp;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in survos_wp_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The survos_wp_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->survos_wp, plugin_dir_url( __FILE__ ) . 'css/survos-wp-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in survos_wp_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The survos_wp_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->survos_wp, plugin_dir_url( __FILE__ ) . 'js/survos-wp-admin.js', array( 'jquery' ), $this->version, false );

	}

}
