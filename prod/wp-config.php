<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', '1122_transports');

/** MySQL database username */
define('DB_USER', '1122_transports');

/** MySQL database password */
define('DB_PASSWORD', 'Jz7X5KHW');

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
define('AUTH_KEY',         'BJVkrK;:?*C|K| IU1vRgdp@`q<3`t+hvOD>|);c84J5:QZ(|wYLZ?-S<I`*$uiG');
define('SECURE_AUTH_KEY',  '$WIlGmvQ*4{ypG<;|;J>@rdHO-]U]>M;Y[0II:Y:K#oN*~BY`n+78/OS$q@=|Ll:');
define('LOGGED_IN_KEY',    'd^bCJZPBJNIYL77wpbbGQD(2H6<%!rc v?^*Emj<7T|>{u=fs6CL>Lyi($BGt#6U');
define('NONCE_KEY',        'se?j:V|F#7tu5q@BC++5,ZWtnz>*mPjN>78^-4?+S@]+tY}YTp{&8Y#|!=/|T/r`');
define('AUTH_SALT',        'j5G1/I,/^!jVI#zQICFVK-d05Xl>xGZc6;$0P=Fo5iP5sd$dwWe@0ACC,o-}/H]S');
define('SECURE_AUTH_SALT', 'Ks@%</*r?(xR+*OhpA9:B2u03|#eaVF/4jA-HOJYav+ST@p2B_AHdP)?}hBs6*+d');
define('LOGGED_IN_SALT',   'e67RX#EA42FYVBX%/DA8+A-`f<nY;ObCDG wg|.HMKgWpM]Wh7_Hh(bk5.Y39?;g');
define('NONCE_SALT',       '@|!rka+X9rE$|UWLbY5,`0hr[hd|i9Ix>5?mMd$ek|Keq_`3a(nrrma:O5iXkc$~');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
