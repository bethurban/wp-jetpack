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
define( 'DB_NAME', 'wp_jetpack' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'LoO?{WJ~%bM;/&9[s|q1q8}{M_f{9v6HmX-2K%v-h`J,*LZtDtldAayCqiKA#u`V' );
define( 'SECURE_AUTH_KEY',  'On3</?.ydi;bFvQ9i0IW#nk`/eEb je,/.T_v@>;<}7}-AI9uVc!#?3CmDugZ]ze' );
define( 'LOGGED_IN_KEY',    '^&0)cz<}lwe.eyw[7,2a]PQj=nd<fs$3]gOa1~8Tw)s3.CN9KG8VuKCn{C>#W:k!' );
define( 'NONCE_KEY',        'rs:wwpJ)`[h?TlR]^aJ`e_>FUT=[yxB(3}m4rO8G<SCSit.jh:VE,(u.n*Xw_rzQ' );
define( 'AUTH_SALT',        '/`Z.+c;5+bGtmGqX&7Y.|;%}MSJa{v4#L]!98b1>S3uOv2Cw92<(&/qF0XfQuq<_' );
define( 'SECURE_AUTH_SALT', 'xx %W*dK%0K IsXyBv(8Y-Q0Ryf`lGd,R{Eax~^3UiLL!rJr9>w&i&nN&CYda<2<' );
define( 'LOGGED_IN_SALT',   'tyf? fa;MP74J_3<0Nk9:4Vq]vig8$Q,X=|o2r#ZS<c3P-KO|Z_oc`%V48N!W=YV' );
define( 'NONCE_SALT',       'rR1Lx%$:om3/Wi;piI(k[3nx nHoDN!B>H(M`eI^BYz`0_&;cdz?X$)zNFj^AEOa' );

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
