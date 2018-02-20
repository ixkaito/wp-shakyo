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































	/**
	 * Add role name with capabilities to list.
	 *
	 * Updates the list of roles, if the role doesn't already exist.
	 *
	 * The capabilities are defined in the following format `array( 'read' => true );`
	 * To explicitly deny a role a capability you set the value for that capability to false.
	 *
	 * @since 2.0.0
	 * @access public
	 *
	 * @param string $role Role name.
	 * @param string $display_name Role display name.
	 * @param array $capabilities List of role capabilities in the above format.
	 * @return WP_Role|null WP_Role object if role is added, null if already exists.
	 */
	public function add_role( $role, $display_name, $capabilities = array() ) {
		if ( isset( $this->roles[$role] ) )
			return;

		$this->roles[$role] = array(
			'name' => $display_name,
			'capabilities' => $capabilities
			);
		if ( $this->use_db )
			update_option( $this->role_key, $this->roles );
		$this->role_objects[$role] = new WP_Role( $role, $capabilities );
		$this->role_names[$role] = $display_name;
		return $this->role_objects[$role];
	}





























































	/**
	 * Retrieve role object by name.
	 *
	 * @since 2.0.0
	 * @access public
	 *
	 * @param string $role Role name.
	 * @return WP_Role|null WP_Role object if found, null if the role does not exist.
	 */
	public function get_role( $role ) {
		if ( isset( $this->role_objects[$role] ) )
			return $this->role_objects[$role];
		else
			return null;
	}

























}

/**
 * WordPress Role class.
 *
 * @since 2.0.0
 * @package WordPress
 * @subpackage User
 */
class WP_Role {
	/**
	 * Role name.
	 *
	 * @since 2.0.0
	 * @access public
	 * @var string
	 */
	public $name;

	/**
	 * List of capabilities the role contains.
	 *
	 * @since 2.0.0
	 * @access public
	 * @var array
	 */
	public $capabilities;

