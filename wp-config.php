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
define( 'DB_NAME', 'wordpress_nardine' );

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
define( 'AUTH_KEY',         'OIGWZp3oyN/=U<Y@) bLsb7G<(RZs4PxQ-V=P[CMvbA$tvy/:fpz4b5pgLdPXRr]' );
define( 'SECURE_AUTH_KEY',  'kurzL8=,W:3dhpD]x4_l}k+-Ost#b@RwH kdf~RfWi*J&G]*87CMt_2*(z9ZT,-p' );
define( 'LOGGED_IN_KEY',    'XelABb M10zq@?PIk~>I+D`Oc$$r_qx-O{VLVsQv,>w{fU}5KvWJ$J%MC|3]$eB$' );
define( 'NONCE_KEY',        'F}=r O~E>q^3$@XgD!W0RiZZ&gMai2s:`h^gue,BEHMP`<s|zYEA.q!b3BNGNU0R' );
define( 'AUTH_SALT',        '&9I%o<$eVh^)s}UXSiy3!b;i(l$z:?M&rmsoT$X}SSnsU= q1r)DVlT&^A/%PeJ7' );
define( 'SECURE_AUTH_SALT', 'q>.7H*NXV3wVL3^@b(vJs|6iMWr7p80.)ep.o(]8yC.>1xNsOUf+Dvh`m8}EJ|[Y' );
define( 'LOGGED_IN_SALT',   '{v;yY*KtLxRDvh;va7#&my2fBXNQ@3r$5rALL[z3IA>D(1V4IBU1*AJik<!:41im' );
define( 'NONCE_SALT',       'zizHfdnq_q{G@IKEp092qe23e^Ph_{(a`Z@A$Qn^$qYSYllb/E,p%kpK8ZJjvwf`' );

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
