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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'portal' );

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
define( 'AUTH_KEY',         '*9!q47VxH;{xR3$A[Er<K_z!tz+ki#|[$7z*}8S,a)$P6nSTA$(npPNu*{0 4SI)' );
define( 'SECURE_AUTH_KEY',  'W!=s!jPNm+>dQ8q3H{.fJOd$x+ceLtW%6mUS(y*Bd+r?Dp$/XKAdF7JU;[/P;&*0' );
define( 'LOGGED_IN_KEY',    'R6S2.*6ML:XGL60D?U:lm_gA~~fpb,i~wkGjDZl:]37Tk;~WW~:Or(cN[i4)+Swb' );
define( 'NONCE_KEY',        '@A!Ta55+exkD(]E3]6lZ4|A6C(fO%aTwEr+g}zU;<(Qk&bNGaSB5:]9l@uviu9YY' );
define( 'AUTH_SALT',        '^d(hJ3D^-C{b9, r~8glH)FSx8Ika@Da<9+-A9,[gRO!cpy!wC!)NIVLf}WUn2Yk' );
define( 'SECURE_AUTH_SALT', 'KyT4@&/{j^[}%6d53L(aR![OPt2+.5+SDp986laP3Zk#~7N,0O]CRFe[rA+M2H;X' );
define( 'LOGGED_IN_SALT',   '&h!#1Es/@0#<OMO{1=A;<x+4_GC<{0INk:.JOp|U_K0kOqxYj=KsBX=bF,>}E3dz' );
define( 'NONCE_SALT',       '+O%u55R2?b4Xg+Pl*T,g:uSk[C.:Vqxo5%#B6(uXQUg+{|Hvqm`[jU_9wRfPW^oh' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
