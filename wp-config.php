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
define( 'DB_NAME', 'childhood' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         ' H6GWO2=B. %jF<s.JiCruMu>@AhQCT%i:quY!wkTSP4|[$# p&;obu]=i~dxZe8' );
define( 'SECURE_AUTH_KEY',  'W_AM;Dqx1<W!N.}3ZveuB_ G][.gZ*CBl<9t7_2R_3h^:h_+p=2em/_byj7N5H{E' );
define( 'LOGGED_IN_KEY',    '6rNx75whr1brTe<_kT5j8~~4,J[}UoT:S5;~L W%B%%U]a}&]5/lV[n2*rc%BP6V' );
define( 'NONCE_KEY',        '=N+r<J,z&E}>]l8_}xefejS+kGtW/_a/$-S}B6#3l/]EYmmZ59Hxs@$,g0dFJCS|' );
define( 'AUTH_SALT',        ';TRfLl$W63G8OY^E*&yqO-}Xt9N0W0Lc>]>:xb)6&8cP>. c~3lL2 dUY$Y=V{ 0' );
define( 'SECURE_AUTH_SALT', '~wzD#l|FS!FUY>8SRwei7&9P6ftW>y($rEh3FfI&6CreUe$Q R~tx5s!e>fU!9xF' );
define( 'LOGGED_IN_SALT',   'iW)V[Z6)A.{`HnSYf|$EVlsZ_AhiEY]N}d~;tgG0e9*M-i51P5d^zQ?!&[,LCE~~' );
define( 'NONCE_SALT',       't}YRosPl,s65ED-(_YWyQ.J7A|q3m~5JNFqF/,Bvzf9sFyoK?Q1x6me1b6`36+5Y' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
