<?php

$url =  $_SERVER['SERVER_NAME'];
$pagename =  basename($_SERVER['PHP_SELF']);

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

if($url == "localhost.zawafi"){
// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'zawafi_website' );

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
}

else {

	/** The name of the database for WordPress */
	define('DB_NAME', 'zawafico_live_databasev1'); 
	
	/** MySQL database username */
	define('DB_USER', 'zawafico_admin');
	
	/** MySQL database password */
	define('DB_PASSWORD', 'ZwFi-DB+wU*fif1FxKLO@sWE*');
	
	/** MySQL hostname */
	define('DB_HOST', 'localhost');
	
	/** Database Charset to use in creating database tables. */
	define('DB_CHARSET', 'utf8mb4');
	
	/** The Database Collate type. Don't change this if in doubt. */
	define('DB_COLLATE', '');
	
	}

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
define( 'AUTH_KEY',         '<R$Ju 8qDg3kd9OP%|o=dtMD#3vMvkSQR*|u37zqkX>Atg?77i)U! ?mr9R0EYUp' );
define( 'SECURE_AUTH_KEY',  '24*BG1Rzx%fgxK#^q_S!Y*Sf*}$bcGmQgXs/Kt[?M4p3*/fM~~hC,/.jdT8c~p}z' );
define( 'LOGGED_IN_KEY',    '=xaZbqn]tFv>UjNf=_#VWlhT%{ce[mC9<L/q K)yXyqFqWUURn#B$bpQ3,hG-,hR' );
define( 'NONCE_KEY',        'w,eS[6jI`sq)2~MBEwrgg]w<W%IJ!ikn%]Pzi-]HN@D <>*2xFqNi$J_oaB}kB*y' );
define( 'AUTH_SALT',        '0=KY6,9k|zKjt)os%z3fL>yQ6}EZ+V$~C^Bg<FL-#]zcaroM*)p4fKH[F&,Ig::a' );
define( 'SECURE_AUTH_SALT', 'LWqYiM?.1Tu6BEg{7OtEpA4_n0eG<O(1HA)=uljf]*RgQN8-16MDldQ*Q!|~}srW' );
define( 'LOGGED_IN_SALT',   'a@Paf`Mt{I;uqO-r^QELAy[$^&Wm*9c,3D;{ y(fSZbDXY+PoCF3M{ZHZ#<l*Iwe' );
define( 'NONCE_SALT',       'yDQaL~D@&wYLG=I<hGL+==lC{H7TE3,C2x}[raM9{Mf!RbeuIBiQ`B33)dzh#}B&' );

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
