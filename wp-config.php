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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ofb' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'sUuKTNas_% Xgrf<,j9qI?BsdA`oGLK91sc$cCu<Q42~Ys1r;B8FQ^f)61ljzH7]' );
define( 'SECURE_AUTH_KEY',  '!XZ1$4k5SpAUoZa%*Y=PGHATFL}o=AvZPYB4!(gHH=$3N$MAf8L?gnx-q6pS@Hqi' );
define( 'LOGGED_IN_KEY',    'zd%$-vo06r/iVl)KY{:<bV`;0g>/sMw}zBw]fM cT<$TN3I^oiysJXldW7xBD@Po' );
define( 'NONCE_KEY',        'e66| i-,}>o|dm6WzhD:VV^_|_T  8q=bC+V.0uo#@1D8q^Sx]+kO%!8t<>HP0;}' );
define( 'AUTH_SALT',        ',Ej3CDtlWc;pAl((Hh(?3)xzaJxOr-;z?!h~Xek@hU?_34V^B,#J+0=Sn)fw:t=^' );
define( 'SECURE_AUTH_SALT', 'QCgchM&lbm]r6/$Tr0;Nasy3=FGmK~%n$!)9m>`V@F@+WlGcE>XQLa=^3PyAM2&L' );
define( 'LOGGED_IN_SALT',   'Y<rv)e$,+Z2@kz2%6u=&9.]OPy2$)1hBQ5.-4^.y;CkAd>[uVMw1Kh_ay}P.%5}R' );
define( 'NONCE_SALT',       ' )&2:n=fu#w97{^^G/=3u+f`vZOInDWfk@eQw5BMdcwgGZGut)dzj,ZUK,GqyZd]' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
