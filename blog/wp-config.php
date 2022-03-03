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
define( 'DB_NAME', 'zinternal_blog' );

/** MySQL database username */
define( 'DB_USER', 'blog' );

/** MySQL database password */
define( 'DB_PASSWORD', 'jy8utehus' );

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
define( 'AUTH_KEY',         'g0V&?WlOCb`:8&QMi>O68(=?/2OC*&UFzAgmO;6b_D?}k 2?L[88KaMyS;RPtChv' );
define( 'SECURE_AUTH_KEY',  'pve#SQ Chrg0uM},zsz@p /ml`h2,sos}q|s-=2tc9i=7kslwO100dP:AM>!.!.]' );
define( 'LOGGED_IN_KEY',    'GN~XDD/12{t|5^B@2%x0`pK8)u!U~e1M>4+aVk1NT0l)[d,H&Mnid[$yCMz!XYa,' );
define( 'NONCE_KEY',        'wDz(m<f8Z(O9=LCj.ujvN+zsH)mo>!lG+$oI1Zjq5+Yg/j8Wo0.,Bwh8n>%ak`j;' );
define( 'AUTH_SALT',        'i1Y];=t8Po:[]))u,+M]S%i@sxTTHr`/=BiFq3zzox7npE:[{7-_l&Su#0QxE]}D' );
define( 'SECURE_AUTH_SALT', 'oS.5Waq<n)W]9Jz7l6ipW30[C?:i2L|p$FC[]9sKf|ajC4i8i#_X^YMGK4ZO`$*h' );
define( 'LOGGED_IN_SALT',   '`TtO[ jW_vS9/t{=jlznh|8^ZLs52xnZ&D!Kc>*V-!7<SaR~Sx(:J!7ZGt_;B?T`' );
define( 'NONCE_SALT',       '<0F-Ts<T#qBpJ:_KLzbSVg82oeDT8}7kK~R0<mor:v+V[2fTS>&#R(u]owa,!`Re' );

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
