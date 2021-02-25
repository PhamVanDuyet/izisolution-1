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
define( 'DB_NAME', 'db_06' );

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
define( 'AUTH_KEY',         '83m]K%j*n] x$h,Ik=T*E`Sx3Fl(D3i+m?u@LZ`RmqCkj(OWa@eWKC@H|>~=61>`' );
define( 'SECURE_AUTH_KEY',  'h4G_31(d l1S= iAt+/m(e]LxHVZo<9u7~;K$CyZ8qY@bTx9Q?r]OGQeeYYoG<fb' );
define( 'LOGGED_IN_KEY',    'VfgNu5Z~b<ffvT8[)PP9z=a_t^^FZL==Y-//BM`>{iI`T/hfUWa<=&!):.Hrp-lP' );
define( 'NONCE_KEY',        '}bQ.gzAn h):WY&^@79df@[60i*Y4q$y-9R))b/aBtG5)0;@^Y2GU7MdP8a9oLJl' );
define( 'AUTH_SALT',        '|jBa`DVV;}:lJ/N4I7&7o{D$K NW0CMsMrpy(^@^8#t9<|dp]IEKFJBr%8LlMP`-' );
define( 'SECURE_AUTH_SALT', 'j9]OdM{xLekErN/%^5R{myk#F%?_{b/Y[o^x0(CvlFh@ldNUCub6oV>mO^|Y/L!$' );
define( 'LOGGED_IN_SALT',   'LL6$nyqKWHTa1b7pd@EY/5qui~n<r%@&w6|  g`b/c23WrI*>Hyxa{uczR~/YCjD' );
define( 'NONCE_SALT',       'jvXt@aKCK@{rp-J&S82@2U:{8mWzw2n~fA14 iY3endZuIl->s2_)#R<2f2+hWcO' );

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
