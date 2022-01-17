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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'landingpagewp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'HOM+{w|BI})lGq9cJ1qj[imSzvRCscI{}D,w&j(_t%p>rZZ<t$BhdZB?bU%s UQp' );
define( 'SECURE_AUTH_KEY',  'N]+l3G0{?V`Neb*2=.?q.!PE!>KJm>V<&mF8ln0$7AMyU,A,o:c$*]$g>;?&iwgp' );
define( 'LOGGED_IN_KEY',    'zDN[OZW.U*/g_y`;YCvJ25j3kWiZ_c0DP1?yS7!wAe/m.6J_V-#z33q-;:pV9H%{' );
define( 'NONCE_KEY',        'jI4B!Kq|uFW!i>tSzfH]Qzc@c<ri<sTW%P;u+](PTo-3Q|3B#5F:MC`+b7=}sV7A' );
define( 'AUTH_SALT',        '?4l1~{?x?f9@D?A+QAgXhr<U~*-@!atvL1veYO~|_n}EVux=vV9]5MQ)[!1dxw J' );
define( 'SECURE_AUTH_SALT', 'DhgHg?56-I;!WQJIqtlNtLXW`k3|p]UVxso!}0m%.=o:l+OB>l/xu`H0wb~_Dz;r' );
define( 'LOGGED_IN_SALT',   'b_DGSE7Es9($5;/Zt._z`mOZAc1lZR.opf..YbUv-M^C)%-Ar)`gAYaa9}D45fK$' );
define( 'NONCE_SALT',       'h|c!^E*P>fJ<;`I7y0GzzOtXkMbOoUnr2o+jj<hdC+ettz?dDfUK=CFvgSVU]@^?' );

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
