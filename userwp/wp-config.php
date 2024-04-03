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
define( 'DB_NAME', 'wp_GH21A' );

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
define( 'AUTH_KEY',         'v:l >F2cu}5%-C2L60]gy6c}i7*{EY%}o/{X3pFP`0!d?KneK0!xVl=fmhnx,2&_' );
define( 'SECURE_AUTH_KEY',  'qcKXinKpxJ}m4n/de5{0A<KUF-7|GwQ~8(5Hvc(V?fZ)K)U)f%w^;Ck5|^>x`]{,' );
define( 'LOGGED_IN_KEY',    'yd@`,4(e%n#1Mb>}@OZkstX} !];|j)E<xkTob$yq7SZ2HD[BLWkSn8tu,IeGVvg' );
define( 'NONCE_KEY',        'fLHL|ZxU[BwpIf[K=,0b+isQA;YfV8LW&g2!VqT#6F&$Y[e>I+Qi=F4 I%W}%d9F' );
define( 'AUTH_SALT',        'xH$mBITWoSI*!.1v1~ks9K!hv<sEq:uEP5RW.Qk~v_8zFNCc>l:FA3FQF/4-qm[P' );
define( 'SECURE_AUTH_SALT', 'acCD9de/0oH;R /g+s&ih|B1Xp70lWG))(Lsx]z{(`=OKwa_h^ZM[gWj!2[n1Go~' );
define( 'LOGGED_IN_SALT',   '~Xau?PyU_(D^a9e>BuEs`cLz35+WBlM3TD`6(Pi]`r<-?^8&l(09DcHEvZ^%F2F%' );
define( 'NONCE_SALT',       '3$R^a=zWl_t(yH=hrb0gzrhZggAx+zLvaq%^0.m61%yFU[a.1OK65D-qx&9V;nc@' );

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
