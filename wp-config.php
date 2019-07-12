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
define('DB_NAME', 'wp');

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
define('AUTH_KEY',         '<=>OgOPuHT<2-Y>{0,JY:4H![Kih*.Qe`(yS{<9KU}u_vFyCC4X#<>G[&@6zI6*I');
define('SECURE_AUTH_KEY',  'vTEMexPU$|X0}Ua8%7AYbj3FE6{+1@7I=f4/Bz6]4#Ovh+e7>Oxz_8Y!zqt:4HY[');
define('LOGGED_IN_KEY',    'dyZ4XQ)U,7swCn{fsw]q9he/k07<&[zST,D+*-;DT:`wN+>m++c`hf AZ na7c]M');
define('NONCE_KEY',        '|4J)hqrm)-ftHX0fe%J_<1hzDn=[Z$l#v_.q=>!/^utZAq*kfr@0b.ZxyeM~=XFK');
define('AUTH_SALT',        '6)qT@3Qb8C{hB:{|A>6#I8 i.drZGK1YLWhf?Aa)P5!^&N}ZL:!@93h+Qm8=[Z~c');
define('SECURE_AUTH_SALT', ': GoZt(,:W2WM1YgWWhk]yOl@N6b6bgBrLZ&6i(qZ;,t<F12fxC! VqLzvyu:mAT');
define('LOGGED_IN_SALT',   'KVik8wlE!Rl5!db5v9a8F16XbuvCUX %YfoF@Sps,4ewC-^j:<2Hztmb1(PdCC$w');
define('NONCE_SALT',       'Jvpit?&<:x;K^@s?o,o{46G;uH+`uvPHQUG/(,`;_qs8N.SKp6PBuF;>Yq.6!)fG');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpbookala_';

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
