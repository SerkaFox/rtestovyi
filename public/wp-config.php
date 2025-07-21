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
define( 'AUTH_KEY',          '{H_sCfMTTK$V^He^WyGM=7X<Z@.h!ln(#n;Gv)Sy+mb^{v-}XXh>!3Ph[kHu.Y{P' );
define( 'SECURE_AUTH_KEY',   'ramZ?=Dz;hx6O+v#5bd)BwQscN)Bv$}#Jq^{(O}gEpdu&]:EaUU0<+&Tl[~yeRuJ' );
define( 'LOGGED_IN_KEY',     'Zp445rJ /a&JGt=EkJR)WS>#LaL=EaFV)U-A,_,SX*o ;Km>kpsN;.A~W3tIya A' );
define( 'NONCE_KEY',         '0FnW*{*ZS%.Si9FM>Xm>)&8,0#Pi^$nK^lv1:P!|Ma78p*;ne{=Qj2UZJb!s1na@' );
define( 'AUTH_SALT',         'JZD?dKn=%qK`{`r|S{$d070a3Kps%C@djhcdIoDmfljBlaaM}[/w~m2wq~VtoFk4' );
define( 'SECURE_AUTH_SALT',  '`g3k]+9dk~@+AV;uZ+4$eO]5QReLhwgk>OyqJ@@G!tWQSZTwNK63{AfGa1rgE2V#' );
define( 'LOGGED_IN_SALT',    '[dpfq#vIa@VRTH3alA*`w*Rj1ggd2QR#nZ{.Q~D*85bF5nOak#2G- E%Dv)tS@Rc' );
define( 'NONCE_SALT',        '~p*` <r,>tcd&1b4my;Y[N#5b&I@E^E`t5Ig;L%]|bdv|T~lu/C^+}x$PlV3tZoI' );
define( 'WP_CACHE_KEY_SALT', 'MJIRGw?87/nb^4u^iuXI2v%fq%Hh*EFe7~[J0Yld{;Wo$Vsy)#2PVTz8pglSq6^.' );


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
