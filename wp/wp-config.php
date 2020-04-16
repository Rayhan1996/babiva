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
define( 'DB_NAME', 'wp' );

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
define( 'AUTH_KEY',         'u8{DLr7i+>wtp$K8:AzA>l=G6<`Jc K1BHiQgnpF{d?cpP*=8W}QWira3Fqil^0_' );
define( 'SECURE_AUTH_KEY',  'z)nwSQ((={v+tBY=izGZ]( [`@+A={& oSI#u;#=m85Y&~59+i4/p_<1a5:2keMT' );
define( 'LOGGED_IN_KEY',    'Hf 6;pQ72[MNm&^AQ6iyYYvOe-Vz6;J:oBxj:~aKl;PC{`rs5/D~W*s)6sDNVm`6' );
define( 'NONCE_KEY',        '?6L6*_!_U!_T>og.l2-|*0KKx*;`?H(M?S/;Pq`WeURu{m$F];-;h5j<!5-[_C-j' );
define( 'AUTH_SALT',        'lg:=p5@Od(>E5(3ka=@}^Cf2e;X5qzNxkyJLMX}ySw&k~m:nKf,jK@~j97iXQPdS' );
define( 'SECURE_AUTH_SALT', '6]|qmi3}%6B|hpS[@1]$4WC/Y`Z7WsnHiwd+*R@/g1AVKZA<fUT8UMD#1fghD:(9' );
define( 'LOGGED_IN_SALT',   '1RFD[&0oImDLPlt7&OHyzxTsTyPB6m*v`@#IP%xkS1i)~wlQ] [0:y DTa^mB. q' );
define( 'NONCE_SALT',       'N8A694A3v}zHsoD% d! Z[fPxb{AY-k_MjbL< aC}*+4oPT6;ntTR+PX3xbJ=bts' );

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
