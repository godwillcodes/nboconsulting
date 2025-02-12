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
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'h#Y8=,+Xzi`:zwt.#!GkHJWya#&?! cXyou>B2gOY{6pOog&MV7T[^yN6&,2$8Mp' );
define( 'SECURE_AUTH_KEY',   ',b5E7TLfBrxYSK}Hj%mnKwxv&IL;cTZrpT/r1vy9To,-<ep87a0H+@]H9v>`=K]^' );
define( 'LOGGED_IN_KEY',     'Sy/?;kX*|kbUdu!<X8dfU|[94wlcn0:)*ZBYA/H!tZ|3.AE-[{L}&t>V):1F94%n' );
define( 'NONCE_KEY',         '<9*H1a:P?~!VR(=DpYTT0:Pgr~0`DY2Es@*,vj:J~bSKGt~lv~+$C1l210KOg g7' );
define( 'AUTH_SALT',         'Y)!qSIyCR$UJ}+.6V5vSmwVnkd94*}Z.zY|X0BOw4(H+pHo}Y.=/z-+$!nt3{/.Z' );
define( 'SECURE_AUTH_SALT',  'wQgot!iJxMpTwD81:.:@l<zun+tKRm9QS_b>Yhy^aW&72F1.bH#0q4x-VIa-:~vD' );
define( 'LOGGED_IN_SALT',    'yx.{]B5H(BkdLwkne>ld#0GAV@p{x=G_Lp:z ,$kvAAtK%Ug$:QF/!a*;u$l}-@o' );
define( 'NONCE_SALT',        'D&)IJuOC6b]Dvx{kRg`gxL::^2Z3gM7eilb>1%fxjxa S9AalEb*OZkY^`!*^LU=' );
define( 'WP_CACHE_KEY_SALT', 'sp?!;0-&sh!!t,#*<N*&ZeB*(OR[zJr;a9+9a}:;;$b%s-7ZNaw`hgz~QZZ*E^3[' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
