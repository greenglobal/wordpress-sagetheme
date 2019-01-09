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
define('DB_NAME', 'ggwp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'mysql');

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
define('AUTH_KEY',         'M7tXiV4bf+&2m~WkA#$dP~glTg v]?9$PyHFDEBz!i;4T`E:m63P4wdlf<FDKO^)');
define('SECURE_AUTH_KEY',  'J,PC}%%(<*2r<~=!dRvfborR80fAdK@0=#u<Epu6{>uYHmtj545s0:/[IJTB*e>.');
define('LOGGED_IN_KEY',    '$K;$b#d$eJzR7^?Qs7)nHMA6`,<[L~f1UkmLb/6)Nw<u8he%oj5HvrY)Z0A8d:Ds');
define('NONCE_KEY',        'la,5r)Con15YQEb),Y$Vbp15)v:JYaK+4kt_pMUX0mK_ MHZR<g;/$2w-?8wKccV');
define('AUTH_SALT',        '?NlgAq9<h4 vCa=^.*ns=O}1*p$$l_CG#8gh)&R;3,vhP]rNKztjG=>[|P-IACQ*');
define('SECURE_AUTH_SALT', 'MXv`DT+t3VWkY#yQKfF_?zc.fK2tsf{%$2q1}zv+yg9^VW:t1p..);.$sjJ>bx/D');
define('LOGGED_IN_SALT',   '_<Y$Ha&6<U&mC.LSKZ?RcO7]GW:&RYnI]Rqg95P$;`1Pv1k_H(>Ak3(e]LOE ]]r');
define('NONCE_SALT',       'R {A yCS$}uJt8E+9q%C#RhfkLb >.$:N([?^<erCw:oXe_Ba>%/$YGTw}7~l T]');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ggwp_';

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
