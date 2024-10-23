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
define( 'DB_NAME', 'coffee' );

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
define( 'AUTH_KEY',         '??$H^f%kaQ/@j}qIaeqtbphL e5v2@R`%oEW>SC%&5D/86494zBa81A]}iT/jvL5' );
define( 'SECURE_AUTH_KEY',  'SAks2M0C4aO)S#R>k:2(lE/mExpRnP&uZ)j<ZO%Nv#cQyb[Bo*qA]VN}MdAYv%9p' );
define( 'LOGGED_IN_KEY',    '+0<JrN]k]oIMp`r#^,HY`UZGzL,,Pc5ywaczl+uM*@_iC>Hsvmv$S6OvS}@rvY^U' );
define( 'NONCE_KEY',        '4aZQJ1UjoIemoyIhorhH(@J&ZAj~YEK*<(R!HAY88Bk%;<]~GCoWq`oI5<6z.}GF' );
define( 'AUTH_SALT',        'pEZGdQ,yL-D[<gzjAKHy-=p?8nU<^R:Tjg>/Q@B`6T>-~)Law@i:O.ZY8-CJ7wWO' );
define( 'SECURE_AUTH_SALT', '[TWq+@3]Y kw.AX]I$F8qtQe]p&fbft ?AV)c-a>sf=b4O8qCXIs0%gt ,PuTwzE' );
define( 'LOGGED_IN_SALT',   'Og8@amCu#A|fONFa=l.$~089$kpM*Xse}/CteMY~rT;f=qA awc2^YZv^E?mq?N~' );
define( 'NONCE_SALT',       'KaFA1C*IU(/PH++;ydB~{PFLcOfPY7&1h`@4yMJK<1cd5^J.vr`Jh,-Y.Jt)(T(D' );

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
