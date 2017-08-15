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
define('DB_NAME', 'classroom');

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
define('AUTH_KEY',         '=`(N1pObNi/n.0+3>F* z^WO}G$=?]kN;&+`.%XI}Ujqr^7D50%$D+AzCFZxLS y');
define('SECURE_AUTH_KEY',  'nv^y18S@I#e6bMA5N`/!~bvH>z5b>m=LWp%{C|htr6O2mCO?0qC=$^R(%7j./`X=');
define('LOGGED_IN_KEY',    '<fb[NvskPTa5{E,M_hX{4+w@7 NFhqZ|5 :}$oc=M=o`$b82E7 $:$Fixl[g0y;q');
define('NONCE_KEY',        '3>#Hs}IL81|[G+sC_.]ZXAl/DBuf:Zd]:tk;JQ}_HU$-4NSvvWqAUGw*Tnb=e>>V');
define('AUTH_SALT',        '>4T]4h&jhnD}uSc}]rR~Bq~Xly+W[s(ilQBw_akay;9Nxu!m|lHZZi73G>PUt9uR');
define('SECURE_AUTH_SALT', '*oTY^x8<* !CC(Q{E`B*,Mg^{&w,cf6_TG#Z1r+c01qd?7Za(TEXgK.;xIfzB(%k');
define('LOGGED_IN_SALT',   '7:A^Yi8;x<Q.B[QEd/L|IxXTVRq,F;o.SxOq0JSoAIW9$b>P`=khJm}=ja!?TDNX');
define('NONCE_SALT',       '+4(8,KqgwilS-3i?FgamWc/5V&z@89B3 90[@491jP %O{6cELEa-X`x#6C-f3,U');

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
