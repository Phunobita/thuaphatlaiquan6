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
define('DB_NAME', 'thuaphatlaiquan6');

/** Database username */
define('DB_USER', 'root');

/** Database password */
define('DB_PASSWORD', '');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         'p#sQDNr+@|BZNk?Qn5}!K5p.n%a;T,![uM>?x8~]kp/6u6<~3V(!@v|Jf$vUaC9e');
define('SECURE_AUTH_KEY',  'R^>a3hfW8B!a=4)8+6L.h.#~B3W;=CvdwPh|ox@#kS72CUF{a(TP{{,crt(S+35g');
define('LOGGED_IN_KEY',    ')&GAk?oAvym+|: j/v~/be  =rw-jQjla+MXUJI?a.mX$ zjUe~XMB?{b!-EcdmC');
define('NONCE_KEY',        'oHE^4+QngwaU8UH,nhx!*3OL(a}aDUS/~na<yLhZD7GZ!W.~Z@|VklybG,X1IY@q');
define('AUTH_SALT',        'fiNV@c[#HSt|71KE4B>cB][|/U8]1a(<2JEKHuTxqEp%%Cixu/}yPIjTZ7VP! T[');
define('SECURE_AUTH_SALT', '|if15Z!WZ|]w1JH:UzTAX_pET^3sfIT^gX1<U8?cTr$|8-tP&H)vhcw;]dauB(ri');
define('LOGGED_IN_SALT',   '0$Dy4^]{@cq0UiA8ff4@{#<=[MUXtuVan3F{^F;HxN4>Em&G,bT+*Mh#j!_8B4ma');
define('NONCE_SALT',       'r B+<E_!BpM;XAc%$p?/Df(-HpE%+NQ}iHPbdQAcPQ8lW]D31]u%7f#}ZsA:Mran');

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
define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
