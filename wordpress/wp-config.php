<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db_05' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'wHZ{@;v b[xh1%%&. b7z}Uh:_pJE7oY;ZR9:A{=&R_=}.QP.|TjgxWGZzTt60ne' );
define( 'SECURE_AUTH_KEY',  '-@<}PoxY?6Aaq./+*;{nb|u|d5vAneL3 >jAwQgw-IF?CYET?Z* f3E7YDY`0&vF' );
define( 'LOGGED_IN_KEY',    '`rpi7fb:!W7M:r3{vVE_zT6>YXh[M7~cE`XsF;H%R [No|I_x5NWgOL,-r<H9l%?' );
define( 'NONCE_KEY',        '|8>tVt$5]!CrNaD1#kTnFE;VVwxp:QJYgXDnll_Shm%~Fikq3-WKyG;vu_8K8,NH' );
define( 'AUTH_SALT',        '$;y[<zwWKlh7x_h@Dm!|${%K8}D[JTb|F$|,Zk.~{U`9&jnl ^||eA/Nv:mUu@.Q' );
define( 'SECURE_AUTH_SALT', 'TX [=^/[~O.<b[5/JYuLPBn7>-!yw<LQ%>w|&Uxh5hc*L1yzhlfVxN=Uorbl%Jwe' );
define( 'LOGGED_IN_SALT',   'G/sE`+#eSvHaFj/JD PE?cNq~PfasA+9O*Uqe0h;ekSUn5ToTd6?4rA:ejVurC?u' );
define( 'NONCE_SALT',       'U;5jf2SZav%2EERnI$S60dAy?(4D):NH-JeU /9$gyI(bgM9WK*-La[6x?`It3iB' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
