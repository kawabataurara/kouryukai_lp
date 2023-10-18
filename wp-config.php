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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'kouryukai_lp' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '{Q]X &,4TjF{f$OCbq{yhzHlfww_Znw9]&h0,Aw`9X}UJ+6mpRA-83S[>NAy5`<>' );
define( 'SECURE_AUTH_KEY',  'QikgkU:eb{)a5)^skpNq y-C-eQ(>j/ 5jfj}#<7e^/Mnw[~0(+:2qFP@/RQ50aF' );
define( 'LOGGED_IN_KEY',    'B&|9]6bG>_77HM6PTt&Xz 6.6%:EXS/!8~crpUT?_x8YK,T_uA5L5[ggAj:4G_#h' );
define( 'NONCE_KEY',        '5E/f}q%!Z/91!d^^5L;r0RO/,YUr>w)~})LIn=iw,jqXJjTEV1pTi.Jxi3il&:$c' );
define( 'AUTH_SALT',        'x_R*[uI (|ij5:`xAElpoU#&<%o;[Y1E+z%p,o>1i+d4tvP.I0}hdE2UX8=HhL|0' );
define( 'SECURE_AUTH_SALT', 'K<(Qv6v,:30;eO6>C,!##V@=6E]HEqF+< `@OPu^X}rQIzt:X`AjXWqbv-*j9MG:' );
define( 'LOGGED_IN_SALT',   ';p$VG+<kTXHze/$d[n_~_M9(SKC^&0T-WteCf_)h;l1HZ@:aHgjR4FE&Qp@GS<&G' );
define( 'NONCE_SALT',       'kxsU|S[n.==$<OrBEbx,3*<*rP /Bx%eT0~Nm9}%`4(TLUSW1Jr3#W%1}L0|c/@D' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
