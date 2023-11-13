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
define( 'AUTH_KEY',          'j.g~GuU93M9Y;e7K]=W:5{R4.;S&x)7.hyNXjeqfZsxG >3B)rw*{UeLdh2::ETK' );
define( 'SECURE_AUTH_KEY',   '>>Ojp/}AoMm{*CU|8-kR>3^LAElqb=yQ|0kkj2<N|i(Oq5O0Kj6c<OOu_<j@zro&' );
define( 'LOGGED_IN_KEY',     '$L5#a;W#E-H,n~8|^Z}nk,*asOCh@$B&AwMRFMYQqpdc)a=zV MdDW)^b)MvT!Dd' );
define( 'NONCE_KEY',         'k::lxxVXrO_PhuF]2v`s1)@>`]iJ|y,sR(BNXhql*!;H?~T$/_Ralj#[+(7E,vd=' );
define( 'AUTH_SALT',         '%j76~|};7fcC3{&>M:nTsIXP2P^zV/*:tj`nJ#Br.{%fWT%lb/Pfy,q`LIe_g}{;' );
define( 'SECURE_AUTH_SALT',  'oF]KVlbD4[NlX6Qk2gp;`QNER2&o7#:*&*Da_0Cumr4(tu&=T^H-[4/[LX^AJ!FM' );
define( 'LOGGED_IN_SALT',    '8Rz:cTtblAL>mrDUK_AIYyOnrE=k#;>GwcajJF](FL(@-xcdSkH{AOkBL_nsvb)Z' );
define( 'NONCE_SALT',        'Cq2Nv_mKjgP5zZA>Dl?|k2|$*m6MM^OEleZZ Kj[Meofk@TwM}{4v,0aW|}>9}|3' );
define( 'WP_CACHE_KEY_SALT', '1w]15M-k})BDNbNp{0EAK_6cP5{vk)}y[Q7cq{z)5__u%kqzBGz>o<&r%:I~P|uO' );


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
