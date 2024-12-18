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
define( 'DB_NAME', 'woocommerce' );

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
define( 'AUTH_KEY',         'V8GO0cIm#KHHgi,}MT0ad()qZK%uz- {kxKT7Yi|6SMJD >Zymk>#/m RozDct%r' );
define( 'SECURE_AUTH_KEY',  'jz+nCl3~?.BBkPZq$-%LFyV-w#/K[|tl%x:[_]r-(#U %@g!U7,Y+r<YC<,L}S_5' );
define( 'LOGGED_IN_KEY',    '/Vs}Kp(]#B2nR3vN%?{8w8.}!?0*`&$F5DLA0>z8FzF;gz]HJ|/{48C[a^7wOrRS' );
define( 'NONCE_KEY',        'eeH?i8lHrM>Pv]EP%Uw*CXuGT>DBl%kr5xyNWj ba:r{}I69ZKz+<]]jVth_~Pam' );
define( 'AUTH_SALT',        '^_jR7Eq(HjVQWBByBk9D:ZmXxaj,P+)3}XPyt&;Fc[z^HnUp9B+[zt!t2@:[nVc&' );
define( 'SECURE_AUTH_SALT', 'dgf1nQfU9MR9nkPEluG/,*20xh$G;MVN2J~4y!nEE<<cwRQniWZk-bph{?0|RsJ/' );
define( 'LOGGED_IN_SALT',   '`D#H;CivT;c&E$W8Q7|(~sS>VEED[%@|#pm#LT07sw)XF} 6W{$PLM$v-Y(Uml^9' );
define( 'NONCE_SALT',       'I$MDcf]<qMswvi~8?Q??&q7_$(tn81W[&P[q&S8bw_12^k^+G&@l,jWMjo<:;^4C' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'woo_';

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
