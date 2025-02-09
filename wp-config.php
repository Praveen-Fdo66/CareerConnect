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
define( 'DB_NAME', 'careerconnect' );

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
define( 'AUTH_KEY',         '|i3u:7tMVG%V?-^Vd%%aeA+?]et#A)&K>>N+|{@vpJ46oYzBi}dd{s|#.5X&oIo_' );
define( 'SECURE_AUTH_KEY',  'q;$004[C/?TeWwtmgV59B@-325OdX&{v,Xd9*wCQ3:eu*%_js-xv=}:0JD|dALG8' );
define( 'LOGGED_IN_KEY',    'Y=wwB)H-}9%xzT8MZZ|9WiH<dRW8]lxSXW<t{s({<A%M=+(IC6tw-)H8Y95/k)6x' );
define( 'NONCE_KEY',        '4XUSAXBI`r.Ps_VpO|W.;Y-QH8BcF~o0J*y4NnT%aWFykSh!kkX*RYCwl4,6MoJ)' );
define( 'AUTH_SALT',        '%+Gu_]O;@Ldkzywl iqd/jh?ayh{Pu52%Ri3)r_15<E(bF`3Mo:[4.5V<DjOc}wW' );
define( 'SECURE_AUTH_SALT', '4/=anm_Sey)[Kn8xj;[!#@?3N<PxyI]{$&+%SKOP[;)ePw<pCT}X9QNo%4u0,j1X' );
define( 'LOGGED_IN_SALT',   'p!bwi/Ue6+#ijfGlS?cRS<0-Q6.N=Ay?E#SPRJ0*s*#kg*+8k/-(_k;[h]-yC}}G' );
define( 'NONCE_SALT',       '[|Bd}*esh7L5CB4(S3Kh0i.3/1q$L<#u&Q0?qrBi7*>CwZAsyO1&PHL)vPVXB_^J' );

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
