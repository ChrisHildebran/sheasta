<?php

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'MYSQL5_1005625_timeline' );

/** MySQL database username */
define( 'DB_USER', 'timeline' );

/** MySQL database password */
define( 'DB_PASSWORD', 'iPQ8NZzxtAXQ84qejUfv' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql503.discountasp.net' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '7X*.z)C7(Kx?g,MV|o%:;Q6g[Z!}kU`C S^yH(kxj*F?8;#Y4p>N)J@]!e[rP|9g' );
define( 'SECURE_AUTH_KEY',  'JR$<nn~e[`(.!j?6R3X `Zn$;T2A.g~XMI ydg/pIEv+vew$hG1h01sA(m&:r.$s' );
define( 'LOGGED_IN_KEY',    'CroWz[3$uRvNAX>(^j,XcqM L4f pTA39t{Rl/Uv4^|]^:I1I67vaZc^?bgS9_NL' );
define( 'NONCE_KEY',        'Sx(zdSjFBxFT5G<o1]T@8(<1Te.n?U7g+NwURrkxUrB8`~fq@USI5C7CFDov8) .' );
define( 'AUTH_SALT',        'dzzo_GZ-sYo+.H@MBfr&MGkxSl7rv~1aH}F}@5?N5h/T@ThKr{%R{{[s`^ae:i]#' );
define( 'SECURE_AUTH_SALT', ')BK%dze/)+vh{?uK8!K~Th|^qzg.~a,U~n:&qx3Ojp5.D6tAUb_%><Yg4,#mK*th' );
define( 'LOGGED_IN_SALT',   'xV<93}vmkc}myk8:4$;ZTHBE<o#JFXtTSP-QGr&b.n3G~r:/!0/hM}R@}j)Q l$p' );
define( 'NONCE_SALT',       '.H2t-e*2/thd)b2EjJNq#mYQ#>,^)!o#+Q4(c@xp*d8hOAtJJ$imoX& <TV/gR3r' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
