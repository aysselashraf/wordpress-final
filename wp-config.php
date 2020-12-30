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
define( 'AUTH_KEY',         '{BA3Qr6?7E:w<E@2j|ah!g}07P4qO,V:.S#1W#v!}nGdL-A|J<As!E#>:n;O*xI|' );
define( 'SECURE_AUTH_KEY',  '[=>V;URhqSu=F~t=D|@W &``%9_<#B)LkyV(U%V:jNPSt6%1,]a)kE2bons|<$/?' );
define( 'LOGGED_IN_KEY',    't5P_BixT!ps!*L_H=wL3PFDE!Dh6mbOvrZ3& KQXB8WdiV|:E}(|sof87g)RGhN5' );
define( 'NONCE_KEY',        '<}9p2:i*4_5+xHrupH16OpzhQCH)t)x %Ok0k+!aEZut}t 884aMNXzrjXR:7wN6' );
define( 'AUTH_SALT',        'Fgr6[4.Z2vP<!_+Q^Q+7p1aBU9vDb>/BLuHq4VL0%@A)(,UrQ{3|]~]2=}4DxI!X' );
define( 'SECURE_AUTH_SALT', 'mbZQ25zE&-~V_wFIIKrw}}9}OK;}cPw +W?P7<IgV<1|W6q~QY37*{85p8^P{_v0' );
define( 'LOGGED_IN_SALT',   'be9`=cm<Bs$xF6Qj% 4;QU6b%%]+D#pp#CWz+{|[z}S!:||0fxsk,cn}+rl$(Knn' );
define( 'NONCE_SALT',       'f5T{}py2cUf<xfpP*XD@cUy=gI>~UcmM6g-$h~aijk7kU,BcJ~8v`)q<>v 05yQ)' );

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
