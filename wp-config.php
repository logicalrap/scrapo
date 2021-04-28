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
define( 'DB_NAME', 'scrapo' );

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
define( 'AUTH_KEY',         '] L>xqr6#(9ZDOxT-9:n2RU}(=ps.<9.2bN){P^>c*MrmnsIeHxdcw42cLkJ;=qY' );
define( 'SECURE_AUTH_KEY',  'pGHCKQt/ n{. z^)bDq(znC2[WW.y~,Lvj!bDME>rJc!xuo`>C;t)/tJF+$[]/+0' );
define( 'LOGGED_IN_KEY',    'Z`%UB9|q%H5|kSsoW|z9He[(p)ZhGG,..&2-9s4:,}OUW9-g2O]j*5asd{zCtS|i' );
define( 'NONCE_KEY',        'LA{}rheh Snn&EJ~;q_hz,KhD$f<O,.4_R%YO{)*Pxm%FB|vCn+BR`=Mj8G[9q|B' );
define( 'AUTH_SALT',        '-n]hOL5+SL&O0![vFFWQ%ksy??$@HxUJ]j1P%d|=jlcb9b8M@:s=k.j]3:; smTa' );
define( 'SECURE_AUTH_SALT', 'aq+E@ni/[3``Xnz3F4bc8rKm_2`J-fj_?%.Fv2AI+.Hg>m^/t)k!w}cRf,#mUw{[' );
define( 'LOGGED_IN_SALT',   'U*9h>Xc3RHx7a+mh.Z~R1ch}nL,x;TK *A tr]D0x4laB<3g^y]CQ@.GP^q@U~,+' );
define( 'NONCE_SALT',       '(vql:C_25/-c/(iG&dA{%=4N_KN_<YY}zYz[h,1@U;xmtNV%=v^^zF0|QB yewNB' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
