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
require_once ABSPATH . 'wp-config-db.php';

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'R[Qrc-?To@L#s0.S?`B7YXrgOMy`PR!202~&H/igPX;Ws59QJ6DP_aBhkaX/_;?.' );
define( 'SECURE_AUTH_KEY',   '2ZhX{Uoy2wz-~5TC8K$0:P0#[vyp=H~4.?}Mt%P/<Hh;M::vbJ-$+i!&E77Q(<CM' );
define( 'LOGGED_IN_KEY',     'ye24B.pgf2(/Av[H51q5#/7 7nC /kkFmgI<KcDTnQVOJn ][GvSpzfi0Nzor0b>' );
define( 'NONCE_KEY',         'UROe_v4+6Z7UB|3$fFY}*Lq+#NLn{gDZQ6ZiJS*D4$v7N5.Ydc,0Q+9BvR7^XsLz' );
define( 'AUTH_SALT',         'o&*m36Xc+jt%l=<y:BB$1On,Frm+o%N~B%,(NE!|x@|EaAjY5S~6*|d(K+_}tn]K' );
define( 'SECURE_AUTH_SALT',  'W2&yEHx^RF_&,yeCk*~^tBy|y&7.]`%J;vi,QwqM*wYj7~O^oI.PZ1^|mWw:eSeH' );
define( 'LOGGED_IN_SALT',    'Pt$`S+F)l&Suv6vyijphh4ghiE3W8VuEheENmyobYW$7k%}BqlF(_FQIgWlBBRj^' );
define( 'NONCE_SALT',        'N!GFlub6JS/qHMt``75/;Vm[9<r>aaMQzfgf/_/W$Werif jFh{m6]oMlqgf6dw>' );
define( 'WP_CACHE_KEY_SALT', '<*Su +}|.Q.xicX$f5%j4gX>wB;H|A3I%5E M@K=t:6*?4^q9raQ&q0n:YJ+;$Il' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'cad_';

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */

define( 'WP_POST_REVISIONS', 3 );
define( 'WP_ENVIRONMENT_TYPE', 'development' );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';