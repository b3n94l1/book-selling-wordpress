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
define('DB_NAME', 'ebook_main');

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
define('AUTH_KEY',         'hC9oMS1rjtalSmJL%/}beu1qpd5x]G1.$$dC [37cnZSaQdwa47N[^uWLl6FTt&;');
define('SECURE_AUTH_KEY',  '|W)%cZM&;3_(A4eD<AfiLTF, ;zsItES]BTu,nL3[fKWt>{jGhx^c8^T+c{U=:f9');
define('LOGGED_IN_KEY',    'AiEuh+1K<#Rb6!||nxPEH#&o8mjIK#&M`?q3KMX+`pYbDGb%#N>b>C0ERc:AqlnS');
define('NONCE_KEY',        'VIoO~0Cs:C/A}8@C!rILD{Io>T,AB$8#9SYFz^z.W K7M+nFe({%4ZzlRFEDM(IJ');
define('AUTH_SALT',        'JliJ>JF82TLAyMW=gCmB_eI|xlXdqQGLa]%zIlgijZ{$7z#pa?Y:kP_MyY}Vh8*5');
define('SECURE_AUTH_SALT', 'f#J)iVtXyf]1s6i#LvF;;Wrf(Rmd:(4<yjw}hi]dMk8}94!z?m~}93t2Wt+hYa]o');
define('LOGGED_IN_SALT',   'PlgzHZm8:e2O|]{OD/?jem&36Zq;<Pp[nw$11zl,SW^Ix2:kc[U),Pti`%+vMCV:');
define('NONCE_SALT',       '}u1of/t2K[p}Rd$O~8t_ tV@ )7[i+xDP9_5d0#A:&`5yJPR`yl4*3;*5s)]^;*#');

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

define('WP_MEMORY_LIMIT', '25M');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
