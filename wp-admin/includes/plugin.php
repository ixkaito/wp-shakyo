<?php
/**
 * Plugins administration panel.
 *
 * @package WordPress
 * @subpackage Administration
 */

/** WordPress Administration Bootstrap */
require_once( dirname( __FILE__ ) . '/admin.php' );

if ( ! current_user_can('activate_plugins') )
	wp_die( __( 'You do not have sufficient permissions to manage plugins for this site.' ) );

$wp_list_table = _get_list_table('WP_Plugins_List_Table');
$pagenum = $wp_list_table->get_pagenum();

$action = $wp_list_table->current_action();

$plugin = isset($_REQUEST['plugin']) ? $_REQUEST['plugin'] : '';
$s = isset($_REQUEST['s']) ? urlencode($_REQUEST['s']) : '';

// Clean up request URI from temporary args for screen options/paging uri's to work as expected.
$_SERVER['REQUEST_URI'] = remove_query_arg(array('error', 'deleted', 'activate', 'activate-multi', 'deactivate', 'deactivate-multi', '_error_nonce'), $_SERVER['REQUEST_URI']);

if ( $action ) {

	switch ( $action ) {
		case 'activate':
			if ( ! current_user_can('activate_plugins') )
				wp_die(__('You do not have sufficient permissions to activate plugins for this site.'));

			if ( is_multisite() && ! is_network_admin() && is_network_only_plugin( $plugin ) ) {
				wp_redirect( self_admin_url("plugins.php?plugin_status=$status&paged=$page&s=$s") );
				exit;
			}

			check_admin_referer('activate-plugin_' . $plugin);

			$result = activate_plugin($plugin, self_admin_url('plugins.php?error=true&plugin=' . $plugin), is_network_admin() );
			if ( is_wp_error( $result ) ) {
				if ( 'unexpected_output' == $result->get_error_code() ) {
					$redirect = self_admin_url('plugins.php?error=true&charsout=' . strlen($result->get_error_data()) . '&plugin=' . $plugin . "&plugin_status=$status&paged=$page&s=$s");
					wp_redirect(add_query_arg('_error_nonce', wp_create_nonce('plugin-activation-error_' . $plugin), $redirect));
					exit;
				} else {
					wp_die($result);
				}
			}

			if ( ! is_network_admin() ) {
				$recent = (array) get_option( 'recently_activated' );
				unset( $recent[ $plugin ] );
				update_option( 'recently_activated', $recent );
			}

			if ( isset($_GET['from']) && 'import' == $_GET['from'] ) {
				wp_redirect( self_admin_url("import.php?import=" . str_replace('-importer', '', dirname($plugin))) ); // overrides the ?error=true one above and redirects to the Imports page, stripping the -importer suffix
			} else {
				wp_redirect( self_admin_url("plugins.php?activate=true&plugin_status=$status&paged=$page&s=$s") ); // overrides the ?error=true one above
			}
			exit;

		case 'activate-selected':
			if ( ! current_user_can('activate_plugins') )
				wp_die(__('You do not have sufficient permissions to activate plugins for this site.'));

			check_admin_referer('bulk-plugins');

			$plugins = isset( $_POST['checked'] ) ? (array) $_POST['checked'] : array();

			if ( is_network_admin() ) {
				foreach ( $plugins as $i => $plugin ) {
					// Only activate plugins which are not already network activated.
					if ( is_plugin_active_for_network( $plugin ) ) {
						unset( $plugins[ $i ] );
					}
				}
			} else {
				foreach ( $plugins as $i => $plugin ) {
					// Only activate plugins which are not already active and are not network-only when on Multisite.
					if ( is_plugin_active( $plugin ) || ( is_multisite() && is_network_only_plugin( $plugin ) ) ) {
						unset( $plugins[ $i ] );
					}
				}
			}

			if ( empty($plugins) ) {
				wp_redirect( self_admin_url("plugins.php?plugin_status=$status&paged=$page&s=$s") );
				exit;
			}

			activate_plugins($plugins, self_admin_url('plugins.php?error=true'), is_network_admin() );

			if ( ! is_network_admin() ) {
				$recent = (array) get_option('recently_activated' );
				foreach ( $plugins as $plugin )
					unset( $recent[ $plugin ] );
				update_option( 'recently_activated', $recent );
			}

			wp_redirect( self_admin_url("plugins.php?activate-multi=true&plugin_status=$status&paged=$page&s=$s") );
			exit;

		case 'update-selected' :

			check_admin_referer( 'bulk-plugins' );

			if ( isset( $_GET['plugins'] ) )
				$plugins = explode( ',', $_GET['plugins'] );
			elseif ( isset( $_POST['checked'] ) )
				$plugins = (array) $_POST['checked'];
			else
				$plugins = array();

			$title = __( 'Update Plugins' );
			$parent_file = 'plugins.php';

			wp_enqueue_script( 'updates' );
			require_once(ABSPATH . 'wp-admin/admin-header.php');

			echo '<div class="wrap">';
			echo '<h2>' . esc_html( $title ) . '</h2>';

			$url = self_admin_url('update.php?action=update-selected&amp;plugins=' . urlencode( join(',', $plugins) ));
			$url = wp_nonce_url($url, 'bulk-update-plugins');

			echo "<iframe src='$url' style='width: 100%; height:100%; min-height:850px;'></iframe>";
			echo '</div>';
			require_once(ABSPATH . 'wp-admin/admin-footer.php');
			exit;

		case 'error_scrape':
			if ( ! current_user_can('activate_plugins') )
				wp_die(__('You do not have sufficient permissions to activate plugins for this site.'));

			check_admin_referer('plugin-activation-error_' . $plugin);

			$valid = validate_plugin($plugin);
			if ( is_wp_error($valid) )
				wp_die($valid);

			if ( ! WP_DEBUG ) {
				error_reporting( E_CORE_ERROR | E_CORE_WARNING | E_COMPILE_ERROR | E_ERROR | E_WARNING | E_PARSE | E_USER_ERROR | E_USER_WARNING | E_RECOVERABLE_ERROR );
			}

			@ini_set('display_errors', true); //Ensure that Fatal errors are displayed.
			// Go back to "sandbox" scope so we get the same errors as before
			function plugin_sandbox_scrape( $plugin ) {
				wp_register_plugin_realpath( WP_PLUGIN_DIR . '/' . $plugin );
				include( WP_PLUGIN_DIR . '/' . $plugin );
			}
			plugin_sandbox_scrape( $plugin );
			/** This action is documented in wp-admin/includes/plugins.php */
			do_action( "activate_{$plugin}" );
			exit;

		case 'deactivate':
			if ( ! current_user_can('activate_plugins') )
				wp_die(__('You do not have sufficient permissions to deactivate plugins for this site.'));

			check_admin_referer('deactivate-plugin_' . $plugin);

			if ( ! is_network_admin() && is_plugin_active_for_network( $plugin ) ) {
				wp_redirect( self_admin_url("plugins.php?plugin_status=$status&paged=$page&s=$s") );
				exit;
			}

			deactivate_plugins( $plugin, false, is_network_admin() );
			if ( ! is_network_admin() )
				update_option( 'recently_activated', array( $plugin => time() ) + (array) get_option( 'recently_activated' ) );
			if ( headers_sent() )
				echo "<meta http-equiv='refresh' content='" . esc_attr( "0;url=plugins.php?deactivate=true&plugin_status=$status&paged=$page&s=$s" ) . "' />";
			else
				wp_redirect( self_admin_url("plugins.php?deactivate=true&plugin_status=$status&paged=$page&s=$s") );
			exit;

		case 'deactivate-selected':
			if ( ! current_user_can('activate_plugins') )
				wp_die(__('You do not have sufficient permissions to deactivate plugins for this site.'));

			check_admin_referer('bulk-plugins');

			$plugins = isset( $_POST['checked'] ) ? (array) $_POST['checked'] : array();
			// Do not deactivate plugins which are already deactivated.
			if ( is_network_admin() ) {
				$plugins = array_filter( $plugins, 'is_plugin_active_for_network' );
			} else {
				$plugins = array_filter( $plugins, 'is_plugin_active' );
				$plugins = array_diff( $plugins, array_filter( $plugins, 'is_plugin_active_for_network' ) );
			}
			if ( empty($plugins) ) {
				wp_redirect( self_admin_url("plugins.php?plugin_status=$status&paged=$page&s=$s") );
				exit;
			}

			deactivate_plugins( $plugins, false, is_network_admin() );

			if ( ! is_network_admin() ) {
				$deactivated = array();
				foreach ( $plugins as $plugin )
					$deactivated[ $plugin ] = time();
				update_option( 'recently_activated', $deactivated + (array) get_option( 'recently_activated' ) );
			}

			wp_redirect( self_admin_url("plugins.php?deactivate-multi=true&plugin_status=$status&paged=$page&s=$s") );
			exit;

		case 'delete-selected':
			if ( ! current_user_can('delete_plugins') )
				wp_die(__('You do not have sufficient permissions to delete plugins for this site.'));

			check_admin_referer('bulk-plugins');

			//$_POST = from the plugin form; $_GET = from the FTP details screen.
			$plugins = isset( $_REQUEST['checked'] ) ? (array) $_REQUEST['checked'] : array();
			if ( empty( $plugins ) ) {
				wp_redirect( self_admin_url("plugins.php?plugin_status=$status&paged=$page&s=$s") );
				exit;
			}

			$plugins = array_filter($plugins, 'is_plugin_inactive'); // Do not allow to delete Activated plugins.
			if ( empty( $plugins ) ) {
				wp_redirect( self_admin_url( "plugins.php?error=true&main=true&plugin_status=$status&paged=$page&s=$s" ) );
				exit;
			}

			include(ABSPATH . 'wp-admin/update.php');

			$parent_file = 'plugins.php';

			if ( ! isset($_REQUEST['verify-delete']) ) {
				wp_enqueue_script('jquery');
				require_once(ABSPATH . 'wp-admin/admin-header.php');
				?>
			<div class="wrap">
				<?php
					$files_to_delete = $plugin_info = array();
					$have_non_network_plugins = false;
					foreach ( (array) $plugins as $plugin ) {
						if ( '.' == dirname($plugin) ) {
							$files_to_delete[] = WP_PLUGIN_DIR . '/' . $plugin;
							if( $data = get_plugin_data(WP_PLUGIN_DIR . '/' . $plugin) ) {
								$plugin_info[ $plugin ] = $data;
								$plugin_info[ $plugin ]['is_uninstallable'] = is_uninstallable_plugin( $plugin );
								if ( ! $plugin_info[ $plugin ]['Network'] )
									$have_non_network_plugins = true;
							}
						} else {
							// Locate all the files in that folder
							$files = list_files( WP_PLUGIN_DIR . '/' . dirname($plugin) );
							if ( $files ) {
								$files_to_delete = array_merge($files_to_delete, $files);
							}
							// Get plugins list from that folder
							if ( $folder_plugins = get_plugins( '/' . dirname($plugin)) ) {
								foreach( $folder_plugins as $plugin_file => $data ) {
									$plugin_info[ $plugin_file ] = _get_plugin_data_markup_translate( $plugin_file, $data );
									$plugin_info[ $plugin_file ]['is_uninstallable'] = is_uninstallable_plugin( $plugin );
									if ( ! $plugin_info[ $plugin_file ]['Network'] )
										$have_non_network_plugins = true;
								}
							}
						}
					}
					$plugins_to_delete = count( $plugin_info );
					echo '<h2>' . _n( 'Delete Plugin', 'Delete Plugins', $plugins_to_delete ) . '</h2>';
				?>
				<?php if ( $have_non_network_plugins && is_network_admin() ) : ?>
				<div class="error"><p><strong><?php _e( 'Caution:' ); ?></strong> <?php echo _n( 'This plugin may be active on other sites in the network.', 'These plugins may be active on other sites in the network.', $plugins_to_delete ); ?></p></div>
				<?php endif; ?>
				<p><?php echo _n( 'You are about to remove the following plugin:', 'You are about to remove the following plugins:', $plugins_to_delete ); ?></p>
					<ul class="ul-disc">
						<?php
						$data_to_delete = false;
						foreach ( $plugin_info as $plugin ) {
							if ( $plugin['is_uninstallable'] ) {
								/* translators: 1: plugin name, 2: plugin author */
								echo '<li>', sprintf( __( '<strong>%1$s</strong> by <em>%2$s</em> (will also <strong>delete its data</strong>)' ), esc_html($plugin['Name']), esc_html($plugin['AuthorName']) ), '</li>';
								$data_to_delete = true;
							} else {
								/* translators: 1: plugin name, 2: plugin author */
								echo '<li>', sprintf( __('<strong>%1$s</strong> by <em>%2$s</em>' ), esc_html($plugin['Name']), esc_html($plugin['AuthorName']) ), '</li>';
							}
						}
						?>
					</ul>
				<p><?php
				if ( $data_to_delete )
					_e('Are you sure you wish to delete these files and data?');
				else
					_e('Are you sure you wish to delete these files?');
				?></p>
				<form method="post" action="<?php echo esc_url($_SERVER['REQUEST_URI']); ?>" style="display:inline;">
					<input type="hidden" name="verify-delete" value="1" />
					<input type="hidden" name="action" value="delete-selected" />
					<?php
						foreach ( (array) $plugins as $plugin )
							echo '<input type="hidden" name="checked[]" value="' . esc_attr($plugin) . '" />';
					?>
					<?php wp_nonce_field('bulk-plugins') ?>
					<?php submit_button( $data_to_delete ? __( 'Yes, Delete these files and data' ) : __( 'Yes, Delete these files' ), 'button', 'submit', false ); ?>
				</form>
				<form method="post" action="<?php echo esc_url(wp_get_referer()); ?>" style="display:inline;">
					<?php submit_button( __( 'No, Return me to the plugin list' ), 'button', 'submit', false ); ?>
				</form>

				<p><a href="#" onclick="jQuery('#files-list').toggle(); return false;"><?php _e('Click to view entire list of files which will be deleted'); ?></a></p>
				<div id="files-list" style="display:none;">
					<ul class="code">
					<?php
						foreach ( (array)$files_to_delete as $file )
							echo '<li>' . esc_html(str_replace(WP_PLUGIN_DIR, '', $file)) . '</li>';
					?>
					</ul>
				</div>
			</div>
				<?php
				require_once(ABSPATH . 'wp-admin/admin-footer.php');
				exit;
			} //Endif verify-delete
			$delete_result = delete_plugins($plugins);

			set_transient('plugins_delete_result_' . $user_ID, $delete_result); //Store the result in a cache rather than a URL param due to object type & length
			wp_redirect( self_admin_url("plugins.php?deleted=true&plugin_status=$status&paged=$page&s=$s") );
			exit;

		case 'clear-recent-list':
			if ( ! is_network_admin() )
				update_option( 'recently_activated', array() );
			break;
	}
}
