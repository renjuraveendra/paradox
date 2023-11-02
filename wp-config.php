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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'paradox' );

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
define( 'AUTH_KEY',         ' &F,>tPr#WrJW2,-2;rlCny*3dYtzY@uW[:b9Fj5n+wmG^,i5U{wdpJ#SI]Y}4f8' );
define( 'SECURE_AUTH_KEY',  'dV=%Aj-nhosm}m>b3@@UYmn0D[`Le?4@O]@8`bxS%/4$9Q.N@Ax^p[nmTw: o%YD' );
define( 'LOGGED_IN_KEY',    'Ovsqde}bP{!(7A#}%(pv;NIflsU5u{VtLi%f&%_@i4YzXO-y.m<`S;n[8j{mSPev' );
define( 'NONCE_KEY',        '$ lGR0_[,k_k*+j.aS)^ZdA7PmJG:O t=~dWe`Qi/>2N+#TWSG6,^i63x=4k!nw<' );
define( 'AUTH_SALT',        'ctAw5$>g(FjO>QlXKw2Y8QW)s,{dHzav]SS6v%RyJW#AEXi5.w$dKgumjg@E{#LB' );
define( 'SECURE_AUTH_SALT', 'T0~yz~(5tkRWp+-Gla/p]/9l~$k~wLKni^o~3De@p.|bHnOYVfZ,`L+(1RT]RC p' );
define( 'LOGGED_IN_SALT',   '/sU_aj=^&OICK.?OTL_Zvi;82)RkQ~6r1sJ*)P+.7_OJdF/0o4>q+%*,eX_,.1^7' );
define( 'NONCE_SALT',       'ZS J0p]G3=kaCkz~Lm{G$tOc@9X4-fL06O#X#>lNNIJ{wL7a--N0=saaDg%)NE@S' );

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
