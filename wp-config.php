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
define( 'DB_USER', 'wordpressuser' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

/** MySQL hostname */
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
define('AUTH_KEY',         '1k%3F]8y+G1,Dg:y*.=~S4@&]nOdb9Hg#f:otS*0{&YF]5Vu89@~|U~J6`e9t@QW');
define('SECURE_AUTH_KEY',  'BJ`1+vKv&!>6>llt;34m9Jj`d/K.kH;|]V%LR 3!k=,{n-zJY>xbwG 3d9P#AUEE');
define('LOGGED_IN_KEY',    '{A>BcguzjV/KyO&vZRy6v@q]vLH3mrj:er|H(|n9rm#}*BEB)#[+7_wTR1#$q1gU');
define('NONCE_KEY',        'm$y5}ao#v3iAy|-#gck9XB-o3N1f ))<!PwJPnIWbBi5-f.o_r.-`Vo+=!<~4+iu');
define('AUTH_SALT',        '3,:^zfz95[)AEXZk&6-*4RgtTx!mU?[0no56WvSM?.>^wYX/X~P5i`l^AMO:+4.e');
define('SECURE_AUTH_SALT', '=Cz^P/KO+o(ynSz|tg~c2k6@=_G^2@$2giO0v|g[n*M_[-x%$B/@XF!J+.H5LFB4');
define('LOGGED_IN_SALT',   'RE`-JIT{FDr|J=2XR*J%||/&tC62$S!e`p~9~z``h2Xy6imRw:U<J(au#Cm}9P+j');
define('NONCE_SALT',       'J$~+p59>G^dP!5vR*&9cmirP&:2Z9A6m-?K=I!5g;oD3usb+#XA+/l/~ a4w8 6W');

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
