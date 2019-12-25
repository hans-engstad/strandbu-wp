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
define( 'DB_NAME', 'strandbu_wp' );

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
define( 'AUTH_KEY',         '6v_C;?)`O+1a$JJL^O3PR}mxegKL.nI.)>epkrVdI1:vn,:A#K@*wXK0*HIj6F<}' );
define( 'SECURE_AUTH_KEY',  'Uw,h%&W;PJ7 .>7A*(vsX j:`#m+^$~+tLc^Zz@ ,BdNA={7Kc.Bm8>g#Fn.`mMJ' );
define( 'LOGGED_IN_KEY',    'CA1OR%sjKiUx#qLGVQNw)I/qy;tz]N>^U$KCZT,E]k7[H&l.+D;;u49{-SPmY4[_' );
define( 'NONCE_KEY',        '$gKpn#GWH?o}Y9@S`M[1/4,7lL#Qw+-)D<JZQ2{e:Ao/|O-/ nD#{w2nRI2UJdV*' );
define( 'AUTH_SALT',        ' 8<PVd-XKa#yFDh*SN9jNl^#_Ph{EIQ|V-?pcK!XEga>(>UEwNd3Rk;8w4+z*[fn' );
define( 'SECURE_AUTH_SALT', 'r%pg%uL-H uk7U+AM /r:o%V4a5XC/qf(4YgBCSP,/-`]])1f6u0#Sm2]L@CL`W=' );
define( 'LOGGED_IN_SALT',   '5F`qkqh~fj58O@Qq|Rbvo;<-F2r#]e+?qok,BD-v}OU4lkE^}[~%1/~aK%^^-s<o' );
define( 'NONCE_SALT',       'Pki!f&Phbg_x+N8rp[eGus5(&}CG<.}>mj#$gr8[.oMC|hl57y?nUD=/)V.=chbx' );

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
