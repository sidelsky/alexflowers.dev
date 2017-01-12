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
define('DB_NAME', 'cl17-a-wordp-ye1');

/** MySQL database username */
define('DB_USER', 'cl17-a-wordp-ye1');

/** MySQL database password */
define('DB_PASSWORD', 'EMnWdhm/.');

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
define('AUTH_KEY',         'msY^e/wBsdZmc+bSUCkHmwsx#2N1MeLmcmVn_THaM#oA5H+2AZmsIvi/ZOEosWy7');
define('SECURE_AUTH_KEY',  'q/6xI1BAnH)DMAjwETX7dr)J9FZObYr_2YGk/3!ruLhQGN8AWLrOV7rGg)Kl/LJB');
define('LOGGED_IN_KEY',    '071^7dfY_+AX6cpEfpim1)2c0y#EqPNfrKymBg76cpbEX^I0nBamZ87iD!PdG78n');
define('NONCE_KEY',        'fN1Av)/w5v1LGk23Ur1hV3^MZhI69zabX9/QqZ0M!TrIECJlu#JX59l979cSx(l)');
define('AUTH_SALT',        '(Vjl0KswMYB!yvgGlNoGCOyC8)NmPXQscs+XWp)cLqgR!4BJg9zQzTQWwdN29_Im');
define('SECURE_AUTH_SALT', 'MJ2P31915I9ybso2y6(jpswcxx^0KcnRhX(pVBNF3(cjID#cXY9wdbH_0E=n/_y=');
define('LOGGED_IN_SALT',   'KJ^Ijvyxm(Uxca1vP_RAO(Otj_Uu/VQaX+_f8x4zTcdz#BT815mGiili!XFS54tQ');
define('NONCE_SALT',       'O3qfo60T5rh=2#CH+4rcd/k+99kJ0)MFnHJw45HlwRnwA^sott#z8WDulH)chVL3');

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
 * de.mo to wp-content/languages and set WPLANG to 'de' to enable German
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

/**
 *  Change this to true to run multiple blogs on this installation.
 *  Then login as admin and go to Tools -> Network
 */
define('WP_ALLOW_MULTISITE', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

/* Destination directory for file streaming */
define('WP_TEMP_DIR', ABSPATH . 'wp-content/');

