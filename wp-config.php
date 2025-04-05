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
define( 'DB_NAME', 'bd_asdrubal' );

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
define( 'AUTH_KEY',         'OE~+vluhO>&4jrsJq>g>tsvGQ3oD[htsWdQ0/*y]c`YQm)DY.P17]|K>Wy:M*>rq' );
define( 'SECURE_AUTH_KEY',  'd6W&*Rt+Fe%4C.$k{R#Xeg:Z>CUm&dU~WxYk8+r_CW)nIh.$m@#H$CZ,mSVQH(u]' );
define( 'LOGGED_IN_KEY',    '!nXG5bW%aqyu8k*qn:z~3k(B[m>F?7pjs@Dt]j16vb?XFwP6S^;Z bmtpHGdRl+3' );
define( 'NONCE_KEY',        '.TZu+G6m%ACuf#kt!W$uJ.he?Fc5%ex80]|J&,_|A<(t}qt7y^.C+o`^}vgWyoMn' );
define( 'AUTH_SALT',        'rzdx@?sBTrOVI-n-SsCau!Zm0S6I-zuF:,/*#@6(_&KQ]&V,+,]L|S>O/4.Jkw `' );
define( 'SECURE_AUTH_SALT', 'nk[ONuoIX|,u]{2YLH4*F7dvNf;G,&D^tAM#,h7s ]?vF^@Z#~w6cZ9]9FO!_.MO' );
define( 'LOGGED_IN_SALT',   '#tNIzp`KmeOs{S6h>)kqv(eNbF1(UY%-g@]biSs`<8#),(,XFd_2=}}<vHph<Qsx' );
define( 'NONCE_SALT',       '8k0{|y?bm0,UCZ{<2062(jlwRkdy)F~m<(5lnCqcMs=doo7+~QJTx.|_#;xm!oJ/' );

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
