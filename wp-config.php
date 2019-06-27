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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'guardianDB6kwen' );

/** MySQL database username */
define( 'DB_USER', 'guardianDB6kwen' );

/** MySQL database password */
define( 'DB_PASSWORD', 'mBJSbmv2B' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         'Nw7gz@0Yrz>8JYz>l-w#5KWl-5KWl+x#5Hk1GCOo~[|5Ghsp~[KWXTe*;A6LXy.2;' );
define( 'SECURE_AUTH_KEY',  ',7IXUf^B7Ijy,^{Bcnj.2Tfbm$6IXTf^A6Iyr@}Bcr@}8Jkz|!0Cd^}>7Jjvr^}' );
define( 'LOGGED_IN_KEY',    'dw|0gv^$>7Ykzv^BNcYk,4FB4Vhws~:OZVhw1C9KZ-#_FRs@}[4Jkws@:NZVkw1;D' );
define( 'NONCE_KEY',        's|4GCNd@[|4Ghsop+6HWSe*]A6Hitq*]La-w_1Sdap-5HDSe~]#5HiEAMb$<,3Efr' );
define( 'AUTH_SALT',        '#9OZp]51DSEPLXy<2Abm$y.3Tfbn<LT*;APLam+LXTeu}>7Jjvr^}Ncnkv0FRNY' );
define( 'SECURE_AUTH_SALT', '0FUQgr}7NJUv!0}8Yy<,QbYny3FUQc$>73Fgeuq+6IXTf*<6Ijuq^{Mm+x.DTea' );
define( 'LOGGED_IN_SALT',   'Tm+]6Xieu*ALbXi.{}7Yjgv^BNJYk,0}BNoz73Efrn$>IUjfr{BMIUv^hdo[8KGR' );
define( 'NONCE_SALT',       '<7MXnjugw!@[8Zz!0KZo1Gkr^0Rgr!0}BNo@84JGhtp~]KWSht;9OLWx_~;Oo-[|1' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );
define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
