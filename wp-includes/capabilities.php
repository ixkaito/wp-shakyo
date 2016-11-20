<?php
/**
 * WordPress Roles and Capabilities.
 *
 * @package WordPress
 * @subpackage User
 */

/**
 * WordPress User Roles.
 *
 * The role option is simple, the structure is organized by role name that store
 * the name in value of the 'name' key. The capabilities are stored as an array
 * in the value of the 'capability' key.
 *
 * <code>
 * array (
 *		'rolename' => array (
 *			'name' => 'rolename',
 *			'capabilities' => array()
 *		)
 * )
 * </code>
 *
 * @since 2.0.0
 * @package WordPress
 * @subpackage User
 */
class WP_Roles {
	/**
	 * List of roles and capabilities.
	 *
	 * @since 2.0.0
	 * @access public
	 * @var array
	 */
	public $roles;

	/**
	 * List of the role objects.
	 *
	 * @since 2.0.0
	 * @access public
	 * @var array
	 */
	public $role_objects = array();

	/**
	 * List of role names.
	 *
	 * @since 2.0.0
	 * @access public
	 * @var array
	 */
	public $role_names = array();

	/**
	 * Option name for storing role list.
	 *
	 * @since 2.0.0
	 * @access public
	 * @var string
	 */
	public $role_key;

	/**
	 * Whether to use the database for retrieval and storage.
	 *
	 * @since 2.1.0
	 * @access public
	 * @var bool
	 */
	public $use_db = true;

	/**
	 * Constructor
	 *
	 * @since 2.0.0
	 */
	public function __construct() {
		$this->_init();
	}

	/**
	 * Set up the object properties.
	 *
	 * The role key is set to the current prefix for the $wpdb object with
	 * 'user_roles' appended. If the $wp_user_roles global is set, then it will
	 * be used and the role option will not be updated or used.
	 *
	 * @since 2.1.0
	 * @access protected
	 * @uses $wpdb Used to get the database prefix.
	 * @global array $wp_user_roles Used to set the 'roles' property value.
	 */
	protected function _init() {
		global $wpdb, $wp_user_roles;
		$this->role_key = $wpdb->get_blog_prefix() . 'user_roles';
		if ( ! empty( $wp_user_roles ) ) {
			$this->roles = $wp_user_roles;
			$this->use_db = false;
		} else {
			$this->roles = get_option( $this->role_key );
		}

		if ( empty( $this->roles ) )
			return;

		$this->role_objects = array();
		$this->role_names =  array();
		foreach ( array_keys( $this->roles ) as $role ) {
			$this->role_objects[$role] = new WP_Role( $role, $this->roles[$role]['capabilities'] );
			$this->role_names[$role] = $this->roles[$role]['name'];
		}
	}
}

/**
 * WordPress User class.
 *
 * @since 2.0.0
 * @package WordPress
 * @subpackage User
 */
class WP_User {}
