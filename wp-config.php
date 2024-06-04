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
define( 'DB_NAME', 'jago-welfare' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root@aayushi' );

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
define( 'AUTH_KEY',         '-js#B^=-0@k.p|tnNad{WJO:>yy M|d6W>;kQOhRb%Sl]vcX0O;yIgHQ.o}l^]nN' );
define( 'SECURE_AUTH_KEY',  'z-~3~nK0-7#@ (%K@Lx31TgwJrT]SY.<Age?:)gtkXff-R7l$!FP!P([g%*hdD-Y' );
define( 'LOGGED_IN_KEY',    '6%htdlTW4cafYt*M/{JJjKnSPD5~:vi+K-D1_ssZfcR,rAk5A>we~PfI[]x/PgkW' );
define( 'NONCE_KEY',        'd C8bMb-gY29@r-sqg_v{*lY;(f(C.sI(g~tP*S)O}{]= f}/i/:hoJai g&Ie=4' );
define( 'AUTH_SALT',        'iP9u=b7I.3z?DNCsKzV82XAG&o1]MF9Lol_:6MA0t6ZYS[dM(>h^L+v20J*Y.n<@' );
define( 'SECURE_AUTH_SALT', 'lwzX>?|C<%SD-LO^<[ZWI=~Oqw5JNSzG8nG%zJm?d:9O&n|dI.u#dnM@kxlj<IT|' );
define( 'LOGGED_IN_SALT',   'q0[Ywt+;>rAR_T%<4mZ$S^VEc]q[o=oMs?<WRfA{Q/shfyx%EtT,i)Ze}yS`j6tZ' );
define( 'NONCE_SALT',       'B-3<yGTKYd|Jk<(|f@vjuNi0F/NQDsl)h]^hU;9^Q$m2,LKLy*Mq |oU9]~;8G&^' );

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

define('FS_METHOD','direct');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';



