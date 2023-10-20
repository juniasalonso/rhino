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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'rhino' );

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
define( 'AUTH_KEY',         'ycP)W~eDp%&N8tXhMgy_F $D]xQxZ0XIZ#}jNK@5Zb.v7s@|L}#k_u{Ub#lt9az3' );
define( 'SECURE_AUTH_KEY',  'UH^SgNTT^&5lxn&|yZNglX/o5PQ)<$~+Pd9d)YQfT-tKugWKR+t5f]=FF9F6~_<>' );
define( 'LOGGED_IN_KEY',    'k.`Jjfe wz;<~1zVO$eM:g.]mTp18-KN[F wk`dvQr)RI|QfS1(Yqqk@>0Lf%dQn' );
define( 'NONCE_KEY',        '.wh1a!n)2@`2{idjY.@Vwj$ILO2dj%gM!Pt,v|iT72a9J{k^F!AYR8)v!oKx&cj8' );
define( 'AUTH_SALT',        '(dbA]_4Aa5*]p,aXWcKuJY*`u6@?#tTh:6(PU60>}7LlP54g%,X[ZP?5#2-n2LU=' );
define( 'SECURE_AUTH_SALT', '.a%FwSjt4N]UXNGLYXxNs;FCXQF$beVSvoU{;?~{39=2G!%1a_^g]^J6)#%XZSt`' );
define( 'LOGGED_IN_SALT',   'PH-q(Al5GQGen!&U/kaomp:2@^1Bn6Y^/w `~-yBFWl1=D:-C?1vLJ=U`6ggk_ *' );
define( 'NONCE_SALT',       'mBSU{jHZ>kL2 m&z`lnH>bv(gSRHoa&k=PoPj.:2hNO[k?^g8s$9gOGKzW9l`.cP' );

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
