<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'testwordpress_db' );

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
define( 'AUTH_KEY',         'DkE*D[M=;jNst&-QuJ-shL@MrCldo7uVZI>]JMt(XD!M]a|zg3,(HcJf)vgZp7TF' );
define( 'SECURE_AUTH_KEY',  'BFWLn8nF}V(]BlX)XyA?wQg@8wkZ=,*nO2E j H2z,mD4_e7WQ#!_z92rGKL >&r' );
define( 'LOGGED_IN_KEY',    'eN?zOaM%shsDGj3$-`cO,o7#i?lK68|0|R/-bDt?b4SwjI6QAN-v^g#?8{P+<7A ' );
define( 'NONCE_KEY',        't;^v.v#tC0vDP%*vTY*s@(`tY?Xp)r9C-)F05CB9}>CwR[ TP VX f&S`h%ExMA1' );
define( 'AUTH_SALT',        'G&MeQ,-0hzOmJ)y$A3[u8M4G-D7bOa{dG~!{TqYec3s?u-X|<,E_{;IEyAyKh~sf' );
define( 'SECURE_AUTH_SALT', 'pPLnb:$$$RSSTc%F}[R::FsMnaC)Y/Y?&%#MVqm5SNG%a)~y?-t(]jV,|n)+J`lF' );
define( 'LOGGED_IN_SALT',   'sQ:&Hq5mDGBw]f{4lXU/nj!@:KTha(./?=2>QI*K}%}!h#C8q4xN^!jBld9WSPCK' );
define( 'NONCE_SALT',       'gRYl #^P_4&QYOrxwwri)e[$9m;$1|Wm%T5EjrymxzmOd9Um0@=GcVX/R8(%XYUa' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
