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
define( 'DB_NAME', 'wpsite' );

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
define( 'AUTH_KEY',         '8bGMwB#E]ftUISVcDh!L~|C,1 V]r*` doll&9CH~DF&0^V#~sd{t$ugKKXpIXB~' );
define( 'SECURE_AUTH_KEY',  'fk2*|yI1s%di$Gb=*Gc9E cS##Q~Xg|>zXwZIgFImnaWm.w(;u%S4P[ie+sf3h5^' );
define( 'LOGGED_IN_KEY',    'kpwvcJW3WB^Y_)gn~v]9}P1me:J3C :weeQi]??fSt*A*5dadmI?DRF(6C?di:Y`' );
define( 'NONCE_KEY',        'Q{9FJ4)u:Q`0h4cfT>$_f;g,(k%3F)yxYTGUp6yD(mZ`~e:~|lh[X_HW_;V0)}+|' );
define( 'AUTH_SALT',        'JrM5Q5 g@_h3pnKo>3R6q%vLbX9BaZDkNsh&{m)Nl/ZT0R|*Bt]J3jKKWp/Nk0[s' );
define( 'SECURE_AUTH_SALT', ':-$GwsG1s!Bl~lb^4m}s}BLMcE}JVl)NZ(J{1!)Px@}<,ydP*8ss{4@(S,{~2o;o' );
define( 'LOGGED_IN_SALT',   '[54p&+zjz-80iO)y_7ux5<&X8gX?a743[B@s2u#E[:1tO?tBhkZxsVh[Ic3>_!f(' );
define( 'NONCE_SALT',       'hY2:UHc|9KgYm8[46bm8=P|=VO*zVGGVM8xQg*5$VU)c?Thp0Z2_|XlHGlES6G0f' );

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
