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
define( 'DB_NAME', 'web' );

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
define( 'AUTH_KEY',         '< e=hc&t)OZfDRVt2~&`t:#ocfMiM-@X_-B sU_k:gCJ]9p1:du<I(q5*7*3%J}:' );
define( 'SECURE_AUTH_KEY',  ')oDCA@hv[cjDe|n,cBNw;a>J$%!-X~%2{7FvW/oW?+$rTI^%#K[ZHHjb!{Kg`Hd9' );
define( 'LOGGED_IN_KEY',    'K2NlWT,c<&m]GJfmi-QQG8.r7 ?;}U?l#sEu#0Wi8RT8)G%*EP+q!T4ZjYp7$fmK' );
define( 'NONCE_KEY',        'p|E:s7Rq-zX%zbP>d(lV$H8T]{alOb1!R<:YIjgbQrI4!tpv*-%>|$e(8d0,^&m~' );
define( 'AUTH_SALT',        'N>^>H!1?_A)c z!TGJUyA^^jw{f7u>Aa#SU(]upR,qpVj~FUWN^D$;x4*^az_pk|' );
define( 'SECURE_AUTH_SALT', 'eRe,KrKhU_^KOr;7%<+%ndYUQ<.jZT&76:p1Ahrn=L|nXWbhBxtrM$2VcR@J%p1%' );
define( 'LOGGED_IN_SALT',   ' SW+Iwb{ByM05_T|o.C@QJfv&I(jAagxSb8sR ?1`)!m1jyJF&}}1)3XFa35zp,4' );
define( 'NONCE_SALT',       '.3r%R7N$C#5DDu>?bB0lHY{R_x,Dw5S$~O)&6ut}U$,H*{U/cK&k,7xQ{-A4:/@j' );

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
