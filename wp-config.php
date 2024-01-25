<?php
define( 'WP_CACHE', false ); // By Speed Optimizer by SiteGround

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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'Eloheeka?123' );

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
define( 'AUTH_KEY',         ' 8GGl7V[0+YrFz-EWAv5,pHuEFWEOFGu&/zq0/v.87yL&f<TQ(&m_|2<5G$f*b7#' );
define( 'SECURE_AUTH_KEY',  'baD2yUEqHgX,#B&#c8%gI~Y9k@Qb~$&S*P`olbwL4E5W8}rc2b9<=wkIM^vyiGS:' );
define( 'LOGGED_IN_KEY',    'gy@N:VTv2`;d;rg(;|FB-PPl5;v5GxJp6^F8l7uU/EZq]ofTh~|;dF/k|<!{IM<_' );
define( 'NONCE_KEY',        'aRozpaijGf_^otAXnqh?~gZlF@TUn-&If?RZE;xj_Aw^%K5b,d768LJ$Q;aO*1/`' );
define( 'AUTH_SALT',        ']$hps}6F`f[f5LcE;fs8q{Z*rLFmusJ:FWs.*!P:szCILM.Jj.p6hCO|:{TA7Xq_' );
define( 'SECURE_AUTH_SALT', 'b82$MoI:~QczY*{P8{)pj;N*UQaLNb_}0#s=tzeV.tZ!h^i!ZqhYu&Z+!-f&uYjA' );
define( 'LOGGED_IN_SALT',   '0-G&Z0B!-UEV43.)7+d&oxHshD&/{dJ}NA9rFRSb,S@WrS/*mH?Vpe4mTZ,U`ZR;' );
define( 'NONCE_SALT',       'n*_oc,5*QC#n,WdIpqWq0m?K<}F;zZ.AHPR56-afV6m_}=79swOl17: XtT:#zy{' );

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
