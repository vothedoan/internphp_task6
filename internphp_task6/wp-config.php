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
define('DB_NAME', 'internphp_task6');

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
define('AUTH_KEY',         'D3mMysV$%El{YitwV(tYa2NLfaJ+`?8/86^GKY1F2 /$E2f]X|RqoqbhWR_rO`S&');
define('SECURE_AUTH_KEY',  'HcznT{a-P{AKU7t_]w5{JlG,<cz0}Kd.n.,Ro<%QsK.7Zopz!q-&[5u_8W,eO?;s');
define('LOGGED_IN_KEY',    '0J^r%wDk+8nh;~%YHiXrC_s1rvDFgCZCK3nJ*_t;cXH4tJ>?]z}zgWy&_F9==EI;');
define('NONCE_KEY',        'P&tKhC5Dtr.ISidcrDu?eE8z=]ef}^Sityp=01k{F`yC*.y;SNd=*ZhVy|Z>T%J=');
define('AUTH_SALT',        'oIw{&-1_IwaDnzk~z.bKOsaKu#F/~1@+{]3U82%0_.,}#~,sfjYrh3Gnom:EFCT*');
define('SECURE_AUTH_SALT', '&ZF@2a|8y+E$EH&s]KStvVCTX,p!,No2$i#uUwo_UG] qMTmvpWLkxM;FQ=g5b?Z');
define('LOGGED_IN_SALT',   '~[y.q]EU9.Q7]Gzs9.@DcNQ)~3.=t(^z7.bh9^/oRzmmn=L=sY_kl;YT Re1OyWV');
define('NONCE_SALT',       'B!}g}z.MH%m`EJc!g]@MuxM~J2h4OcX|:!Vo}R=TNKQ->9DUTe*{)n7vX:H*:=vQ');

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
