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
define( 'DB_NAME', 'lola_new' );

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
define( 'AUTH_KEY',         'SOEpd!Br5Jnk&VC&,=~7oTNw|!NU7!v+V.xa~[8b$<#Tf>tGQOvnSJVnXe(4og}E' );
define( 'SECURE_AUTH_KEY',  'v7Az~bONw}=#,%}:M.L!0fa~oHWo% )XHmC}!-u2 ]4z)nq#-Gt0,t8l:Qv;0N,%' );
define( 'LOGGED_IN_KEY',    'rco3aqggD5JNaL/j{G1i1+r!1&AM<wab9%fJ@5xWzyq^]iPqccxr}^d-n)Nj*+kC' );
define( 'NONCE_KEY',        '$%TXTjr V.2XwgqzM:Dud/B5QF7jY:8`Xj;D_$G#/iqxVy_kJ@U*`kd jW`8y`K1' );
define( 'AUTH_SALT',        'R[,Z(JR~Xz!y5RoK;eKl8TYT)bD0njbx0]DCgGiod{;rO)}JF,Ad@y[)<AH)v~e^' );
define( 'SECURE_AUTH_SALT', '|I#=aIcY%{*D5M[`vD`eN6ix]e*-Mwc+CY?|Yjp2wQ7^q3s#ABcoOUTqQ_HY4,{a' );
define( 'LOGGED_IN_SALT',   'n0s~p0jO7l[(d5,W+t#cs #](hore*6c)#`O10mXxE;G4|r.Ftm*#d)A%ET:WU+ ' );
define( 'NONCE_SALT',       'l4D6-y!A/&AJ({ApS3m.5F%6s H|!_H:F2m/$V/u.:RiL[/{ZjIk^v_?p_1CPeeQ' );

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
