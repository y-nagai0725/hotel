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
define( 'DB_NAME', 'hotel' );

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
define( 'AUTH_KEY',         ']K!;Tek__9#R,!$!Y/Z4h]:v*T`?R1eVLgG0pB$-}PPb~rgs~)0a}z.{N/HkoK3 ' );
define( 'SECURE_AUTH_KEY',  'dT#K-:r^IEu!HF5:X]SGD]a9!|S*j$q|RM?>!y}q)c:7J1;V`enpmY ms/)E{l1}' );
define( 'LOGGED_IN_KEY',    'UYka(($SbSHaTCyMA$%<Rn9T9exKHfd 2W}Rw,.lTHLL--`6ss$i5,HH|xDdNNI}' );
define( 'NONCE_KEY',        ')rQ_hbtm<Vai^>=YX>hLy F&;8!6?|xActR%s6CW{Cadz d#pqf,0F4xY@7G.624' );
define( 'AUTH_SALT',        'z5BoN(|a;bVo**;s![MC,vlEd{biJ9%6zUXvzQ3K84fKT1]B,;LEW6P ma3)U) )' );
define( 'SECURE_AUTH_SALT', '$PxN&SEHOy8E<|#U}P?{/7N[Oy2`TU]kru3wtb[_ J?:>UK$(ehXwU*r!>Xu0~8|' );
define( 'LOGGED_IN_SALT',   'k_.#cfMJR{7$)L&<>kh|@E-9hQ{Jg1kXf!zaxX~Uh)%zQqoBGGvUZT%,>a!E_wSN' );
define( 'NONCE_SALT',       '=EJ`[TmnX.b9.pl4lcu9z}P:*F?op9zRA]({5IylnMT-/6NZK8te#1w+J= th$`N' );

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
