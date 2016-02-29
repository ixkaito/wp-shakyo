<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'wordpress');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ')c+1s@y$hr;sHnm; ]oxwq;k5G/s$Thdc<a(kSapvOhtL/Vv;2.N7N_o+7?0%?5 ');
define('SECURE_AUTH_KEY',  'i-+C/fEU&UT>:>%Bxo8~euD{9!7L}n;9R4HZRL~hl|101)w7iZl!?ZH6U?P1d&:5');
define('LOGGED_IN_KEY',    'P$1&L!|-jDR1!lqQja{J-7C]UZQ*&jpIT,RY;5gs&(uRcm/7wpBF7gf]tu/L|!5U');
define('NONCE_KEY',        '&c,mPMep%s^fU9%iiUQMf+ +cFs<~5JFZCxb+S5C6#9WN1*z5>MUHZ82JF@&B2><');
define('AUTH_SALT',        '@2BEF!n7V]!$`B`*B._:Hr5>8},U*<Y-e>`FK&DaynX|<v5itHCQ$o;wyJ(<y%By');
define('SECURE_AUTH_SALT', 'a#U]k a`@83QRJ*=DsFKFBzCb@E3Y|cLUXEB0xHD:vJUHB$M*99$Y/EnZ9s b!<A');
define('LOGGED_IN_SALT',   'o2cMq1*~ I*t71^*>NvR4B|N:a&yMEH`QSMa<k{TW;8$&.0Xi9ky(ncVL WHDwv*');
define('NONCE_SALT',       'e$0C!Swx`e~|o[M{#49]zzsJwDD|a[/BZ0M7@W `e52/u6S{X&l}$~63BMKkDVC@');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
