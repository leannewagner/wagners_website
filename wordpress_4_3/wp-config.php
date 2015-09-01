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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'yZM`5!>M(0Gz.0: rj(O[f7R>|9pS>48/umi=V(Qzb^xl!@X6Flcr&C|=EC0a>N>');
define('SECURE_AUTH_KEY',  '|p(ta|l.o8*G=ZmRU?VR2-w4b+CGdD?fBljqm@^7xJ(IekcDSo<5(PkeF2zrGeH$');
define('LOGGED_IN_KEY',    '5JRP6z-LQ&89T{&]k}+40RT2f; H}eASJ]s?i)Hx`G.D5PpUDX[ol/&6#b lrUD&');
define('NONCE_KEY',        '70{xV+u:7[*_R}tpS?=H,?nLOBK9{5ZP|8+mD-fV<X&+/^/oS[wN-d&fy7.4)`MR');
define('AUTH_SALT',        'W16O67[OTm#X.!^W],@zsAu}(}g+e#J1Y/&bIZ3?a0|+rXKYXH2j4m&P%YHIQrop');
define('SECURE_AUTH_SALT', '89-h#~UJCA+<{RJZH-Ss6P{~4,/{_@y>+wNO>!Ah/eBKK_9h~NX<3kP./_p,iU[h');
define('LOGGED_IN_SALT',   '#,A+h^.ot0SQF2v:yN$-UE9CR&7(=jNR&}FQch2c|qD+4J;3p&A<L7ddN Ck8j`z');
define('NONCE_SALT',       'a<lum5ct/m$8`zEbCNnH#;d_5{~Sd14+9xf[qIdZ`4k0qt=!YTnuQ4]|Nc(:.oaU');

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
