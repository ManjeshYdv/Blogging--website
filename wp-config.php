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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_1' );

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
define( 'AUTH_KEY',         'gyVr,6c41?=2zbtc.)+7E#GJ=S~A:0D+!<I]@3,@L;IW.6ql6N)l)Fec65`gPkN|' );
define( 'SECURE_AUTH_KEY',  '*+^OK4Zt}^ihOK]H{@<KEk0F@]9v_dth]u/ga;LiQOjw7yh|SNbw8@vX=-$:waww' );
define( 'LOGGED_IN_KEY',    'pZ!tyI#BI(PZJ<XJY*@kC^O;R]*sZg[jt/ %A;Q4F!_QkVS*F<l{pe/yV{4D&^Rx' );
define( 'NONCE_KEY',        '>WGJyb7.1Zt_O8EF9(G.$,V P/Bt%T@ae6|Wp(ct9Rv|zdQltZF68#iUM:1cT{sG' );
define( 'AUTH_SALT',        '*Ak>DzXUpsoh$m> ExU0j+!lfl!{jQ_uf.,HXGqm=YT4l2h!SVAW/`u_J,K%5e}-' );
define( 'SECURE_AUTH_SALT', '0Yw4[#UX?<_!dEZ^x4M1e]@nt)oqEn-g%^$ICw{+k3OuOphAOqBu1Zu&aSNI,Yj*' );
define( 'LOGGED_IN_SALT',   '5)b!U]Lu2N~^; &!@F`.![^O5mpy+H3Xe}ZPxm;y*^Cg~(oUUB5@Xv:S`4Gq1Q*p' );
define( 'NONCE_SALT',       'y:]-lCE`0lXpLsz~AaX4dQmy I]nvriX` B{J7yZF|I+2tv.5CB_kNM/lx#9c9zM' );

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
