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
define('DB_NAME', 'demo1');

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
define('AUTH_KEY',         ',@1f>Y4)52@Ps:C(u!eATNZ:U+W842y.GAQnD%+kTndF-Oe[@W<LLaLSnB^YlT,s');
define('SECURE_AUTH_KEY',  'Ougo@$Ok6-_7<8-jgSIkX(a9G-a4|czWaL(?e&sC A_mGe YZz^`z{B/*fP~v=ze');
define('LOGGED_IN_KEY',    '0])6T]DiwV37ByEFLN;]{li>i4ue<vDq%j9<$a;LKrUQYhW[$ulQW;iY5gM|F2s9');
define('NONCE_KEY',        '$<Jx)w7*]{b$BbJ!kmcHN1k?$?8X%x6IR=5p&QTajz`%j,Hrvfb)xlC,#)vsAh8|');
define('AUTH_SALT',        'j5=TL7xR`3#eTLj(<zF$f0NOoTo.Pd-~l}w?&tOJ-x<si[|xD`BJRX)I*duGt }@');
define('SECURE_AUTH_SALT', '?,<i?X?rUv[cEj=dp1!UKaeBwXYMxPF:bcc~s[?f$qfftx9Wu)u{RRq4sq#?Kt~R');
define('LOGGED_IN_SALT',   '}>NaQ{0vY<A*;5.*rpZ(i%!T~mGD`J~!<Mnz<,3rFY|P$F=&}?[b:HzA!HPR:()v');
define('NONCE_SALT',       '*1oX)`6{Xao=6{i)Fx;akfPK;nk+0.OpV e?IsHo3B[NQf1?;GX>l_EXfMj$~J1:');

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
