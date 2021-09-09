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
define( 'DB_NAME', 'test_db' );

/** MySQL database username */
define( 'DB_USER', 'test_user' );

/** MySQL database password */
define( 'DB_PASSWORD', '12345678' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'oUVq/A/iBbveS$FN$aDV/zP}2U}cA93Rqg=Oi5cbnP|a2.&Gm;v;QuCE^MQ&#Uh/' );
define( 'SECURE_AUTH_KEY',   '<D`<hT0}XA,>TVjoUBVSno-Z:{{wkUbNiy)8Siq!:I1]bPkSzRy-qoRO3Eaq!mSh' );
define( 'LOGGED_IN_KEY',     '}Kh&`*WJGdM6E)$ev^Sadg8#9H=8@<2,bM,<)g3U12S{V^))!awY55n6FQ =.}9g' );
define( 'NONCE_KEY',         'R&d5MkU:UyhU.$527lY.1a2M>V/mZVJ2{[|B?4.xhF}tVyi;=CJI6R86UDE@s0@u' );
define( 'AUTH_SALT',         '3.;^@L_:w@{@ZHh@h,}&b_qI|?7r8_pcQ;P<WNtPgfVgB4+m;,8v.1}kAjgD9Q3>' );
define( 'SECURE_AUTH_SALT',  'V^oC`|T[rz^z1!n-kX9L1Pd}lLx`1B)G3v7#@jGcvlM2C}^6#Jhiv7Udq^VUx:[<' );
define( 'LOGGED_IN_SALT',    '/38l_Uv3>Z)vQUh/i:XQr:y~,UU{LkE6Y@~XK))c5&KL&eHJdDK5kEpWsuRMl#V)' );
define( 'NONCE_SALT',        'd9/i08[t0|Z=LxXQ #)P$,,D4Jd/eiD3Da^]HAq&vU=9yOAZYd]MX5_kZ/eX3D[[' );
define( 'WP_CACHE_KEY_SALT', 'A6hO04Iu!f5Q_q9LqJb):T]1Gn3}8H(oaulJtGEBqU1yhM8a9FrsFpOL=E<d9No;' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
