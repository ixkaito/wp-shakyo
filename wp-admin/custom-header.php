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
}
