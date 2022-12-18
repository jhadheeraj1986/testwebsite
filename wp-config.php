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
define( 'DB_NAME', 'testwebsite_db' );

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
define( 'AUTH_KEY',         '*ZVB95qBuS:jv}o-7P82iAcR1@i|O2$0ktbC$5&aJ#H$%%=DE*=DCo3S~uKY=$6-' );
define( 'SECURE_AUTH_KEY',  'xqr{Q1L{=se~lEGM=sx&Kw],j5c+FF:g^<gQ1?gmn 6RY3l8**iTe/ :_s]Ds@0~' );
define( 'LOGGED_IN_KEY',    '!jTFH$&Vb#kjXE|nR;4|g893T^y9_1g.i6A|{TUGx/yR&dRx4.m[+^E0OxTJqW4P' );
define( 'NONCE_KEY',        '$KJJ$=Yb[PfSP*nso^6q%kJsPAn  Ai=7aZgB.W{6ExXaV$QiG#*oKR>D]MC%2xj' );
define( 'AUTH_SALT',        'zT&t`,KH7oDB9?QSd%Q]p=)OFmAfM{O5!{Tb6{/]yl_v5ahEPvBO07j/pN&G;+WY' );
define( 'SECURE_AUTH_SALT', 'Lqmv+[sf.<}8S# YR/4r446,oe*{M,A^QN/VmIYx?(3P1+X`s,=T8{m8GAKoV5,m' );
define( 'LOGGED_IN_SALT',   ' 4,eKRNp=7]^H>hq@)cqGBBl&^xxMQArF~ch|vl.<12&8!*Yirp .>7@Ih&GFh;P' );
define( 'NONCE_SALT',       '-%XcJ/aY70&L7 <UAQ3- Q`f9${brTSLSEd`Lr@$u3aF<sHA5a(U;Q=zqx|A=-X{' );

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
