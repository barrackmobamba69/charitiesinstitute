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
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'C:\Users\UDAYY\Local Sites\charitiesinstitute\app\public\wp-content\plugins\wp-super-cache/' );
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
define( 'AUTH_KEY',          '#N4Q=7[*(LXG7Bwvk1c$v0`T&R;yK<&?p=iPSVI&hV<zIH`c+]S}PzfK}PnHotq/' );
define( 'SECURE_AUTH_KEY',   '!9(qunw-l#)&f?DN<xo~sO6&7+I>mGM!wF98J-p:K&8yjf$l)GU8mP|/y$D~b-JA' );
define( 'LOGGED_IN_KEY',     'V(aIKzcYeSW3Xx-rN$->;_hSQ8o@0X#S1Y^}G,%b6`w5pVfRx@c*@E)@y,7X>^8_' );
define( 'NONCE_KEY',         'lm@#_Bckppo{$eII(eC>z0QPcG3e3DE26`r%A;/?6*(%Y8[_sz_]vtVe)A`;{>b:' );
define( 'AUTH_SALT',         '{=8C51$bt]x~f1T5WLq_G9;.PU&Ip<hK7B@z.,.Y^G&F>8$Z !jXfnag,-l.F<ZB' );
define( 'SECURE_AUTH_SALT',  '{X^mx1%3UN]_79Fnh)kwoT?>H=/6zZ.oo;PVwgcv_e2dhJJHxY,I;VAun0@v(B1L' );
define( 'LOGGED_IN_SALT',    'EViKI}J6:dcCfZ2%-6kE1x}JN=$LK?;H <#|aKF7tSG^X;CZ!2yv6FyUkeLJ-]2w' );
define( 'NONCE_SALT',        '6/lp8d]]9|t(i~m!^DQyl<`FdmS|4fyA,0SQ_[Z_0 v9BwE!n$Dgs?*K. cC aN?' );
define( 'WP_CACHE_KEY_SALT', 'F1Zm#DP<P0dw_z#!4,%CU8i95WHy l#),m^3Ax>9ZO_&8X34V$W&sG[nvdrB6nI1' );


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
