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
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'NS3/MDc0LL}z(bcCdAXc}(p_pskTCf`cG6DT=rIK$&fA~>wG8xV5R# 2Q9&^O#e#' );
define( 'SECURE_AUTH_KEY',  '>>Y3P>,s];eTgHIuW?RLRsO0w|3CQi4pA/=R4(wce/-J6?ReYWa{~`kA~}zh4Vey' );
define( 'LOGGED_IN_KEY',    '^p8sz2gN5pk`e+hQ;_gy>[yhf] F !Vs]73-!VNd2gMiqt[n`k@rcbr;~&1HB#: ' );
define( 'NONCE_KEY',        '~PR9)FM9;[$zV8Z{.fDxtAcGd6_ks~m-ox6Z@(^TsQQ8GjTtqzM3H{v#zsK.?nb|' );
define( 'AUTH_SALT',        't!/{}y(#T /~X9/M36pF>mZ*C *(}YOgv{jG*D}@T@z!GB}5YCndgXMGQehjmZX4' );
define( 'SECURE_AUTH_SALT', '7rtGA{2T)|<y$YRuUfbm):j+}v[@lR.+dqh61XiTg/{wON;uw=mR,/9?s9.y9j*,' );
define( 'LOGGED_IN_SALT',   'VOkM:+ygIJEe7u(Gu-|@DztcZ,rzfSg.j4Ui;aK?zaz!0MRNeMGE=GKLaJH zX(7' );
define( 'NONCE_SALT',       'Qk5fQ5FHnnjQ<x{Xv-)tG%?kE$hXl]CR]M@WuIC7j3/DCDKsiq13D!HhxI13MM=S' );

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
