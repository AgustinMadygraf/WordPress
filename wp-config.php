<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '12345678' );

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
define( 'AUTH_KEY',         '2f2xdyy-EI<*FvG!H%-T/W}sty|`9N$1Edc?5 M!-eht]T-}I:[peU|.Fqr/GoRE' );
define( 'SECURE_AUTH_KEY',  'M[iqp>Bek,;gkT<xWJM:JN>A?H{8n~v^Y}ZFP#]-pXcFp([*)JnDrf6R?]z!tcy)' );
define( 'LOGGED_IN_KEY',    '|? -* L/QODpD%CRS|o}Yq;x[^tKRJeg50|(cHDE8XgYOu2=M]:G;b4:H40T!rox' );
define( 'NONCE_KEY',        'R][U9_$BsEo@VGwa}woS:m$mQ<R1+<t;`I+=|(z|:JS[aN/yS1yx].$F?R5lbp(:' );
define( 'AUTH_SALT',        'ZWJKRGR@55Q+H&B~Ick??6G>NLxap9XD^JfI5eW#deo-.H=kx?VurfX^_d$94)Y ' );
define( 'SECURE_AUTH_SALT', '`4&Y7yM1a6q@FL!g1J@UZb: .gjDIsXd;gz:7t93- N$OO^1x zH%nm}Vlk6AfJf' );
define( 'LOGGED_IN_SALT',   ']yKYJu<(e7j:f8^orv^Tg~%Mj?td]pi^T+C#i{+`XgwXMz_}~cIy4v|9}gM6i2RP' );
define( 'NONCE_SALT',       'P^{J3L}pby;8Q5S3uZm7oD%CqZkl*vYY1rWoGCU@IYF1N^]/l=a<J(0fP~PR%m:r' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
