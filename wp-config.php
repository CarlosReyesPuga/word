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
 * @link https://codex.wordpress.org/Editing_wp-config.php
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
define( 'AUTH_KEY',         '8a1vcS?A4??TFXI/ZPOO>4xb,@ojUbLfv;XWSqswa-]=$8l?,=c-l<Pe<F.S`zvw' );
define( 'SECURE_AUTH_KEY',  ';W7aC9ceiq:1W5licm:%^NB8e:ZbXeW_f4}xsxEbnnT&c+AJK5|fkNDltG8FKhxE' );
define( 'LOGGED_IN_KEY',    'Tz0YX;JdKUk%e`T$57Z1 Y$CO-9@_U+%IE2X7AeTn<e]f7*@4$^ =&p)IUYWK6+w' );
define( 'NONCE_KEY',        '1[p}Y`+BZhPGD})-v?Eu/.<tj{)mrtIswcc)_h:bF}|-P6K-a~pL?7K9f7Mu .*v' );
define( 'AUTH_SALT',        'o!FR `|e3A6#!NIuymZ#P+|fy{C|H#P]wcnEAJue%?5[K)(|)YQs0@/*L>2.BjU{' );
define( 'SECURE_AUTH_SALT', 'Q3*]pK}p94*J_D2[0?:sW7f)s$n`{X$xU(Z.;TBAs-{69J{IGj>o|.!>7O}hujib' );
define( 'LOGGED_IN_SALT',   '6ihIqJLX(}MIK9|<`iRE@y_|vGF7.eZq~d*VJ[k[XZLbSP[yWFLbWsYJ:MICV^KW' );
define( 'NONCE_SALT',       'V;95j~l[#g^4<jS_wY_^m`LqlzP~[jH6u_#~XLc^yFU]MAT,,aM[g._z(7<V6BSF' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
