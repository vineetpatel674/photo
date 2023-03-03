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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         ' fuA:CFHYv85GwqimGqUuYlQqoTN#*0F~-ysH7iDz@Pp*,wp.lT-53oG#e,hE<^1' );
define( 'SECURE_AUTH_KEY',  'g%NJwlmS~<Wl !JoeLa#v~./DhXdnjGyBMku?NAXL-97QpM;7{F7L%1x</D77M@G' );
define( 'LOGGED_IN_KEY',    'VL~*npa#@P>cSh~NQ0<L+|BmHQpDdd^X|aEV5sHlaqB%M ^=MD7BZ$us*sg_,HOY' );
define( 'NONCE_KEY',        'k,VOFYZPO-#1wN Dn4n#L9Opo^Uv 7R?%7j#of3[,e?X#Hd*:uOWL}K,v#O8>Rvc' );
define( 'AUTH_SALT',        'qW*1R]1lW@6~`$%qy*D/Bz`y%/Qm^2]{;xPXGk$-*LtsSX]&9:WUAb~i i0Tr*N4' );
define( 'SECURE_AUTH_SALT', '5ORbH;8Ym(K?e]p/f@Tlz|5uiWVM9V)F#i=j>]%GU~MHrgH*+#~P^9@b0!%Ko0>I' );
define( 'LOGGED_IN_SALT',   'E|;,DDNW4jCf,jyp4N*1sWCU}TtR0]Sy-V$4zN?Q*#GQMh- &JaD,A3_x^^_t*Ix' );
define( 'NONCE_SALT',       'Peca]LDQqq2[D:Uw#}%!~78hk=5]*qg:g!kr]NgV{XqfQ~0C)>bmbD4p&Q1NhsEH' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
