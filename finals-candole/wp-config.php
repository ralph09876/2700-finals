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
define( 'DB_NAME', 'finals-candole' );

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
define( 'AUTH_KEY',         ';_5K(Ll2OeVR8oKWN[LYwxYz$v0[.Lj!}zQjE A6*&bIp<6Cpk]Hp&&qs`UEAnYR' );
define( 'SECURE_AUTH_KEY',  '5*|}y[1oBj_6x( Gn3IB;*>]]y(}w/r,:m!GM5SIRRgk W(~LS><H>qAvo%)cA-9' );
define( 'LOGGED_IN_KEY',    '0<52!;X[vW,([uQ=5an]aO9wIK={wi nka-Bp{8-MAk:W ~A{Vg~Y[!<c127EUwQ' );
define( 'NONCE_KEY',        '69Dg-w;Dz8E>7SX.E<Cp|I.aWFsCPg~-><OmuE&%0AS,Wc^fcSs2HzoV4R(.Hu4r' );
define( 'AUTH_SALT',        'wQw4m1$[YL$`d=5/ij>d^ :[~}EL;q1.D-=3o9A9e@0de7.o<<h8]k019NP7?LnQ' );
define( 'SECURE_AUTH_SALT', 'xS$|}e`hSI_muX2qvYW]J)l4VW&6^zf=A>#{Y)qW-!`By *t#G7ZqXt36NL9e6x ' );
define( 'LOGGED_IN_SALT',   'lq0=@/~}hOS76OMrknr06JOa&:[Z#JTY(]VYobVri<}9{c2J]9dj!wV~!*/_}Brb' );
define( 'NONCE_SALT',       'Jyu8{aC6=}ZO[R[go3<kKt;_A#[(z+bDs%~:8NiT&D*[PPEJ3W3p2i;UYxH5]`w?' );

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
