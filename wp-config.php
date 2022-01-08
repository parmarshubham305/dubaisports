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
define( 'DB_NAME', 'dubai' );

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
define( 'AUTH_KEY',         'US<Nlh]S5Vsg:,Xc~-u`Sy<N()bI.0j8=#L?8e%YDS}%r@3E#:*)Tw805)iyidw{' );
define( 'SECURE_AUTH_KEY',  'Fq_Kq3F@vzV{T86Av;u&>#2yYWr=NrhC*S23[0GET3%MFnSVULm@& A1squ=ox*2' );
define( 'LOGGED_IN_KEY',    '(*&XG{E=F)rg/7)K3#M}@M6xO`I&OxYe/T`RNA8ftzBi>,PU>fSOH7p8(1_UVofb' );
define( 'NONCE_KEY',        'f!eW pK1dLNN.UPoEH;X0L790/AweY^FkgyC-*)m)k<LwdbS0NBX92ePiL%yt2qI' );
define( 'AUTH_SALT',        '27+A|@5VtQV=!wPO:EwJzx0_tVNhLe44K.!X}p|jDlckgn0FiMZfA? <Jv,X1Hs[' );
define( 'SECURE_AUTH_SALT', 'z}u41z6JJ?82*Us.&)UOUJ?xcN]?LuQ?[R1v7[a:^l+k*L>+t2.X`hq)#<z?H0NI' );
define( 'LOGGED_IN_SALT',   'G<cTpx^q(ERB%a@9lss,u%>Lli~[$o3*{YK$g7:G#Y|Z15WgF(e+%ca-M1;12zrL' );
define( 'NONCE_SALT',       'Rd<BZFP68k%hm=0i{+!-D[1*}3{jP8MSKeZ0!dW:!Hn @#mAdWr9.J<bQ%S1U%^q' );

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
