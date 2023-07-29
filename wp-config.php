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
define( 'DB_NAME', 'ecommercedb' );

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
define( 'AUTH_KEY',         ' :95%T?fm|.@}4CZ;uSHHH16o|#![v6w51&*R%kDhgXoa:bQ(KLg-1E`nN]OgkY=' );
define( 'SECURE_AUTH_KEY',  'S}A0g4^jHhtV5i$[bl-uk*/8-^J>KXeXL*Gm%[buaj<8B.f5sip2g.}K,qUAf}hZ' );
define( 'LOGGED_IN_KEY',    '~Aw5I;b})_EhTw.L`tp;=C0BEfZ;RAI>o4,r(z!K+8-yf,) VI7>fsovW]f<`BvN' );
define( 'NONCE_KEY',        'fV4#fqc#+^TJ#45O]:/&=|cJ1:$[.&p5639dbo>(M%qBL<k9mw<qBaDYB3L}QZ](' );
define( 'AUTH_SALT',        'l3d1;Xiv#*qSRMe/Ofd!#!1b|j|g?7z?2vj^gX:4H_~ 7)<{1zDRrJ1hP_5[P_$+' );
define( 'SECURE_AUTH_SALT', ',uw4aQseXv%Xxcr5,a_f*.m/)Ud=/5.)PUi*O7+W`eRDe5Dy8-3?<^xnhU5 <Y[~' );
define( 'LOGGED_IN_SALT',   '/JI*oj5wZ09e)?Rsp8R|85=YoFUxX!?}lICP@6Vm_G2a@Sc|?9=Drcc#w#2OR%yD' );
define( 'NONCE_SALT',       '6[zU1P*|?{4Qj:5+62@h2hrm5l0V2:_jX^`~jlw.i2!|8;h43)F^p4ZlhXMV@fQx' );

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
