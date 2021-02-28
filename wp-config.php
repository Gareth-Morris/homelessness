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
define( 'DB_NAME', 'homelessness' );

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
define( 'AUTH_KEY',         'as8H*,c}&z&|0ZyN-XFu_.79g}xlxDMf*By}TJ!)_br]{;Fxt$<sNBI4TSt<&U;)' );
define( 'SECURE_AUTH_KEY',  'u9;RFT{/>mLlG&jl_1fKLESHlGZIt0@d@GoL%Q6WLo_(kd/?HFf.aej..AOex{5D' );
define( 'LOGGED_IN_KEY',    '87R*A+2!bJy/Ft/sxcf_QI986sas+OWO$kp$=XNZsQG6x$X]F;/l{JmqK]vg,jM9' );
define( 'NONCE_KEY',        '5{}Mk9^*Me[~eH2aQIx<2xXfDZg[l-C{[6rT&8N2avJ2`j2/8:K@M0!TYO,f#Bv}' );
define( 'AUTH_SALT',        '0Hsr9Nx4x/#d`%?HgN#_90&ekveuC-Vkeo!#6(*?n@%;e{uzkK=ntrYCPKED}pz ' );
define( 'SECURE_AUTH_SALT', 'gf<Sp4&$.Va0R+-)IEcF6e!Czy&[G,FY/ZUpP6ABkwpSky(p>WqXR]YeT*$:|ou|' );
define( 'LOGGED_IN_SALT',   'L]cnN`$>G2tpl-FYeI<!9^R>Oj: 14h8=o2JBg[{=bx.Jp]H)p4H<`ewP@9J(Z8C' );
define( 'NONCE_SALT',       '{c+4w,$#WuVd[k/>(np0QCnk4%Z~3$AAo)DRa.VJ&d;W0(QD&}yXtx#I4|Zp9STe' );

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
