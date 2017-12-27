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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '.3KYy!6i@f% g9[,ZEU#;tH6Z;AGU,GjA&XBSAb-7I5d<}4?Gj6E%`*/p46HAZW4');
define('SECURE_AUTH_KEY',  'V!/}2)q/[{Gt {;r+g%CWR@6p kh.M]p:vQQ5?!i jRl/MFS#RaEY<`?TrTP?.X0');
define('LOGGED_IN_KEY',    '(n[sYO1_}y0yvCM?1P@1PqW?K#Yce.@;lp!>S5xj?<pYh.(t7*:lIabuHw|5b>Fl');
define('NONCE_KEY',        'o/m5agvpPVFV`?Yz.mTw5XT0BFZ9qWz2IL?-&lt+72.5`Yzsl$ON_y=R-.DSX7Qd');
define('AUTH_SALT',        '5FmY}__S5(&=m%_T}NmJ<_9Vu&:`rm>_m;tSVu+{._![]h~/qa/V:;|I~,o:ViLI');
define('SECURE_AUTH_SALT', 'eM22cpQW<L*4P}DEDY86*2*dN@]0-RP{vRZ=_/@1DlkPNwio^gH7CU!<R:I>)10Q');
define('LOGGED_IN_SALT',   '`d{%`;8BQ@;HQr@ynSP-Yhy:$$Xm6O&MiGG#_UMf)Ci5]k|UjFKenhL]ML ik%0>');
define('NONCE_SALT',       'f7s5-8;G;`o5k+a0QemNO?Ns^PD[vv9]V!P}5W`o+Gb9CmjS QV_8KC<OZ96y7z@');

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
