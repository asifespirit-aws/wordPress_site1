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
define( 'DB_NAME', 'wordpress_site1' );

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
define( 'AUTH_KEY',         'EFrzcECXC1`wa=Ww+fZo&V^^RWSM&vOY8tpDs[H fR]JP.LUL+^RdI+!RgEE):DF' );
define( 'SECURE_AUTH_KEY',  'YR;T5 1o}J=N]qv[AO=.EwPpN&V_@Uv:M4.hS;@#L-$H#dd*jiR7b5%gqD|S[*o?' );
define( 'LOGGED_IN_KEY',    'pJZX-/{@C<Ggca4QN&xbkoisQH|=QGl.xxHF&DD6~bYAc(U5q}*I?J4-)PDX%S5@' );
define( 'NONCE_KEY',        'a{]1Hkd[,UP3IH9gQ<VJn_f!)1(5.fHb4W_Rz vx%f%#tn&aIo&<~uLBr_)#?:SC' );
define( 'AUTH_SALT',        'm08aG}5W-oELliL)/ULuB6pso# ^`s~k/|`(,Lh_P#&?:c!9-;_dwLxn(5d7PjFN' );
define( 'SECURE_AUTH_SALT', 'AhEMw-MdlC!1&fXA3nmdb,RUti:_x`ZoZwi8qFL4F_Hpr4wwTYNu_p4RVEdm%U%A' );
define( 'LOGGED_IN_SALT',   'hp1#68du7&.yAG$GZJMV]vadKiC;txFuZe}ir1q^:k0NiVzU^[L<^mS|_|f+ZTa~' );
define( 'NONCE_SALT',       '`z,?eb|ig2|QYiJYJKU]k%O;mqq6/31-jDBZMBBD&=pyCM3Y[t0d((CUWq;y56JS' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
