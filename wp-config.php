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
define('DB_NAME', 'cv-itman');

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
define('AUTH_KEY',         'iUcmDpmA,U<[wzw8,(g%UGY14sF6S5;u[xYXgq,;f|PCVo^.r?>K4WT:DK9dKp[v');
define('SECURE_AUTH_KEY',  '4nEMAouFy.lAJfxLAU{Ce<cU_)Uou.dbsa_`,=>JC+}9jt4+wrg$F!XGUiWGUt#@');
define('LOGGED_IN_KEY',    '# 2qQKKG&(:SwCuMB;uDwj$2=P}:%;uv~U%Zs?:c-rqZb8 tj/}f,AYPkR>!da*(');
define('NONCE_KEY',        'C%y7^(ogC6;SExUX?Syu5RcHjvy<NJ*>~b;|=<>6eBq8M^*WOuoEqN3Apg5^F}M[');
define('AUTH_SALT',        '>{REWE~SF]FZib1Wn7z| &(l15sx[2*Q;AL$qbSP7*sGCre+Go`0oGaH*^sS<|5{');
define('SECURE_AUTH_SALT', '`9f~^k?Ltftk;iCbOPIxtjfv}EC>:[Nz{-QcD0^%Qd[#Me|YZ_sEj)|b$<.KHFNc');
define('LOGGED_IN_SALT',   '.g;DRz E@^nPq!+kGM9M.cPH2^#G#rxh<I^w8sYb{[gw%{NZ}Ve2Kd%7y<FhdeMk');
define('NONCE_SALT',       '}m:@f]|+e;tGyf2_&A<~0]%N3H`2ULB]hgJgGKeW$r R_(0Slqn_5}G;|,oxg5<9');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'safevf_';

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
