<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_act3' );

/** Database username */
define( 'DB_USER', 'wordpress_act3' );

/** Database password */
define( 'DB_PASSWORD', 'Jarekpogi47' );

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
define( 'AUTH_KEY',         'jZ;`R%S6~|LF1udi5*ae#;A/p,uyF1/3,dL20Oa,2U#+1jiWkZb~`o(Hn{nB]p&`' );
define( 'SECURE_AUTH_KEY',  '+SpJ-u=vMp+wuMDr3>~mKU?C54UP!i}@sO@=38:,eJEP#[FXostW=yP7q24JSS3s' );
define( 'LOGGED_IN_KEY',    '|>Fxr-(3)7Av -ZdzoX2ycCtWhzt?7-ZH=-pOuEhlcQafPIQS`<sx$Q;o@.[|,Vc' );
define( 'NONCE_KEY',        '=)<C@(K4|IZB`i1#r<8-.A*M.HkR|NM}P H}S)ujasR3O:;r*%A~#XyJ^suZv(eU' );
define( 'AUTH_SALT',        'IXoXo[WhnY3xt1:l3z$9+ZS_d0B>j%9H@#MH> FvMK1|*mZ/D`$(y:CtR<Pe&Q{K' );
define( 'SECURE_AUTH_SALT', '%Tq<JB-wSX%Z{GMw&.QlA<9{vj)ej^E4(&:#3@/XX<wac?05nE)p;a@`{S!iLK.O' );
define( 'LOGGED_IN_SALT',   'M370,rI>`E(, TtPyMlTns- J6ytKEu&FA~9@)y;)]Vff-vg[@l:S)IL::&>v}BH' );
define( 'NONCE_SALT',       'YsX_Zg3#cN:3bPJJIkG@5WY7JR olHLH#hy@|>=&f)z$`~W;y{38q$TOI?=|x_QL' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
