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
define('DB_NAME', 'wordpressdb');

/** MySQL database username */
define('DB_USER', 'wpuser');

/** MySQL database password */
define('DB_PASSWORD', 'Password1');

/** MySQL hostname */
define('DB_HOST', 'database.sysopsdatabase.com');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'S{E|B!8H[`hK^1jvcJl+yS[)jih(aH7z1Z`:z~Os-18CWiU]w8o$g@O`.%O[tr.r');
define('SECURE_AUTH_KEY',  'W-BjP^6B&/-r=y$BB<.s5so+SCRm;6[?!>n}H<8$uhI9WH7-Hbw>?2VprM{8F0uM');
define('LOGGED_IN_KEY',    'F&>G4M|`Od{xN|7M.Qx^G0eAvx!Py-C>bX@[Ck@A1#7MwdEM~$]+DtYTzW-xyBo>');
define('NONCE_KEY',        'o|A#{0>z@aC6<mHkYk5P)whB+]/v[7oJ&h1tYw81S+%k+=XIE]z@{#[Oi}h1X[VL');
define('AUTH_SALT',        '&}HW<yk48Mp-FUX+5Lq1m-Ya%Y?.Ee%~H9.&$q^++RBl4o*NQ?_DR}J%?( U)[b.');
define('SECURE_AUTH_SALT', '-~N.Fh}reQl!;^4-i8Kq|4AQM#K!m;Aypm)6:-=`ZOQHtf:4&;r:i^#=Pka&.68|');
define('LOGGED_IN_SALT',   'My;R3w[vrdaz))F>>wh!1R*ct@:-QW<kX,Tf,4/j6$+(4vdI93M;-f_R7I4dZcQ6');
define('NONCE_SALT',       'x<l%^!D|f)hh0kvFCb&%.FkZL^+]_|Bq}Eg7eDws2ZgdC-^%|, G|Os3kj*^9oOZ');

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

define('FS_METHOD','direct');
