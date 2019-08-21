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
define( 'DB_NAME', 'pesonakarimunjawa' );

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
define( 'AUTH_KEY',         '+5r@L[eyfoPE.}NQ_GHH+6XdFb-AVT5i0D:(,&_XRmn[F] 5AC[>-<7blUkS6z%W' );
define( 'SECURE_AUTH_KEY',  'vh!d?w2|9X*%~4BbD#)CnG7ovzf!Lj(+&[q:7GHn37BDT($)(pHz1WjdS<al d2e' );
define( 'LOGGED_IN_KEY',    '@!/1;*7?]%S3yX:6}6I`_;Ef<WK2A39~K|,&SN;uHG- KJ6}B7z){K~T:fE!~Q((' );
define( 'NONCE_KEY',        '<$G-|IAP/<qAsD;HWecaB+#0z|MAYK}@Ki8*`{e8D-A6S/>Ed1Rlo`_s|;4F=Q B' );
define( 'AUTH_SALT',        'FyVP`^kk852K(](NvX%*M+<8R_~vMJG/~U(gf{zUP $ikdc?@Q@]tMTt04m!4 !C' );
define( 'SECURE_AUTH_SALT', '#Ll=9u_KoJ7x0O;*dverB~F}JK>1N*XWGXX)gwq2~iqFAMiGRh]oh,/O]P%2(oqL' );
define( 'LOGGED_IN_SALT',   'O1>jbBa#Y>>KVk!_R M&XBq{0 Z7lG~,t@I_2$SRm(N+fSh3KwgX|qDZs~aLCJzr' );
define( 'NONCE_SALT',       'ghK0:+$sQGy|Hz`UD>R)Fh*;+~-Nqi&~#5z22@8#Uj+Kx6;|gg?NIcEHA)g3X?.~' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'pk_';

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
