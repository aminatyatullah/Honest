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
define( 'DB_NAME', 'wpdb' );

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
define( 'AUTH_KEY',         '4i<q9G[ X-b]3[Jl&-W14Nh>R(ecJ`+1/!ciG(N+37ZMbj?~lo%f(U]_RTpUa=i+' );
define( 'SECURE_AUTH_KEY',  'G_6&W0zM-yMF.E0X`sf6)s?Q=,RJJsR_)zvcjrwNkUT79<kgx<{<H}#S2yK-@SUF' );
define( 'LOGGED_IN_KEY',    ',6qLhjgQFrMJWF:_/jhe_!VDbr$lKE^HN.Bj74M#er0Ds1ECRCHdef}G?RS2nLgw' );
define( 'NONCE_KEY',        '6%$]Pz.%f!<!,.,B ld9|@y,(ty5[6&Jof&{QCips7Fi_c{Akio^hI6u&W_h>!Bs' );
define( 'AUTH_SALT',        'p3sCm=&_CyoC&yM1^~c@$8/ if1W6MEm2nIg1s>;pN:s}jC(Z2N.whHau(aFJ*b(' );
define( 'SECURE_AUTH_SALT', '^jPh3ph8_{7g(.h<P*W*JW@h>zu*x6XngiC.,O@[-Tx>2|Xd5HR2y$ikB2I[jJ|G' );
define( 'LOGGED_IN_SALT',   'OSt*i[A~Ih;Us/4]<AeQ@T_8%f8|Uyo]F9Z7=AzR*o:5OK_SO}1s#A.YUovu^zO3' );
define( 'NONCE_SALT',       '|0V3{e a&3!NM$DvLqE6tcsyItmXmjY -o|lH(oRVNt5~ISo{0@o*e0N;Vv~m}y/' );

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
