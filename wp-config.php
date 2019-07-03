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
define('DB_NAME', 'admin_bluehostcode2014');

/** MySQL database username */
define('DB_USER', 'admin');

/** MySQL database password */
define('DB_PASSWORD', '1234');

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
define('AUTH_KEY',         'oqYLeRfw+xd|V.s18-7r@KA@8>ECj.<A]vd f$rLmdl@ 7 zo0PUOyGzFK(^:R/_');
define('SECURE_AUTH_KEY',  'F1:3-OoqY*lT-(m>j1L,2RheMilUTBtjVl}PdxW_vaStA;57wQj(]S2]SK0#f02 ');
define('LOGGED_IN_KEY',    'IQ,Mbo/3,aRcCEZ] 6{sH)*yWLmxD$^5=0LP!6Ht&-@@SvRAg6:fWkO.hE~p<d=I');
define('NONCE_KEY',        '}~<#(+V_S-xMNEPk[lJVhkgk8E{_BF=1}aeWe|<X`#n-qZVfd`t6|FWlF$sc08[;');
define('AUTH_SALT',        'V+y*Lw>2q:|_KbL!=g:Yr1,Bu0#DafAfCg*|HAD#8Li`k}j5{(%z=]Reqtj&B_qb');
define('SECURE_AUTH_SALT', ' STL.3wz 2<? 7d,r]n@mw|6w}qQyvx.xs{0uERlt`BhrG/[Innekq;jp,`_>!FA');
define('LOGGED_IN_SALT',   '<SkP;?L!xG#i[0wSCY]=ud#8v8chc<FW!wd>I>p)U)bhCU(DMMM|u1I3.wIwumZ^');
define('NONCE_SALT',       ';}r+2RI- q/wHNeNp%^ U_&t5U{/poG?/1=qq=nqyk9?niH3n*QH)xQlEcf*s?<s');

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
