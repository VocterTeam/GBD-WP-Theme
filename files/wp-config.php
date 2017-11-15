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
define('DB_NAME', '');

/** MySQL database username */
define('DB_USER', '');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', '');

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
define('AUTH_KEY',         'XMWCDOS[}Pe|EE-3+IHuqEXQ06hR~L@jV,ZRVUgvO:`z6l5/w?63l&$;fRJLoAGX');
define('SECURE_AUTH_KEY',  ' _=w*%G3w7{S!qs{TW~!(b} 4[zKln)60$0Oh(*XL/gS HBx7?e;OW<4Sd3JS.M~');
define('LOGGED_IN_KEY',    '6A9CV/eFGHT$&`,XF#}<W%-5vjH,^ch=N<r-jWnn@V$ !?U1qHd[QZf_YlEIbD-!');
define('NONCE_KEY',        'OS=`9ORx#!)uQ7+%M_|f$uFh{BpM]Z?5OI:%HzPtkA[`23x$DKL)}O;@4(&:07iu');
define('AUTH_SALT',        'j>P1=Wi9-C-qj%!h-|Qt=$67F|z+AFNQ|_4=}/*GW$6pB9@Q3qhNg]S<~53nxL~a');
define('SECURE_AUTH_SALT', 'H>vgUSvsqMjVQetGNBxXi{u+e<|&>QE=p9%q~u/FhNki&xV}3MM+MM(<2NnhOi5!');
define('LOGGED_IN_SALT',   'MkXqOK+pL7n)4Da/(R~>:zgNs%)c% PL8qRn][57(ODwk>0%I`cIN#bs<;#NZN7j');
define('NONCE_SALT',       '(Q]HnStrL=3i,`gnW=eE#}^9ADH$ZH]U7zK{R=SU#U;fZ~U-2b^eSs%NOdWXm.ol');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'gbd_';

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
