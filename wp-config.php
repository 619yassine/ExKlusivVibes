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
define( 'DB_NAME', 'wordpress_wp' );

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
define( 'AUTH_KEY',         'cM<>]>ZS`|7Cf (RUj(?]>%m9t@):BI@!F+jH4[wY`QS 5Ml:-7dR(P@Bvz]}Ko0' );
define( 'SECURE_AUTH_KEY',  'aJ@uS_?G/2R^$|i0(6<6*7C7]~kJUlcL;^U*b%CXhHB}`_!Z|g{N+5Zzbw2(S*sa' );
define( 'LOGGED_IN_KEY',    'ZKGn5B+D>tI4L!>;bE&p{ss*6pL3i3NuB+Q/+lE7L0stRaSFS[)Ae`Ntg)&nkH_=' );
define( 'NONCE_KEY',        '0WqWgsD3]JozeE9(QcfacVW`g@@!W=Gr$.}iF0d>)_8Bo._ZTOs4tDV8K`68I7tM' );
define( 'AUTH_SALT',        '704QOVje^`!Wj]/!$TVc&lDQ,USf({jKyyvAj[sv)**K8.mO#O#5e(~n9R:N`}b_' );
define( 'SECURE_AUTH_SALT', 'M~>fP(~Skgnhq<{kI#9{cmr7 )!a/~=3IS_.{cT7lh3#P;^4F]/mD{~7D:0v<Z-m' );
define( 'LOGGED_IN_SALT',   'CU$+qa(%:R2.Y|<Z&!~s9BIqImU2;p6Ocb4->9gi^:1y`G+w(8A%ZH6WbCL^?As*' );
define( 'NONCE_SALT',       'F2W6Wn?LNvVQSlf!M3av!]gt|HuLcghl>O4Xj+- g4R4%2!Wu~7:Zb13#Nn-/.0}' );

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
