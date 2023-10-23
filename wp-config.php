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
define( 'DB_NAME', 'wordskills' );

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
define( 'AUTH_KEY',         '2>:Ao=jA;cz3a,f44;`%&]wTAB-$Y)%rb%u.94wSrtP/g)Ztklfrvb=6C9d(Ftp[' );
define( 'SECURE_AUTH_KEY',  'vJmqTh=H8TG&4vh)ByGnLSQt():8}*aN)+iyF!1zK4Mwwo%G>BD<+v06<Tv%~pI)' );
define( 'LOGGED_IN_KEY',    '5Nw/5yKX()V1U*KbKs)-Obo~ls:uri_51h@pdkv|0@72,-=5q0m^D]5AJhc6N/)X' );
define( 'NONCE_KEY',        '3 2H$%3H(!qda0@M70! 0g I3be~FBwYc1L:%[>Gyu?(u8 A%8}=0Ag<Jb8#LWfb' );
define( 'AUTH_SALT',        'f]Dw!Q2GY!X4_7aHx}l`&VT:wh`6Qg|&+}b+Ox#TYy2UMvp/W=5T<.rilVFjKOO6' );
define( 'SECURE_AUTH_SALT', '`:~xs)>vP`<1/-JV-jH:Y,gJ=vVI!F!JCQzSZym=A`e[nn#tv_ji:IAtcwwz8JUw' );
define( 'LOGGED_IN_SALT',   '_7*6/9F[IV-$ENSLn7.~<b$[kENa;&31vT|f;COU99nc!cKp01fHJTo#Ch{Lkip{' );
define( 'NONCE_SALT',       'j}}Z~Z[Ws;WnqNS> S+xC7YbZE-Ao~iFdb!mvVk}WcdI78^|}<mSu3N!%LKZszQE' );

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
