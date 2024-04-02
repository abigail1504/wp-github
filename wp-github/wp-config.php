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
define( 'DB_NAME', 'rosales' );

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
define( 'AUTH_KEY',         '.4]60RobVfTpLFSnQ2^UIzfc+H5jZGgZ`9+yG=B`P>!;A0VdmP<skH4Fr_j>&zn@' );
define( 'SECURE_AUTH_KEY',  'zeD<q;FLV~,3X<5Mi-X69Z@Gwu9Aa/Uh|YYb2|@aouK$On9L/7_p4^46xUb,~tW,' );
define( 'LOGGED_IN_KEY',    'GnmZ=nD7((-hez++[Z>GSv}/T^aeBJ$0X sUKxh%lHfaTwdYHvgk_ZG:be20iI6a' );
define( 'NONCE_KEY',        'IPUsL]M08r/$%dAAn-o3i]by=~qdOJ,Pjl8,+cUCiwqs;:2L;L/rM1JYgV 7yXk~' );
define( 'AUTH_SALT',        'R&,<PH^(G=0+A9n  *o:i-~!d|rB`RHiOl<<-zk.KAH4u%0!DF`3mf9[@mjRFM!R' );
define( 'SECURE_AUTH_SALT', ']q~g9dkLt.kEZ(YqK&  -G){nSGo>MYJqUrXevNc##i/.X,{s$[}xLNy.+qJ.?s/' );
define( 'LOGGED_IN_SALT',   '^mV6J_I^0i:%wTAGqv_Wg-wt=ql7Tc:>/VsR,Xd@zWYT[v;jdeuVnctaCM|br3@O' );
define( 'NONCE_SALT',       '[#1-^pXk(xQ=r(`L*s9-w<|nhM=WgDMLJdsVvg+;NJ~%j0$3V)L-h!Rhn<Vvz?/U' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_rosales';

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
