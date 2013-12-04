<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'umenon_wp');

/** MySQL database username */
define('DB_USER', 'umenon_wp');

/** MySQL database password */
define('DB_PASSWORD', 'Federation123');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'iyu|i^mW+blF~u3[xzRC`z8psLT<P(` Y>me=h(Jcf/n`HwI|p<chM+-|FsY5Ukw');
define('SECURE_AUTH_KEY',  '4]RM_SS]O2cH)cqd3iV$C3l8[2oc_1J%ahPq1-6Skictwm;N(G~bbX>2^t4-q17]');
define('LOGGED_IN_KEY',    '{>xNi.% Vjml-cT>^?=WA &$@5v+MBpV+`O%$5[6+jZ0xyWnjMg?1aV|*&jM:N`.');
define('NONCE_KEY',        'kC`}9%h|yNF>]S;dX8Lx@ID/!HCpQ]A}6;c7iz6U5>,NQD=-jVhehJnX(A7GT}rE');
define('AUTH_SALT',        'A+|cssf+;t~|vM-Va_9s#hWzCARf{Oo XGWpjICt9%%H3(n0fvW:O6Zc+{-C)^t[');
define('SECURE_AUTH_SALT', '+GRRHld:.}|0N!+5o^?{2hyS[t6xtcLa+NA6cj.8=46=++oPh+X?FaaG><Ef.,H#');
define('LOGGED_IN_SALT',   ')k&zhH^2X|S>JdU_NIXrQllGp9w+Bx.Q]*v|NJ3TiwxnHhTCPgjF@7][dtKW:A4#');
define('NONCE_SALT',       '>H}q6H<jFVruEZd_PPV3xyNdB!ZN|!W=m`[^Ttcfy$fh?vWou3$jX+F8Y+6P1CjB');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
