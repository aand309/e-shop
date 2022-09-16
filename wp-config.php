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
define( 'DB_NAME', 'e-shop' );

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
define( 'AUTH_KEY',         ':Zdo!weKM?+LYsBnSlvy01cQxeEw>!Acr1r#}*!xvxXh&]%0hn0nUjiKqZAsN$HR' );
define( 'SECURE_AUTH_KEY',  '`iSAT8>|lSD%TgO?0Ashd@kOO=^nelxi<X5z`6Mx11RG7sD7$R@S4*lp*XFQDfL$' );
define( 'LOGGED_IN_KEY',    '9<J6d8:=_t4BI{,0yQ+,UISjl>/fVo)=pp}7.p*ks0XzZPqC?Wpgmh}[S=2n%)G ' );
define( 'NONCE_KEY',        'tU{?Ujxg7}>7Yrs*NksD:pYPg|q`{9ry<2j wV}<4/e](#r%?Ky[~[%~Ot;WrAAe' );
define( 'AUTH_SALT',        'kH_%zhiMocQyhOlmZM4g`1+NxqX)D u&8&|P5[Rh05G&W>gZ(N(;II[AL5eR[aX,' );
define( 'SECURE_AUTH_SALT', '?(U3( D0^ak wY^.D#Mp1P<|aH`)Q:e4JrvjY&?R})|iI?+Zy{;_fxWJlsERx-U=' );
define( 'LOGGED_IN_SALT',   'jnY1rW9+Y;nCI0k*ox5R-Ro[]:q9m</Z1a k=U;9:/&NCcbI=ABwgBJ}mx?~-yO:' );
define( 'NONCE_SALT',       'S?Yx>/6GkXnwJBj~i.JCMp$=46^F<8~04(6>=L|>zT+G5y2wz8BNe0vo-iTX]3p|' );

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
