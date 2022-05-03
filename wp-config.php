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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'projet_ong' );

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
define( 'AUTH_KEY',         'knMMH#_LT-UQ.#EU|azEPRw>xyT|O3z%T!g?Cg8I|6$#T@U]-N(U@CQFo7@=z.kl' );
define( 'SECURE_AUTH_KEY',  'y_v[HC(/-%UT]ScD:<ngqN0zgcpe_Vo?]&X`}JlRg,v_wMj$!1i[<:FkVWWs~ aS' );
define( 'LOGGED_IN_KEY',    '(xQ#3Lcmrp(9OPU-oOK.bBDANry!T<A 3-8ABMv.VK=U9aH? ZW3c kls<$b*>)t' );
define( 'NONCE_KEY',        'GARG+Lo3?}=m7=@4]DVso;??i$[x]rC!0kzE|!wshm!ouiG+^N&ef.`+nzf365 #' );
define( 'AUTH_SALT',        '9:tKRK~Y{]|a8o=++I-e)Iv>.Tma7bfrV9p$aAxU}*9L!w:WC]e VIVD`BrD>@I;' );
define( 'SECURE_AUTH_SALT', '4ST7@Nd.v}Zi&NAa+h:3f;CUsQSh{diZ/xRe&:TQ1A|##1kgz^5QjYD@H,Zz:$Qn' );
define( 'LOGGED_IN_SALT',   'K-k6s|P$q2d!}e3IsKRfYFF__r$#;Z%t[4,Nn>yS!:}gG[T_)tuBKGg7C;B~1Be`' );
define( 'NONCE_SALT',       '!iJ/8 }zzE Trat8rQ7WaS_@Inm5Py=1^YfIIF% DEQz];xow+ceE]PAsCE{^?O:' );

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
