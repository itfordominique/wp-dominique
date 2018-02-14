<?php define('WP_MEMORY_LIMIT', '1024M');
@ini_set("memory_limit",'1024M');
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
define('DB_NAME', $_ENV["DATABASE_NAME"]);

/** MySQL database username */
define('DB_USER', $_ENV["DATABASE_USER"]);

/** MySQL database password */
define('DB_PASSWORD', $_ENV["DATABASE_PASSWORD"]);

/** MySQL hostname */
define('DB_HOST', $_ENV["DATABASE_HOST"]);

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
define('AUTH_KEY',         ')!!wy?I0_^d]NGE,e$alJd.-w;*1~+QqlW0e~^UWJ*ThiLLgMCs:LMd[$~5k~}!B');
define('SECURE_AUTH_KEY',  'Wg+zZPzt#R*he-~77P#P4uA*2v+EiLZ08|6O`9$#Yrs<Sy$j..4P4Mj7;XKR&+xX');
define('LOGGED_IN_KEY',    '1^HKxcr%;./t)aK7/x&Lb/84>kCLe.XG1^aBJ(goK@Z#o6]M|:55W7b 9+SBMAu|');
define('NONCE_KEY',        'w/?T.-:L`)._lp;kX(7+%xNyB>W}odE5IPxc)t&{]y]TL@x) 9jH~}m]j6vW9&6U');
define('AUTH_SALT',        'vEa)fY.Z_$nnnhf|O$s!VxrBAPja`E:CKHa|>uf+M-g;rQS_732U@5?w{;I__MR ');
define('SECURE_AUTH_SALT', 'Iyy*<0W*e_R|t9OGpfRxk`#AKiT7-*]~c?1yi:kkq<;|_#VNCnXyn|p6`JOoHOLq');
define('LOGGED_IN_SALT',   '/`4_7i/n{h?i|NTa.pUI _0dt+~lIvJ<oSL;NgACHnK|WZ|R!w.^`C8dq4(;>n[X');
define('NONCE_SALT',       '~xAb;ajQ|Fftz]Xm,_?*kmJhOl4m}xNVO_N0C?*JKJ#f[`[zW+MV+`&)cMB*Kw>}');

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
define('FS_METHOD', 'direct');

//set HTTPS flag
if($_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https') {
        $_SERVER['HTTPS'] = 'on';
}

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
