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
define( 'DB_NAME', 'carolmupedb' );

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
define( 'AUTH_KEY',         ']U,ga(?Y!QJg{]2q}[g-mcP)!:jL8b[9;iB*NC5ENd[9j;w WOyN+`8w*7E#]I,J' );
define( 'SECURE_AUTH_KEY',  'pN5`<<Jdh4?R`kWr2^8m8,d&2I,W LxVJB%y ?)-m)*,L ^uM>{F9!7zF[V)Z--D' );
define( 'LOGGED_IN_KEY',    'zi.h<BX4VSTe?Zio3aTe!z:x*4&?bJp3(v,K|m&o;xWlXrJ.9p38EZ4lr }jThwx' );
define( 'NONCE_KEY',        'vuq-+Q+z-r>7*fh;[rmjhw/BR@ VDa73:KrS/inNyD3/x|F2CY~a6LZ,(ijHd%<[' );
define( 'AUTH_SALT',        'N`T@;|STRO+w1ho.ChKD@yfcvT@/?NSV K|4sh$_=V+}[lcyT@T,r!5Qwb1/l2DG' );
define( 'SECURE_AUTH_SALT', 'wpE7BTv#msk.f>LOT21R~zArwd]XtL:>6S);.InOR>?P*Aj7j?^=+hH)?Whrj2z]' );
define( 'LOGGED_IN_SALT',   'Raj4q^TTWF:fmg=HOCS{c{/=@%Fnf i!$y&zCH}h_=gCR6@%)%3>t!Zz*h`{ZD_K' );
define( 'NONCE_SALT',       'w>Nbn:s<G&;fAN}+nXUC{uo`C?lE;t$Qji^mU%Hw/[<}K5QFI<s>Jx5SOS+Klq;5' );

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
