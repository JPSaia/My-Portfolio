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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'e>.S<A2e{;%DAqB{c^`h^EJ`*HS]gYQUtJ[xE(+)9<PU9Eg2h%]s#C W^GC!T:_7' );
define( 'SECURE_AUTH_KEY',   'BUmzn4+,`7b/`rod&68b}y1,Rqyc fH#]C-sL9fLTF)qx-U^QQ5sT!&q4|ovX$` ' );
define( 'LOGGED_IN_KEY',     'v*X^! Sl!T@ql_GoBveC_Ks.=3o?-7J&=}>3-1S|mp$e,m?<.)b%BPPnv&.Z&&R)' );
define( 'NONCE_KEY',         '<,vh~LqbN(DSqj1,[{Lr@ttq66~?P296rZ`mX|]F[N29@yE-S?Y%nk6Gvktd<AeQ' );
define( 'AUTH_SALT',         'R-:l?[@Svh~q&6^~L?+dSeM]%F]q9*=weUqUHGyouSn;:SIH_{/@KL%uQ@/t:k:|' );
define( 'SECURE_AUTH_SALT',  'S>*,}R{47ysK&d%H]CRcy^ij9h/7T`:raW25K&eXD_ Ln/dq{WE7o6a%q/CtVdXT' );
define( 'LOGGED_IN_SALT',    '{WIfV6#0=@{?v%KZ:-p_($%*xnB)-N+a7e|;cB{BYk;ko6yu Ucl74[B^Ndf$Ope' );
define( 'NONCE_SALT',        '4Da>%[n,@`_89/a.u>+KaUrM4X{.S]5(S;+-vzBw4hm~pp]l%8?%]FKy[{axcpto' );
define( 'WP_CACHE_KEY_SALT', 'D-1o VWjhg6$lGv,`X3pn,(&#.LiWdBxZ[ayHcy-kSSJ*}%M/2Jav#v`a*7RN-wS' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
