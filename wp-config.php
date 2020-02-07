<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'rtcamp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'zrJ#2{0HVvg]+e3@sp%*cS{D1Wrzi[47]PE J$4T5}c0tZ06.nS`bFVNv7Lz?L|,' );
define( 'SECURE_AUTH_KEY',  '|rEVnnTeuanuLaE`wUQ~R `Pd;= 1<BS7C$=S ?jEY!2;GS*,Q}j(jf(0YFPVU>|' );
define( 'LOGGED_IN_KEY',    'zDfD`/MiTvWd0|Cn2}>dhpW 5#JN,$f@I@Fn%.vPx>Sda!=liKSFntpWk=6`&k[w' );
define( 'NONCE_KEY',        'v0I~*?139011(}2BS|<-k]OHQ@g9H5WN=[MDEsI5ojVG{auydg7l[Qx0|gu-9FT(' );
define( 'AUTH_SALT',        'p1t>2w4^GBW<|F~8W_P``tR]-|Zf6$2(h^w(-,0ffv#&_c6}7Xa}O`JVcX~o&f60' );
define( 'SECURE_AUTH_SALT', 'rNz:P);3&c9WcamI| ~N*NE;|4b7J;(aKNy%o{*i(PB<jJMdbkNMIBA4@_0U-)@#' );
define( 'LOGGED_IN_SALT',   ']viP;rT$x%$<De!!1 8ozZr3BqD%;$]X]p;.m8]=q-tNLEvfuRi(]Of[d1ZMdq?>' );
define( 'NONCE_SALT',       'lmeTXI1p9J#rt8bTS]!nc_9drQ+D8Xf[-PC.FFD7PFayFs8!.Uu9mR?t.<<wzL:T' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
