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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '1234' );

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
define( 'AUTH_KEY',         '&h)Nm~R#Z|B(#RVRyu<2wx90Gr+Cuf a|LtD!mT7#GRipTJi *H_$@K,b#n=W^w&' );
define( 'SECURE_AUTH_KEY',  'vC,L6x}#<c0 O9G >V!v@;Y3(VoqQxG5WIAIUPk#&!@qn{Fl+D[%S=SjZ;_fMm=]' );
define( 'LOGGED_IN_KEY',    'kAN_yhiyw6%,HV-=&Sv|?LI#}S :GqYYv2!W(Kd/?gDk h({]>IUT|mDbv)E&|XV' );
define( 'NONCE_KEY',        'X|PxDN}snbG,9bqmtR`5e+41(24Hv3C.Fy5~iFKJ j#:pYlPke&]fTt+rX:q]D[3' );
define( 'AUTH_SALT',        ',|KQnH&T49?^{EkZV0|GpL~I<3G s!To&Ud%GO^/1|cqEj{:/A~!4eMv_.SU9u|!' );
define( 'SECURE_AUTH_SALT', 'WTljS6f$OeJ!Ec[9j{P86L?5>DP*ba1BlhQR55&r~(*ELcMRUYujp>bRo:FiflF#' );
define( 'LOGGED_IN_SALT',   '*e8OM6PU6fz+Pnvn4e7ra+`0*nsL[[4O%q*rydjTd^mSPWbqW1yX,nRi|Q|51QxY' );
define( 'NONCE_SALT',       '<eTV<K@L$EzR9GNfTw4#:Qlds)#]T8(^ng/ceN%rhD7HFvxlU]q@1}k$<TcpZ/xC' );

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
