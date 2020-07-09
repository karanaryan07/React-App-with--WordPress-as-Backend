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
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3307' );

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
define( 'AUTH_KEY',         '68GA[g3js<vgw304`+n9aS]l`WKD9$^3G`S955?)$~/hlX[UM<4i8 FL(?n1gAD.' );
define( 'SECURE_AUTH_KEY',  'ECHX^7Z/[j8b)*_A2ciAkfVp4C`.PD!PEg!*@o9]T[/+T NGpYBs9K8KN~j%R)/&' );
define( 'LOGGED_IN_KEY',    '3cG8A:?+lNZ@WM<O/~,5-$TxMzMP</|Zn9AzgTzVU:>08<ZA)fe>QH]e-@Utl:cH' );
define( 'NONCE_KEY',        '=6l#+BC/o7z$u5(0t1AgzWTQb;ejf/U}VL) (LdW(&3R!o*:il##9I7J=[W|^Xrc' );
define( 'AUTH_SALT',        'VY~Lbopd]SbU*|T4$m|}jpl6(|J%*hX4fHV2cuBss#;8tWvnlen,[v46($,m#mMI' );
define( 'SECURE_AUTH_SALT', 'd5 ?D6|R>G*o=SW~Qb;CqzSuwn&qzbFF46It?b=%&<~L.*(~Z:>nV0ee8gP5QIV_' );
define( 'LOGGED_IN_SALT',   '<]R0}|6,f&h^hOua5*!% _d>_L]uEngUlqFAd9I<Tvv tVGi9zNHIamk<MGR7TK>' );
define( 'NONCE_SALT',       '?4)cr$g[F/)I&WXn*{{a.2sIoSlx_Yd;L [GLk,G^Y5ZwcAl Gj;2B.+p|Q%g:#/' );
define('JWT_AUTH_SECRET_KEY', 'secret');
define('JWT_AUTH_CORS_ENABLE', true);
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
