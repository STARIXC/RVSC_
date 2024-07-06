<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'rvsccoke_wp_4umjt' );

/** Database username */
define( 'DB_USER', 'rvsccoke_wp_3bhzu' );

/** Database password */
define( 'DB_PASSWORD', '&9BW4ngQO6Xi~E^o' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3306' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '[rzNAe5Vw+O7h2G+Ut@56t+T7f7j*aemIMRkri5Z6qovZwE]E1g6ni:v0dCT4;RG');
define('SECURE_AUTH_KEY', 'W@be@wmXw]7+(GV!wIFX+m60ug/V~:up4a514O3ljkRy3/+vO6_agU79yP4*:(s2');
define('LOGGED_IN_KEY', '#S4x2z3/-4CxmNs~aDG)1tWl|j6WWh4qU9#dq2qMA+-B~#pf!L0)OB!-ztZ1(Qcc');
define('NONCE_KEY', 'Q3q6W6i~!87[Y:pIL927_sz-h018hDX)LT62J14osM-J3@F)O;a]jo7-:7nn9P_X');
define('AUTH_SALT', '2&n&V5w|;P)Qtp(f4!ly1G1ZIU63S@88VSv(Os6n2frOs%/:_!6g8ZOCs!9p8e8W');
define('SECURE_AUTH_SALT', 'e9T5y1(7%-PvMHpT|rXM12#0G!@N~3u4M0YE1lpE/Mk45:B258n@00zpSaD)[o(1');
define('LOGGED_IN_SALT', '2276;X0c!(0LT|b46B25BM72:xlZHO(A+nh3MY/Z##rVuM1P|ZG*1f8cK_8h%;Z3');
define('NONCE_SALT', ';8Cbx:kL/+B7M1/IPJhd7&Oh0me2_%~0n0o*Z5-g:lpM9(03Y|L]@I1EdC5z/3a6');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'UPKQkSpI_';


/* Add any custom values between this line and the "stop editing" line. */

define('WP_ALLOW_MULTISITE', true);
/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
