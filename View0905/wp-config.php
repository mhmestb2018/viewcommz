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
define('DB_NAME', 'vcwebdb');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'qbzjawm0905!!');

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
define('AUTH_KEY',         'R:`p`FH=s/a?;(o<E;H#oZABF!`=nDWwUB~^C[P4SE%.#@5EK@~z_n`]E5g7}TFm');
define('SECURE_AUTH_KEY',  '@=ushCVK7=HPk@t>>pw|k# za`zh&<EK1HS+?tpN)>$8*)/_xsK!wci/)-/e3 V,');
define('LOGGED_IN_KEY',    'C~{/?|]sS!%9)NdQ`wWHMfd$$dsisf)Y1*qmT3aAP~L]tX[5+&Sx5F`ro}[#VPJ4');
define('NONCE_KEY',        'jHak.`8l+yBCX~06j$pRKi/t]Y5n^B5}P^FF4l~@@&V0r-1uefg!OpoI]k:zN[R(');
define('AUTH_SALT',        '>>q)E!+Emg?iHZmnToBoKEY3k0eu4QMMYSjyGo.#SY;yPmfq(D+#mvv_DJ~OoohJ');
define('SECURE_AUTH_SALT', 'gx]8 KVC)NVc;5!qB>PJ^?$<270%Nz<3._PdMk^}.)0l9v0M|(8{^=} nKfkT$f/');
define('LOGGED_IN_SALT',   'V`q]RF,8@!tsqhTM4I$a+B03u][8pmWn8^B{9xrlx2sDU]Uh92NOWVPfqqr%B4U8');
define('NONCE_SALT',       '6>jB50&E3[p!B:,eBvbX_~fLs)oE45g/<GuOu ]TWUFx$A<m<_IaUiE-Mu&tcH8^');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'vc_';

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
