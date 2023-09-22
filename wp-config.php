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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'MARPSTORE' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'f6$X0vUA-GC,0#o3mi;*)]]SwDE>EhH|OSBsq8`O<{(7X.={kL1 X.&avNA6@f%_' );
define( 'SECURE_AUTH_KEY',  'k|-9ciov<B4s!9l}d*+b gUULA|I<EPWe?b@$;,!;Nf}@E8Q$8uP>D$xJxI6CsoE' );
define( 'LOGGED_IN_KEY',    '6zR5Td;cIARo:+<^lUvV/jY)a:vHaI<R{o{6k1Wbr}KVjy F+as{WA9aK6bmX-_G' );
define( 'NONCE_KEY',        '@Xa_m,mi:G]Loi@h@$Mrlfa@;e/@FVEBsBasZ^ nhHCWEunfc{:jt[O)Q,12!MYi' );
define( 'AUTH_SALT',        'u7Ia*&Gak1{zl$#p%dy>6))&%?fGI[ctgVc2]ka@~{7/S+KfA[~:r>/.:T*?hf;n' );
define( 'SECURE_AUTH_SALT', '6z~)n-&ZG9Qli]M;?G7=;UPf0SD{68gaT1;orBA&>|r^6~0M@C^~C-i=E~yg}i#t' );
define( 'LOGGED_IN_SALT',   '>z@v$u<VFawpKETio:[R-,[Z&Z&aU7?;T{R7HEO`h0r b(%E0lG2|D`gA_)LsQyH' );
define( 'NONCE_SALT',       'V]O-%<Xh2KzFTM,=ZpJS-N|.uhPOG:+,lE?`{5]+8;!Aw7KbyyP8z^mSOD?eDbf@' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
