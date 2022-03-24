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
define( 'DB_NAME', 'photo' );

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
define( 'AUTH_KEY',         'dR-WkbJ:p[oliDhE2nT7(7Yj(Y^:;K3&s$g-.WdGDt:_YF3bX@fUb%mU#XxA(1qG' );
define( 'SECURE_AUTH_KEY',  'f;WsXehvI0}|#$@xZLO($.JI/K5X43_eA?F@ng+2S9-u_DiBti.2fs~Ec<jD@&v8' );
define( 'LOGGED_IN_KEY',    'wSOzX4[YQ?JL7<V[^sydplr58Jy84xL#@h(JTg,g;-Su/+|{nD)>_V}DezN~FL #' );
define( 'NONCE_KEY',        '~dkuo`3}-enRHo&EvTFu-BatSLA!?;Yo{(Z*7RW688oVDZR!i}Ch^6 {lNX}^zsZ' );
define( 'AUTH_SALT',        'Zs6_/u<?ku`KxPQRj8u(j`;O,A&}yGIs3%M#krKbNhG]X,M8Z;%X3S6D<^_UlFyh' );
define( 'SECURE_AUTH_SALT', '-4qth,lQ(+]8Pm8mJ> 5.UyC!RYoh77ycHYhG4K4%@Hg!X%71?[o)m&l6XM:<(|s' );
define( 'LOGGED_IN_SALT',   '1/shGVE3po`S&m!:G_H6CM]Fi~.BkaFGuLd-)oIhD;s:e/55,Y1/ETr;~6^E_gig' );
define( 'NONCE_SALT',       '{7,@(9W?A%XG?_.l9A5$M7KdafH^L/ m2,Q?@xInyTB(QY!X8{ ;+` E-y#8.!&[' );

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
