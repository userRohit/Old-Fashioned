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
define( 'DB_NAME', 'LoginSystem' );

/** MySQL database username */
define( 'DB_USER', 'tpss' );

/** MySQL database password */
define( 'DB_PASSWORD', '1' );

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
define( 'AUTH_KEY',         'SRUqjA6@8zj:dU4r,exu!6lI_2@@1=y]eMp8%`@[eB/Qh5IJlLpxSz!E$rg*DFwo' );
define( 'SECURE_AUTH_KEY',  '@.JTPMeF1ZiE>wzuILW/s0WXa@|jpl3fdQ^~?(cKc/zJ+[NIagGts%7FDJC:-|uu' );
define( 'LOGGED_IN_KEY',    ']9fmRF|/@Sr|zMw{](N`_[9c2N!VEWXY<Y/3,HKKD1OWOlm+$jwaG[e1b.7JvJ|x' );
define( 'NONCE_KEY',        'p3x?+X;qm8n%EN@amUx;@qOFhdFuWT9/@A?G~883ZdTdr(l_+Y(s{fkveqmJ]3Ru' );
define( 'AUTH_SALT',        'EB#2#*P]W(G3Xe!c`nN?> L}IICb:p@!HPa]j(df}i_UY]T3X,IQ(`6s3.bzv]|U' );
define( 'SECURE_AUTH_SALT', '+@Zw(zpX<0RRi1QmTH4N |:T!/I7N4uvHwN^[24mot/1pODT$oW%U1Mz+h71Yiv4' );
define( 'LOGGED_IN_SALT',   'N CNhHNbOS}GS_95h>YSly0Cc<EfY*9,2F(C8iWA4$:HL5jT!34,#S|HDM<-@k-f' );
define( 'NONCE_SALT',       '5qV|$sX|53XSBMtBBqHBnJ7)|Ip;VT/Q9YJEJ7Za%XF,v&Im5ZDtpsWLHkXFxZ:D' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'thakur_';

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
