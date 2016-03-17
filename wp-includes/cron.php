<?php
/**
 * WordPress CRON API
 *
 * @package WordPress
 */

/**
 * Schedule a periodic event.
 *
 * Schedules a hook which will be executed by the WordPress actions core on a
 * specific interval, specified by you. The action will trigger when someone
 * visits your WordPress site, if the scheduled time has passed.
 *
 * Valid values for the recurrence are hourly, daily and twicedaily. These can
 * be extended using the cron_schedules filter in wp_get_schedules().
 *
 * Use wp_next_scheduled() to prevent duplicates
 *
 * @since 2.1.0
 *
 * @param int $timestamp Timestamp for when to run the event.
 * @param string $recurrence How often the event should recur.
 * @param string $hook Action hook to execute when cron is run.
 * @param array $args Optional. Arguments to pass to the hook's callback function.
 * @return bool|null False on failure, null when complete with scheduling event.
 */
function wp_schedule_event( $timestamp, $recurrence, $hook, $args = array()) {
	$crons = _get_cron_array();
	$schedules = wp_get_schedules();

	if ( !isset( $schedules[$recurrence] ) )
		return false;

	$event = (object) array( 'hook' => $hook, 'timestamp' => $timestamp, 'schedule' => $recurrence, 'args' => $args, 'interval' => $schedules[$recurrence]['interval'] );
	/** This filter is documented in wp-includes/cron.php */
	$event = apply_filters( 'schedule_event', $event );

	// A plugin disallowed this event
	if ( ! $event )
		return false;

	$key = md5(serialize($event->args));

	$crons[$event->timestamp][$event->hook][$key] = array( 'schedule' => $event->schedule, 'args' => $event->args, 'interval' => $event->interval );
	uksort( $crons, "strnatcasecmp" );
	_set_cron_array( $crons );
}

/**
 * Retrieve the next timestamp for a cron event.
 *
 * @since 2.1.0
 *
 * @param string $hook Action hook to execute when cron is run.
 * @param array $args Optional. Arguments to pass to the hook's callback function.
 * @return bool|int The UNIX timestamp of the next time the scheduled event will occur.
 */
function wp_next_scheduled( $hook, $args = array() ) {
	$crons = _get_cron_array();
	$key = md5(serialize($args));
	if ( empty($crons) )
		return false;
	foreach ( $crons as $timestamp => $cron ) {
		if ( isset( $cron[$hook][$key] ) )
			return $timestamp;
	}
	return false;
}

/**
 * Retrieve supported and filtered Cron recurrences.
 *
 * The supported recurrences are 'hourly' and 'daily'. A plugin may add more by
 * hooking into the 'cron_schedules' filter. The filter accepts an array of
 * arrays. The outer array has a key that is the name of the schedule or for
 * example 'weekly'. The value is an array with two keys, one is 'interval' and
 * the other is 'display'.
 *
 * The 'interval' is a number in seconds of when the cron job should run. So for
 * 'hourly', the time is 3600 or 60*60. For weekly, the value would be
 * 60*60*24*7 or 604800. The value of 'interval' would then be 604800.
 *
 * The 'display' is the description. For the 'weekly' key, the 'display' would
 * be <code>__('Once Weekly')</code>.
 *
 * For your plugin, you will be passed an array. you can easily add your
 * schedule by doing the following.
 * <code>
 * // filter parameter variable name is 'array'
 *	$array['weekly'] = array(
 *		'interval' => 604800,
 *		'display' => __('Once Weekly')
 *	);
 * </code>
 *
 * @since 2.1.0
 *
 * @return array
 */
function wp_get_schedules() {
	$schedules = array(
		'hourly'     => array( 'interval' => HOUR_IN_SECONDS,      'display' => __( 'Once Hourly' ) ),
		'twicedaily' => array( 'interval' => 12 * HOUR_IN_SECONDS, 'display' => __( 'Twice Daily' ) ),
		'daily'      => array( 'interval' => DAY_IN_SECONDS,       'display' => __( 'Once Daily' ) ),
	);
	/**
	 * Filter the non-default cron schedules.
	 *
	 * @since 2.1.0
	 *
	 * @param array $new_schedules An array of non-default cron schedules. Default empty.
	 */
	return array_merge( apply_filters( 'cron_schedules', array() ), $schedules );
}

//
// Private functions
//

/**
 * Retrieve cron info array option.
 *
 * @since 2.1.0
 * @access private
 *
 * @return array CRON info array.
 */
function _get_cron_array()  {
	$cron = get_option('cron');
	if ( ! is_array($cron) )
		return false;

	if ( !isset($cron['version']) )
		$cron = _upgrade_cron_array($cron);

	unset($cron['version']);

	return $cron;
}
