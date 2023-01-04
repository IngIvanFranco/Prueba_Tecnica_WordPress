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
define( 'AUTH_KEY',         'zl`Hm}_0,cNa@}.?sv;<vCWEc!dLWP2LgLj97_BdPwe<y8crxG0A`_,+q nJZ=}u' );
define( 'SECURE_AUTH_KEY',  '&Pr5z`7*A{2v3)~D7@`a&G=%R3;XgzmbZ{Q*bPl7CD@Tu[<XnZJ:=-puPy &wS(n' );
define( 'LOGGED_IN_KEY',    'pjbtA;I<lc,d:j[XNu=PF[Xo>Rd#^*-8#V)JE0Jmn$1TjRA}G$Z`k0Ei&3{vl4W_' );
define( 'NONCE_KEY',        'Qao]Q~]ahM1o0TcB<E0p}Rk/h+)Ho,;WJnzanK/HiH&MGUB;EMs8=d0dpi1rau6v' );
define( 'AUTH_SALT',        'rF)!7y^&u|D9I-cqd(b`X.^D+jVGJ*Q:u+g07TF6aZ9GZSgD${jp@KxCW*!fF^9&' );
define( 'SECURE_AUTH_SALT', 'IZ}qebS.??#BbG6V?rY_$pc8`4}qztk^LBSm<Ud|hH#f[U<_Ml0^mOL=/];EAO=&' );
define( 'LOGGED_IN_SALT',   ' V._BJQAe*T|8OL3A/y~_0VDX0)R:^()ijA%$SyVO8s(i*d;s=wg7SsXcDA0R:vf' );
define( 'NONCE_SALT',       'OhB<z(%1qaI[~|O4<[*gxeEq<Lkr=k*?llA/RGGEn@A}lCbnn[^lz@d9&w1]DVHG' );

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
