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
define( 'DB_NAME', 'africaFast_e-commerce' );

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
define( 'AUTH_KEY',         '%E=q).=]igDAK]0tQ-bW9+ET&=99``y~mP<SXUFi`>9*r/jS=-/*`&n7FYu/&%an' );
define( 'SECURE_AUTH_KEY',  'lxSH0jVM0Y+sidKZOq0yka3$,xj#X$?4oH!}KWC,jG!w[Et5qrxHCHSCD<I>%?T:' );
define( 'LOGGED_IN_KEY',    '13em9x<s#sa8xn8@E-zw.<6QRP^m9r=R&yT0J^EF( <UAxI8mkummp<988doe422' );
define( 'NONCE_KEY',        'p`nWS&:~]oGW@%.lUx,Woz`tuUEHh)@fpX{Id^rIP^Y918k1m$cRiQ~^y[UJokis' );
define( 'AUTH_SALT',        'tvx/fF+sMIF.U:).(/]$,7pv2?3L0gioIou`m(.`S2{~US{c)9zv7aqaeXVb5zEZ' );
define( 'SECURE_AUTH_SALT', 'Xe-;p|Tnbkh HQ7G,;A!2I>k%qs+=_:CBdds|v*.)<Exs@4F;e]GOfq`nTcGN`Al' );
define( 'LOGGED_IN_SALT',   'ICH%dM;..uEOeXtQhQEl$h6So~Dz)9RY/HrMT8L/+VxFn[zIWpF#z(w3BXYq(BEk' );
define( 'NONCE_SALT',       '}4e$pg>4h?j[ga$yx>{lJz@s? 8S}X;.bo0l=92EwqAm7]}W}[?xM:<d8)>DubT@' );

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