	/**
	 * Constructor - Set up object properties.
	 *
	 * The list of capabilities, must have the key as the name of the capability
	 * and the value a boolean of whether it is granted to the role.
	 *
	 * @since 2.0.0
	 * @access public
	 *
	 * @param string $role Role name.
	 * @param array $capabilities List of capabilities.
	 */
	public function __construct( $role, $capabilities ) {
		$this->name = $role;
		$this->capabilities = $capabilities;
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
	 * Determine whether the user exists in the database.
	 *
	 * @since 3.4.0
	 * @access public
	 *
	 * @return bool True if user exists in the database, false if not.
	 */
	public function exists() {
		return ! empty( $this->ID );
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
		$capabilities['exist'] = true; // Everyone is allowed to exist
		foreach ( (array) $caps as $cap ) {
			if ( empty( $capabilities[ $cap ] ) )
				return false;
		}

		return true;
	}































}

/**
 * Map meta capabilities to primitive capabilities.
 *
 * This does not actually compare whether the user ID has the actual capability,
 * just what the capability or capabilities are. Meta capability list value can
 * be 'delete_user', 'edit_user', 'remove_user', 'promote_user', 'delete_post',
 * 'delete_page', 'edit_post', 'edit_page', 'read_post', or 'read_page'.
 *
 * @since 2.0.0
 *
 * @param string $cap Capability name.
 * @param int $user_id User ID.
 * @return array Actual capabilities for meta capability.
 */
function map_meta_cap( $cap, $user_id ) {
	$args = array_slice( func_get_args(), 2 );
	$caps = array();

	switch ( $cap ) {
	case 'remove_user':
		$caps[] = 'remove_users';
		break;
	case 'promote_user':
		$caps[] = 'promote_users';
		break;
	case 'edit_user':
	case 'edit_users':
		// Allow user to edit itself
		if ( 'edit_user' == $cap && isset( $args[0] ) && $user_id == $args[0] )
			break;

		// If multisite these caps are allowed only for super admins.
		if ( is_multisite() && !is_super_admin( $user_id ) )
			$caps[] = 'do_not_allow';
		else
			$caps[] = 'edit_users'; // edit_user maps to edit_users.
		break;
	case 'delete_post':
	case 'delete_page':
		$post = get_post( $args[0] );

		if ( 'revision' == $post->post_type ) {
			$post = get_post( $post->post_parent );
		}

		$post_type = get_post_type_object( $post->post_type );

		if ( ! $post_type->map_meta_cap ) {
			$caps[] = $post_type->cap->$cap;
			// Prior to 3.1 we would re-call map_meta_cap here.
			if ( 'delete_post' == $cap )
				$cap = $post_type->cap->$cap;
			break;
		}

		// If the post author is set and the user is the author...
		if ( $post->post_author && $user_id == $post->post_author ) {
			// If the post is published...
			if ( 'publish' == $post->post_status ) {
				$caps[] = $post_type->cap->delete_published_posts;
			} elseif ( 'trash' == $post->post_status ) {
				if ( 'publish' == get_post_meta( $post->ID, '_wp_trash_meta_status', true ) ) {
					$caps[] = $post_type->cap->delete_published_posts;
				}
			} else {
				// If the post is draft...
				$caps[] = $post_type->cap->delete_posts;
			}
		} else {
			// The user is trying to edit someone else's post.
			$caps[] = $post_type->cap->delete_others_posts;
			// The post is published, extra cap required.
			if ( 'publish' == $post->post_status ) {
				$caps[] = $post_type->cap->delete_published_posts;
			} elseif ( 'private' == $post->post_status ) {
				$caps[] = $post_type->cap->delete_private_posts;
			}
		}
		break;
		// edit_post breaks down to edit_posts, edit_published_posts, or
		// edit_others_posts
	case 'edit_post':
	case 'edit_page':
		$post = get_post( $args[0] );
		if ( empty( $post ) )
			break;

		if ( 'revision' == $post->post_type ) {
			$post = get_post( $post->post_parent );
		}

		$post_type = get_post_type_object( $post->post_type );

		if ( ! $post_type->map_meta_cap ) {
			$caps[] = $post_type->cap->$cap;
			// Prior to 3.1 we would re-call map_meta_cap here.
			if ( 'edit_post' == $cap )
				$cap = $post_type->cap->$cap;
			break;
		}

		// If the post author is set and the user is the author...
		if ( $post->post_author && $user_id == $post->post_author ) {
			// If the post is published...
			if ( 'publish' == $post->post_status ) {
				$caps[] = $post_type->cap->edit_published_posts;
			} elseif ( 'trash' == $post->post_status ) {
				if ( 'publish' == get_post_meta( $post->ID, '_wp_trash_meta_status', true ) ) {
					$caps[] = $post_type->cap->edit_published_posts;
				}
			} else {
				// If the post is draft...
				$caps[] = $post_type->cap->edit_posts;
			}
		} else {
			// The user is trying to edit someone else's post.
			$caps[] = $post_type->cap->edit_others_posts;
			// The post is published, extra cap required.
			if ( 'publish' == $post->post_status ) {
				$caps[] = $post_type->cap->edit_published_posts;
			} elseif ( 'private' == $post->post_status ) {
				$caps[] = $post_type->cap->edit_private_posts;
			}
		}
		break;
	case 'read_post':
	case 'read_page':
		$post = get_post( $args[0] );

		if ( 'revision' == $post->post_type ) {
			$post = get_post( $post->post_parent );
		}

		$post_type = get_post_type_object( $post->post_type );

		if ( ! $post_type->map_meta_cap ) {
			$caps[] = $post_type->cap->$cap;
			// Prior to 3.1 we would re-call map_meta_cap here.
			if ( 'read_post' == $cap )
				$cap = $post_type->cap->$cap;
			break;
		}

		$status_obj = get_post_status_object( $post->post_status );
		if ( $status_obj->public ) {
			$caps[] = $post_type->cap->read;
			break;
		}

		if ( $post->post_author && $user_id == $post->post_author ) {
			$caps[] = $post_type->cap->read;
		} elseif ( $status_obj->private ) {
			$caps[] = $post_type->cap->read_private_posts;
		} else {
			$caps = map_meta_cap( 'edit_post', $user_id, $post->ID );
		}
		break;
	case 'publish_post':
		$post = get_post( $args[0] );
		$post_type = get_post_type_object( $post->post_type );

		$caps[] = $post_type->cap->publish_posts;
		break;
	case 'edit_post_meta':
	case 'delete_post_meta':
	case 'add_post_meta':
		$post = get_post( $args[0] );
		$caps = map_meta_cap( 'edit_post', $user_id, $post->ID );

		$meta_key = isset( $args[ 1 ] ) ? $args[ 1 ] : false;

		if ( $meta_key && has_filter( "auth_post_meta_{$meta_key}" ) ) {
			/**
			 * Filter whether the user is allowed to add post meta to a post.
			 *
			 * The dynamic portion of the hook name, $meta_key, refers to the
			 * meta key passed to map_meta_cap().
			 *
			 * @since 3.3.0
			 *
			 * @param bool   $allowed  Whether the user can add the post meta. Default false.
			 * @param string $meta_key The meta key.
			 * @param int    $post_id  Post ID.
			 * @param int    $user_id  User ID.
			 * @param string $cap      Capability name.
			 * @param array  $caps     User capabilities.
			 */
			$allowed = apply_filters( "auth_post_meta_{$meta_key}", false, $meta_key, $post->ID, $user_id, $cap, $caps );
			if ( ! $allowed )
				$caps[] = $cap;
		} elseif ( $meta_key && is_protected_meta( $meta_key, 'post' ) ) {
			$caps[] = $cap;
		}
		break;
	case 'edit_comment':
		$comment = get_comment( $args[0] );
		if ( empty( $comment ) )
			break;
		$post = get_post( $comment->comment_post_ID );
		$caps = map_meta_cap( 'edit_post', $user_id, $post->ID );
		break;
	case 'unfiltered_upload':
		if ( defined('ALLOW_UNFILTERED_UPLOADS') && ALLOW_UNFILTERED_UPLOADS && ( !is_multisite() || is_super_admin( $user_id ) )  )
			$caps[] = $cap;
		else
			$caps[] = 'do_not_allow';
		break;
	case 'unfiltered_html' :
		// Disallow unfiltered_html for all users, even admins and super admins.
		if ( defined( 'DISALLOW_UNFILTERED_HTML' ) && DISALLOW_UNFILTERED_HTML )
			$caps[] = 'do_not_allow';
		elseif ( is_multisite() && ! is_super_admin( $user_id ) )
			$caps[] = 'do_not_allow';
		else
			$caps[] = $cap;
		break;
	case 'edit_files':
	case 'edit_plugins':
	case 'edit_themes':
		// Disallow the file editors.
		if ( defined( 'DISALLOW_FILE_EDIT' ) && DISALLOW_FILE_EDIT )
			$caps[] = 'do_not_allow';
		elseif ( defined( 'DISALLOW_FILE_MODS' ) && DISALLOW_FILE_MODS )
			$caps[] = 'do_not_allow';
		elseif ( is_multisite() && ! is_super_admin( $user_id ) )
			$caps[] = 'do_not_allow';
		else
			$caps[] = $cap;
		break;
	case 'update_plugins':
	case 'delete_plugins':
	case 'install_plugins':
	case 'upload_plugins':
	case 'update_themes':
	case 'delete_themes':
	case 'install_themes':
	case 'upload_themes':
	case 'update_core':
		// Disallow anything that creates, deletes, or updates core, plugin, or theme files.
		// Files in uploads are excepted.
		if ( defined( 'DISALLOW_FILE_MODS' ) && DISALLOW_FILE_MODS ) {
			$caps[] = 'do_not_allow';
		} elseif ( is_multisite() && ! is_super_admin( $user_id ) ) {
			$caps[] = 'do_not_allow';
		} elseif ( 'upload_themes' === $cap ) {
			$caps[] = 'install_themes';
		} elseif ( 'upload_plugins' === $cap ) {
			$caps[] = 'install_plugins';
		} else {
			$caps[] = $cap;
		}
		break;
	case 'activate_plugins':
		$caps[] = $cap;
		if ( is_multisite() ) {
			// update_, install_, and delete_ are handled above with is_super_admin().
			$menu_perms = get_site_option( 'menu_items', array() );
			if ( empty( $menu_perms['plugins'] ) )
				$caps[] = 'manage_network_plugins';
		}
		break;
	case 'delete_user':
	case 'delete_users':
		// If multisite only super admins can delete users.
		if ( is_multisite() && ! is_super_admin( $user_id ) )
			$caps[] = 'do_not_allow';
		else
			$caps[] = 'delete_users'; // delete_user maps to delete_users.
		break;
	case 'create_users':
		if ( !is_multisite() )
			$caps[] = $cap;
		elseif ( is_super_admin() || get_site_option( 'add_new_users' ) )
			$caps[] = $cap;
		else
			$caps[] = 'do_not_allow';
		break;
	case 'manage_links' :
		if ( get_option( 'link_manager_enabled' ) )
			$caps[] = $cap;
		else
			$caps[] = 'do_not_allow';
		break;
	case 'customize' :
		$caps[] = 'edit_theme_options';
		break;
	default:
		// Handle meta capabilities for custom post types.
		$post_type_meta_caps = _post_type_meta_capabilities();
		if ( isset( $post_type_meta_caps[ $cap ] ) ) {
			$args = array_merge( array( $post_type_meta_caps[ $cap ], $user_id ), $args );
			return call_user_func_array( 'map_meta_cap', $args );
		}

		// If no meta caps match, return the original cap.
		$caps[] = $cap;
	}

	/**
	 * Filter a user's capabilities depending on specific context and/or privilege.
	 *
	 * @since 2.8.0
	 *
	 * @param array  $caps    Returns the user's actual capabilities.
	 * @param string $cap     Capability name.
	 * @param int    $user_id The user ID.
	 * @param array  $args    Adds the context to the cap. Typically the object ID.
	 */
	return apply_filters( 'map_meta_cap', $caps, $cap, $user_id, $args );
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












































































/**
 * Retrieve role object.
 *
 * @see WP_Roles::get_role() Uses method to retrieve role object.
 * @since 2.0.0
 *
 * @param string $role Role name.
 * @return WP_Role|null WP_Role object if found, null if the role does not exist.
 */
function get_role( $role ) {
	global $wp_roles;

	if ( ! isset( $wp_roles ) )
		$wp_roles = new WP_Roles();

	return $wp_roles->get_role( $role );
}

/**
 * Add role, if it does not exist.
 *
 * @see WP_Roles::add_role() Uses method to add role.
 * @since 2.0.0
 *
 * @param string $role Role name.
 * @param string $display_name Display name for role.
 * @param array $capabilities List of capabilities, e.g. array( 'edit_posts' => true, 'delete_posts' => false );
 * @return WP_Role|null WP_Role object if role is added, null if already exists.
 */
function add_role( $role, $display_name, $capabilities = array() ) {
	global $wp_roles;

	if ( ! isset( $wp_roles ) )
		$wp_roles = new WP_Roles();

	return $wp_roles->add_role( $role, $display_name, $capabilities );
}
