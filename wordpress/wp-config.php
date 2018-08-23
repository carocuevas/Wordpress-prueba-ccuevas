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
define('DB_NAME', 'carocuevas');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '-q/YJFZK]C>Se@JM8%z.?u^~O6];B(0eRA^<C:{UYfd*s`&_8$Z6Q{hwg`k23Q+&');
define('SECURE_AUTH_KEY',  'yYWUbh~9w6?,;y)qB]aS<2K6q#6au+1^Rx}!#TT/hXn*s7<Aqnl/d*,PA:%39@wu');
define('LOGGED_IN_KEY',    'y)`a:7/P_Upk]z]tK5bV-9T+T!BO{uuS`?u`TEh$01R{A4H$QKqCRAB%Q3{Ui_;a');
define('NONCE_KEY',        '65DP98>{#Kvvfc;w0#|ltnAdN5DTziDtrCG_Aw^R63,5cnc!%PPdi,)oZ/.kWxQq');
define('AUTH_SALT',        'MN3wj9UHyv2q*_vhIR^%rfpKFhM{N5]6BlfA.{k5**kaV[)%.s2m>9A36MTV3<@G');
define('SECURE_AUTH_SALT', '+*I_ikkJen!(qCe=UiA,z}Ls$Y+_;Px1OfIPdiVA31.3O_do+o}BMbK_m|lC{ >H');
define('LOGGED_IN_SALT',   '*(`Az+7:I^]j 9Y`=EoEu5wAr&MYXa%;lX5.V_A2lDK%9{1,bQ]<q`-tT;TN>=bo');
define('NONCE_SALT',       'tsS9z|[M./iwYx-uV]ft*7aKbx*R6)-Eyx$t`D8QQ1+AT `%0rGS hEGA;;ya1SH');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
