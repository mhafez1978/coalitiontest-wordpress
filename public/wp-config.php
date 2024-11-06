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
define( 'AUTH_KEY',          ']2N<yUw&p.b.H 6t)T4wL!Bv#WkYkajoB2g(I,Si}L!*&d*h)){|7Dr;:(.oV%rH' );
define( 'SECURE_AUTH_KEY',   'r&a#tmXq=Fw #E5~VH?yBD|AkZ+VFhuCX$cL$=2$ZSK-G7t3^G Dow6AdAI:H?E+' );
define( 'LOGGED_IN_KEY',     '-O i9nu:v@oN+0Sij~1N? KenJR9oug8:N^3Yape(Rq[3kq4A4f866Sq%)[j$vJ8' );
define( 'NONCE_KEY',         'ZI#c`JlS(*_VgB/NSg}.jI_.LofM`k&Wpdp%iqVxetJj-v.}>xK$1o6ckv/73 cX' );
define( 'AUTH_SALT',         'LuYw]Mf,}=aG%8^b+<mSft;FXAr+Ll)|En@#6I578p6j&Bk&k![n[nPC?i{|@<fW' );
define( 'SECURE_AUTH_SALT',  'ou!?s>.}KK|pZnlA]L/y= izs|jtu&oe86P4]SdKNC_4zOg0*LA;(G|Iu{>H.Fn9' );
define( 'LOGGED_IN_SALT',    'zoKY|QPV]!A8,!2>ytQnDus=0PqKwT0nyF9^D?/V{1Sx^t?UoTxwS*,objOB{Rlo' );
define( 'NONCE_SALT',        'zRN2~@2x0R)(UMm*q0ZfR]!R#fnmQ%>/Xwq%vI<I-=Hwc:y=nUGi:=b3Np6m&xYF' );
define( 'WP_CACHE_KEY_SALT', 'y]8yIpn7SY$+MyKf[m^Z(UL)X,bWuLh$pFiK9-.r/YuOj#NV];s[V#o8]R<OtuXu' );


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
