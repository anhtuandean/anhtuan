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
define( 'DB_NAME', 'anhtuan' );

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
define( 'AUTH_KEY',         '~ GDHv<Oo0=0f959L?<CNK/aRVbh]1c,+zH=_Jl=CeunXK5K[8Md4,*YX<(9+=qk' );
define( 'SECURE_AUTH_KEY',  '$d/];o@aI.DD: ]A5qo?){Nhmw.<ART7*Y% %9nluR8=6#QuX)(T 4Y5STX=w.UF' );
define( 'LOGGED_IN_KEY',    'LMT_osa7)!N0O}r|tL@Yu$h;H1(p>ydq]:,xr+Ezo:x3G4KX/iqAIo_ltm[TqvA[' );
define( 'NONCE_KEY',        'am`> Mz iVMm?hwLZ>[+~A [xdFW:Iku9UIsp:K@4!WArozM-hk0Ph1%?Bc|;IbA' );
define( 'AUTH_SALT',        '}gnZ5$4pRbpL|-0HYqRyX`C@_zaQ2U~Se8~yj.z*?I5V2NimE% ZW6%9yfx|o&:8' );
define( 'SECURE_AUTH_SALT', '45R~MVog*]8#cnZ%Ii;qjY`|b./!1{B(Z>l_Kc^ZX8>GwYx`Z>|X0P+a%Hrr]9*7' );
define( 'LOGGED_IN_SALT',   'n/-OUOYNS([N>{|*$&k**.sD/zXyvNM9T*`@Sgi7D9b]EK*5**phaBpB/6bH[fyD' );
define( 'NONCE_SALT',       'UE@J@9(fuzBDky62tv@XOKKR{#pOu9/T/HSLcBSXQW>_kXHA~Z5tCh6jTV]^9/XF' );

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
