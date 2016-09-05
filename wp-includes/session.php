<?php
/**
 * Abstract class for manging user session tokens.
 *
 * @since 4.0.0
 */
abstract class WP_Session_Tokens {

	/**
	 * User ID.
	 *
	 * @since 4.0.0
	 * @access protected
	 * @var int User ID.
	 */
	protected $user_id;

	/**
	 * Protected constructor.
	 *
	 * @since 4.0.0
	 *
	 * @param int $user_id User whose session to manage.
	 */
	protected function __construct( $user_id ) {
		$this->user_id = $user_id;
	}

	/**
	 * Get a session token manager instance for a user.
	 *
	 * This method contains a filter that allows a plugin to swap out
	 * the session manager for a subclass of WP_Session_Tokens.
	 *
	 * @since 4.0.0
	 * @access public
	 * @static
	 *
	 * @param int $user_id User whose session to manage.
	 */
	final public static function get_instance( $user_id ) {
		/**
		 * Filter the session token manager used.
		 *
		 * @since 4.0.0
		 *
		 * @param string $session Name of class to use as the manager.
		 *                        Default 'WP_User_Meta_Session_Tokens'.
		 */
		$manager = apply_filters( 'session_token_manager', 'WP_User_Meta_Session_Tokens' );
		return new $manager( $user_id );
	}

	/**
	 * Hashes a session token for storage.
	 *
	 * @since 4.0.0
	 * @access private
	 *
	 * @param string $token Session token to hash.
	 * @return string A hash of the session token (a verifier).
	 */
	final private function hash_token( $token ) {
		// If ext/hash is not present, use sha1() instead.
		if ( function_exists( 'hash' ) ) {
			return hash( 'sha256', $token );
		} else {
			return sha1( $token );
		}
	}

	/**
	 * Generate a session token and attach session information to it.
	 *
	 * A session token is a long, random string. It is used in a cookie
	 * link that cookie to an expiration time and to ensure the cookie
	 * becomes invalidated upon logout.
	 *
	 * This function generates a token and stores it with the associated
	 * expiration time (and potentially other session information via the
	 * `attach_session_information` filter).
	 *
	 * @since 4.0.0
	 * @access public
	 *
	 * @param int $expiration Session expiration timestamp.
	 * @return string Session token.
	 */
	final public function create( $expiration ) {
		/**
		 * Filter the information attached to the newly created session.
		 *
		 * Could be used in the future to attach information such as
		 * IP address or user agent to a session.
		 *
		 * @since 4.0.0
		 *
		 * @param array $session Array of extra data.
		 * @param int   $user_id User ID.
		 */
		$session = apply_filters( 'attach_session_information', array(), $this->user_id );
		$session['expiration'] = $expiration;

		$token = wp_generate_password( 43, false, false );

		$this->update( $token, $session );

		return $token;
	}

	/**
	 * Update a session token.
	 *
	 * @since 4.0.0
	 * @access public
	 *
	 * @param string $token Session token to update.
	 * @param array  $session Session information.
	 */
	final public function update( $token, $session ) {
		$verifier = $this->hash_token( $token );
		$this->update_session( $verifier, $session );
	}

	/**
	 * Determine whether a session token is still valid,
	 * based on expiration.
	 *
	 * @since 4.0.0
	 * @access protected
	 *
	 * @param array $session Session to check.
	 * @return bool Whether session is valid.
	 */
	final protected function is_still_valid( $session ) {
		return $session['expiration'] >= time();
	}

	/**
	 * This method should retrieve all sessions of a user, keyed by verifier.
	 *
	 * @since 4.0.0
	 * @access protected
	 *
	 * @return array Sessions of a user, keyed by verifier.
	 */
	abstract protected function get_sessions();

	/**
	 * This method should update a session by its verifier.
	 *
	 * Omitting the second argument should destroy the session.
	 *
	 * @since 4.0.0
	 * @access protected
	 *
	 * @param string $verifier Verifier of the session to update.
	 */
	abstract protected function update_session( $verifier, $session = null );
}

/**
 * Meta-based user sessions token manager.
 *
 * @since 4.0.0
 */
class WP_User_Meta_Session_Tokens extends WP_Session_Tokens {

	/**
	 * Get all sessions of a user.
	 *
	 * @since 4.0.0
	 * @access protected
	 *
	 * @return array Sessions of a user.
	 */
	protected function get_sessions() {
		$sessions = get_user_meta( $this->user_id, 'session_tokens', true );

		if ( ! is_array( $sessions ) ) {
			return array();
		}

		$sessions = array_map( array( $this, 'prepare_session' ), $sessions );
		return array_filter( $sessions, array( $this, 'is_still_valid' ) );
	}

	/**
	 * Converts an expiration to an array of session information.
	 *
	 * @param mixed $session Session or expiration.
	 * @return array Session.
	 */
	protected function prepare_session( $session ) {
		if ( is_int( $session ) ) {
			return array( 'expiration' => $session );
		}

		return $session;
	}

	/**
	 * Update a session by its verifier.
	 *
	 * @since 4.0.0
	 * @access protected
	 *
	 * @param string $verifier Verifier of the session to update.
	 * @param array  $session  Optional. Session. Omitting this argument destroys the session.
	 */
	protected function update_session( $verifier, $session = null ) {
		$sessions = $this->get_sessions();

		if ( $session ) {
			$sessions[ $verifier ] = $session;
		} else {
			unset( $sessions[ $verifier ] );
		}

		$this->update_sessions( $sessions );
	}

	/**
	 * Update a user's sessions in the usermeta table.
	 *
	 * @since 4.0.0
	 * @access protected
	 *
	 * @param array $sessions Sessions.
	 */
	protected function update_sessions( $sessions ) {
		if ( ! has_filter( 'attach_session_information' ) ) {
			$sessions = wp_list_pluck( $sessions, 'expiration' );
		}

		if ( $sessions ) {
			update_user_meta( $this->user_id, 'session_tokens', $sessions );
		} else {
			delete_user_meta( $this->user_id, 'session_tokens' );
		}
	}
}
