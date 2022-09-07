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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ecommerce' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'Ct^R1<:LX:/amY*gGi%;r[QNfChq#J)8]JJ(Cb`h(4p#cIOcP8|kBsuQWpC&bX,Q' );
define( 'SECURE_AUTH_KEY',  'I(U,Uy:zYD@(g`z{K~J:-X1u^Bo3qMmM uCa9V[Ky[^G*WPtwLU_!TmJ!-vg9L% ' );
define( 'LOGGED_IN_KEY',    'w]OR]JtBp`_z<@zH]oBZZnW^5c!.%qZ/F|>i[9QkHm/!pFQ+F-e[y(R(shQ6vpea' );
define( 'NONCE_KEY',        'lUMEjFWFV@QMuwyE?4,57![@4rP||nm%BJ^u3`<V*x*WFA.Te18&x+;~?dXbg^pB' );
define( 'AUTH_SALT',        '0{n2eQ:4]^Hb^l=kqr+Yj;?quJ)5UE7x@8my-_gTgH$v^3T&OG6pJGN62r9UKk7~' );
define( 'SECURE_AUTH_SALT', '%U/4RaH+qf~P8L:/|E<J2f+`!/fo3:/)n#-[CZXs?5w/+gK|Gx&*^:E.LfpsRsT!' );
define( 'LOGGED_IN_SALT',   ':Cl3fGR+0N*]JMf2Fa$^Znj5J[qd-y7B]wAL:-/,/mJh!lI~I}PTI<;R-ANEFQ=K' );
define( 'NONCE_SALT',       'dnOA@04tFE7bMWhsJw{v^`UhG]vg+$:;D$C!*~|ZXzwg?K!SYtb|Y#1}O @P,gW#' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
