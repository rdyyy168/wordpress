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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          ';mcn!9{*^59ySaBkG=u_%CubfH*nUEe>qY~jq?H8zJgTk+_]Pe_HOn/Oj8M$-Bfe' );
define( 'SECURE_AUTH_KEY',   'rL4Jiz>74!(}245MpS9{cRM~%RLogru.qv;b}amg>P@F8.C=_MHYbPiHCLS7gr2T' );
define( 'LOGGED_IN_KEY',     ':1j~qGdV<8`Q~Iack8[D0WW<T?o7IhgWJwGzuHP#/kjiR95rh8X6I?R:Mr;8fiO7' );
define( 'NONCE_KEY',         'b*~%0;E%/)_?`:$gL7D^E`Y;cZn#{1l>n9cE_.f8&{+1Und|&)>e#wkJq_>`Uq>.' );
define( 'AUTH_SALT',         'hxf$1^&[T`Q-fKb{A`2Bj}eBhuFrr@d`N8{^d1@1)EVV[UBW.eP%o#PP@*p=<K>+' );
define( 'SECURE_AUTH_SALT',  '^<MlA-F/qEKsM>JF[c[Lp? !@oZG[:3Ky8R)uV<UV,{G{wsa)l5d-]i-,5i ei_C' );
define( 'LOGGED_IN_SALT',    'gv,8#_*^kix}Tn0`,_S:L39k7;nnLC66x)x!W$|//2_Iq^UuW}wX;5IeQqcXdNYM' );
define( 'NONCE_SALT',        'ZC`4&-nzxjCOd*`F24aM7aiqi~&q5l/<xs7i~C|>rMJvqV{frnD%}mB4g3^<LFq{' );
define( 'WP_CACHE_KEY_SALT', ',;6F>@1Q>wZ6{?U_sgccoLnhEUtTSMoY[of@8PCQZDX-[BK<g[^6q_=C[BmSpJ_7' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
