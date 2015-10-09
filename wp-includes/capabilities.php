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
 * 		'rolename' => array (
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
class WP_User {
	/**
	 * User data container.
	 *
	 * @since 2.0.0
	 * @access private
	 * @var array
	 */
	var $data;

	/**
	 * The user's ID.
	 *
	 * @since 2.1.0
	 * @access public
	 * @var int
	 */
	public $ID = 0;

	/**
	 * The individual capabilities the user has been given.
	 *
	 * @since 2.0.0
	 * @access public
	 * @var array
	 */
	public $caps = array();

	/**
	 * User metadata option name.
	 *
	 * @since 2.0.0
	 * @access public
	 * @var string
	 */
	public $cap_key;

	/**
	 * The roles the user is part of.
	 *
	 * @since 2.0.0
	 * @access public
	 * @var array
	 */
	public $roles = array();

	/**
	 * All capabilities the user has, including individual and role based.
	 *
	 * @since 2.0.0
	 * @access public
	 * @var array
	 */
	public $allcaps = array();

	/**
	 * The filter context applied to user data fields.
	 *
	 * @since 2.9.0
	 * @access private
	 * @var string
	 */
	var $filter = null;

	private static $back_compat_keys;

	/**
	 * Constructor
	 *
	 * Retrieves the userdata and passes it to {@link WP_User::init()}.
	 *
	 * @since 2.0.0
	 * @access public
	 *
	 * @param int|string|stdClass|WP_User $id User's ID, a WP_User object, or a user object from the DB.
	 * @param string $name Optional. User's username
	 * @param int $blog_id Optional Blog ID, defaults to current blog.
	 * @return WP_User
	 */
	public function __construct( $id = 0, $name = '', $blog_id = '' ) {
		if ( ! isset( self::$back_compat_keys ) ) {
			$prefix = $GLOBALS['wpdb']->prefix;
			self::$back_compat_keys = array(
				'user_firstname' => 'first_name',
				'user_lastname' => 'last_name',
				'user_description' => 'description',
				'user_level' => $prefix . 'user_level',
				$prefix . 'usersettings' => $prefix . 'user-settings',
				$prefix . 'usersettingstime' => $prefix . 'user-settings-time',
			);
		}

		if ( is_a( $id, 'WP_User' ) ) {
			$this->init( $id->data, $blog_id );
			return;
		} elseif ( is_object( $id ) ) {
			$this->init( $id, $blog_id );
			return;
		}

		if ( ! empty( $id ) && ! is_numeric( $id ) ) {
			$name = $id;
			$id = 0;
		}

		if ( $id )
			$data = self::get_data_by( 'id', $id );
		else
			$data = self::get_data_by( 'login', $name );

		if ( $data )
			$this->init( $data, $blog_id );
	}

	/**
	 * Return only the main user fields
	 *
	 * @since 3.3.0
	 *
	 * @param string $field The field to query against: 'id', 'slug', 'email' or 'login'
	 * @param string|int $value The field value
	 * @return object Raw user object
	 */
	public static function get_data_by( $field, $value ) {
		global $wpdb;

		if ( 'id' == $field ) {
			// Make sure the value is numeric to avoid casting objects, for example,
			// to int 1.
			if ( ! is_numeric( $value ) )
				return false;
			$value = intval( $value );
			if ( $value < 1 )
				return false;
		} else {
			$value = trim( $value );
		}

		if ( !$value )
			return false;

		switch ( $field ) {
			case 'id':
				$user_id = $value;
				$db_field = 'ID';
				break;
			case 'slug':
				$user_id = wp_cache_get($value, 'userslugs');
				$db_field = 'user_nicename';
				break;
			case 'email':
				$user_id = wp_cache_get($value, 'useremail');
				$db_field = 'user_email';
				break;
			case 'login':
				$value = sanitize_user( $value );
				$user_id = wp_cache_get($value, 'userlogins');
				$db_field = 'user_login';
				break;
			default:
				return false;
		}

		if ( false !== $user_id ) {
			if ( $user = wp_cache_get( $user_id, 'users' ) )
				return $user;
		}

		if ( !$user = $wpdb->get_row( $wpdb->prepare(
			"SELECT * FROM $wpdb->users WHERE $db_field = %s", $value
		) ) )
			return false;

		update_user_caches( $user );

		return $user;
	}

	/**
	 * Whether user has capability or role name.
	 *
	 * This is useful for looking up whether the user has a specific role
	 * assigned to the user. The second optional parameter can also be used to
	 * check for capabilities against a specific object, such as a post or user.
	 *
	 * @since 2.0.0
	 * @access public
	 *
	 * @param string|int $cap Capability or role name to search.
	 * @return bool True, if user has capability; false, if user does not have capability.
	 */
	public function has_cap( $cap ) {
		if ( is_numeric( $cap ) ) {
			_deprecated_argument( __FUNCTION__, '2.0', __('Usage of user levels by plugins and themes is deprecated. Use roles and capabilities instead.') );
			$cap = $this->translate_level_to_cap( $cap );
		}

		$args = array_slice( func_get_args(), 1 );
		$args = array_merge( array( $cap, $this->ID ), $args );
		$caps = call_user_func_array( 'map_meta_cap', $args );

		// Multisite super admin has all caps by definition, Unless specifically denied.
		if ( is_multisite() && is_super_admin( $this->ID ) ) {
			if ( in_array('do_not_allow', $caps) )
				return false;
			return true;
		}

		/**
		 * Dynamically filter a user's capabilities.
		 *
		 * @since 2.0.0
		 * @since 3.7.0 Added the user object.
		 *
		 * @param array   $allcaps An array of all the role's capabilities.
		 * @param array   $caps    Actual capabilities for meta capability.
		 * @param array   $args    Optional parameters passed to has_cap(), typically object ID.
		 * @param WP_User $user    The user object.
		 */
		// Must have ALL requested caps
		$capabilities = apply_filters( 'user_has_cap', $this->allcaps, $caps, $args, $this );
		$capabilities['exist'] = true;// Everyone is allowed to exist
		foreach ( (array) $caps as $cap ) {
			if ( empty( $capabilities[ $cap ] ) )
				return false;
		}

		return true;
	}
}

/**
 * Whether current user has capability or role.
 *
 * @since 2.0.0
 *
 * @param string $capability Capability or role name.
 * @return bool
 */
function current_user_can( $capability ) {
	$current_user = wp_get_current_user();

	if ( empty( $current_user ) )
		return false;

	$args = array_slice( func_get_args(), 1 );
	$args = array_merge( array( $capability ), $args );

	return call_user_func_array( array( $current_user, 'has_cap' ), $args );
}
