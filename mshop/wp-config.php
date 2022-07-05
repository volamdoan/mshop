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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mshop' );

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
define( 'AUTH_KEY',         '1qgy:{qE[J;}&l[3HYtnmv! fwlzMURv +c`ZN@3q<XC6;`]JvjX[Juo!}2qeaC)' );
define( 'SECURE_AUTH_KEY',  'n1u/Xf9#F!MC*Qu0r0E3@8@-NIa~~t&M9:+b4_]B;?lrS_KZS)CJ0yWl{AO.- $T' );
define( 'LOGGED_IN_KEY',    'N3Hjm4noz$bLs1#b34j7MMjGb>bl+fmU.$9,>q@&zY)WXldbV{ 0`1TJ#x8 4`wg' );
define( 'NONCE_KEY',        '>jQ45Dem9qlp3g!d& RLF&]6KuV`c35LE8A]4Gc$zY+1V>$A:df@m3e~p<, gwOg' );
define( 'AUTH_SALT',        '>9FkP=zQ}mgP|mE1`dd9f/C%)Zy#-=C]l-74p^DfO6E;Y-#Sl7/2Rk]4J$&?=j;e' );
define( 'SECURE_AUTH_SALT', 'vG^TZ#+U44DdvCPy6lDFV @vbP]?@{aWTC@r4*F63{5X.g*gIP.}k5Z)hPRN1=d$' );
define( 'LOGGED_IN_SALT',   '?7o]V1_##Ha262FGRAazIGy-}r6)TNv]sh0-=#T*E,SQUvuoA`=,ix!.qHM.By~x' );
define( 'NONCE_SALT',       'xKo+{9b!7-t^Zw$poz{K@GV7s:LCbBXTQC0gRD_IYJ{EX4.sH,;X?UwHdM!^ 2#X' );

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
