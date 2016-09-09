<?php
/**
 * The custom header image script.
 *
 * @package WordPress
 * @subpackage Administration
 */

/**
 * The custom header image class.
 *
 * @since 2.1.0
 * @package WordPress
 * @subpackage Administration
 */
class Custom_Image_Header {

	/**
	 * Callback for administration header.
	 *
	 * @var callback
	 * @since 2.1.0
	 * @access private
	 */
	private $admin_header_callback;

	/**
	 * Callback for header div.
	 *
	 * @var callback
	 * @since 3.0.0
	 * @access private
	 */
	private $admin_image_div_callback;

	/**
	 * Holds default headers.
	 *
	 * @var array
	 * @since 3.0.0
	 * @access private
	 */
	private $default_headers = array();

	/**
	 * Holds custom headers uploaded by the user.
	 *
	 * @var array
	 * @since 3.2.0
	 * @access private
	 */
	private $uploaded_headers = array();

	/**
	 * Holds the page menu hook.
	 *
	 * @var string
	 * @since 3.0.0
	 * @access private
	 */
	private $page = '';

	/**
	 * Constructor - Register administration header callback.
	 *
	 * @since 2.1.0
	 * @param callback $admin_header_callback
	 * @param callback $admin_image_div_callback Optional custom image div output callback.
	 * @return Custom_Image_Header
	 */
	public function __construct($admin_header_callback, $admin_image_div_callback = '') {
		$this->admin_header_callback = $admin_header_callback;
		$this->admin_image_div_callback = $admin_image_div_callback;

		add_action( 'admin_menu', array( $this, 'init' ) );

		add_action( 'customize_save_after',         array( $this, 'customize_set_last_used' ) );
		add_action( 'wp_ajax_custom-header-crop',   array( $this, 'ajax_header_crop'        ) );
		add_action( 'wp_ajax_custom-header-add',    array( $this, 'ajax_header_add'         ) );
		add_action( 'wp_ajax_custom-header-remove', array( $this, 'ajax_header_remove'      ) );
	}
}
