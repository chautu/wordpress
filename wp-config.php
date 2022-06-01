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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         ':CCp/z$|n4gZ1(0HyUIcl-|+Q CnkK^NW)>1bsGi4ru~|MIeKk650ERa..]#JKPe' );
define( 'SECURE_AUTH_KEY',  '-Uz6CN0H}56H!T,<r1gsyM6|TcnsneIfFbfH?mcPzZfSd}eG6q[43Y:!CVM(KbNj' );
define( 'LOGGED_IN_KEY',    'G3=(?A4&q/u5#_*SH/eB9m/=1hc5xAJDCpUiu9dk#RD918_ndGiyzf/iNH{BTTl)' );
define( 'NONCE_KEY',        'akYgV42(jQ=K6/z8B?cw{RWkW,9D<hFSPd(sO Urm8]~T[]0il6CI3NryG:Xtn!g' );
define( 'AUTH_SALT',        '+%#CCz,1UN +<(=BOyAw6pt,`g8bSt4_mzA}$o[6:7|dJ}fTbudgc o%(<L}+N,h' );
define( 'SECURE_AUTH_SALT', '|.Cs^I;xTE~-75MQdyT&CkBu?f{Z^|3g`3qd[`>H KB~6nzxqUhGNAT|,JkYtII3' );
define( 'LOGGED_IN_SALT',   '$1+|#$bWjj&}nBzyRyG&>2*l@Mfm[DV/2-J&g/;>`LiO%FS()Fvp~i*igb<rlQD&' );
define( 'NONCE_SALT',       'gmaa`BN(%e]G<THH]`]:*@q 3Tf5a&uz,k`0X0/BZ/Ffu.zlY9y5jtP oeV6V;Y,' );

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
