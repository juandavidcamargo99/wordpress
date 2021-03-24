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
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wordpress123456' );

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
define( 'AUTH_KEY',         '1vLHZIfyQm*$Nt9q0v5;JjLL&>4Ak_uRkD.(ygd AmJ&O}kDab%c]y;eoj;IL}?f' );
define( 'SECURE_AUTH_KEY',  ',NXcy%5R0|OMRaIUMyU]? Ytr$/?r*]>svEpQU7fRA!5*B.$+UALTS B.nMdR|fS' );
define( 'LOGGED_IN_KEY',    'Rxe7A%SK_a$[+,CozF.<(0jDM$A+%pidjEoYhv=wg}<iltJ3`jy1%grBR<|V/CsO' );
define( 'NONCE_KEY',        'HOf6C:#IL2Qq!V|0X/BH#Fw?4K1S`6!-i`!:a~BjvA#YNUI]N+r<vqch/*BR*YNp' );
define( 'AUTH_SALT',        '}jOm<+0FHP_LCXEjY(|nvSnBY,2Y5o5QjYb7@X~mv:#$g;|M|w%?=zC4$-_D~SGl' );
define( 'SECURE_AUTH_SALT', 'E.{t.cviuj^B[Fn}ziR XY&5*u/iTmyfTANOI-T/?]S$EZYO|]p*~o|BkJ16$qs>' );
define( 'LOGGED_IN_SALT',   '/OQK77v#q }ZJ6= }e5>lw)&;v3e1RnrmT[+lPunE-hMg6BPzA_S o TKC>`Nn:D' );
define( 'NONCE_SALT',       'L<u,Ob6$SXO5LZ?j3y-Lp.PpgVLj Q6gJ|`Xf1uYJ#0#.F&C6_FVAVGHe)-{rZ;$' );

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
