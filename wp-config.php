<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'youm7' );

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
define( 'AUTH_KEY',         'E9&uUJBwcF~f3j)a034p]H3^O=E@BB<%19N4+<PlGVi)42$GrN&2 RlmU>y8,]XF' );
define( 'SECURE_AUTH_KEY',  '7UM8.(q=h&:hV?%cD%P|/?(0/mHOH<-I[6fBk9B8&uPhPHBb/9UYh<JaBF<mx5JN' );
define( 'LOGGED_IN_KEY',    '@/YKL0%oF3a0;o=_W=/jh(WSyV5&-6/gzp(/iVS&}q[qv`6O65/sh.`(~JA^EX5c' );
define( 'NONCE_KEY',        ']p_7-Gm_E528[k;a!?[>uJqk@rbpb:~3Li2N1l6=$DemX^18^qNmS0)&I=k/|DSh' );
define( 'AUTH_SALT',        'x28,UejwS})&I`?LsLXwceR%*BTC4nf#fMymM#:hZ&8K%?ftsmk4;yDlg3FQE^p)' );
define( 'SECURE_AUTH_SALT', '*850q2NvuADV.BN6`QPTwXFdyI9~O({}za*OyqM}W;^,E2T{f#~=?75YV}.%j?j9' );
define( 'LOGGED_IN_SALT',   'U^wFdK/?NUD4zL4mt$~eQZo6`Kso?~*@B@3?v6]ZB,i-9oRvEL:kBV1Y^%KmrY8H' );
define( 'NONCE_SALT',       '.3||VaCQt~-&xIQ*nTa0WfZ?)p</b/>)wuB2y#R^ksQ/WdBV0~ceT^3[TP5]c uk' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
