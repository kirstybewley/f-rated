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
define('DB_NAME', 'rated');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'pass');

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
 define('AUTH_KEY',         '2j5dW6ihr&6;{uH-i%Z|g(YKPCP#R*Ne1g)-:%?T-o*n8,`#*V53||zX#FmXind8');
 define('SECURE_AUTH_KEY',  '<tvqo-kONp2d->{|o<i2Ce$-q5^nus4Wzl3qcrL=-tZi$udY8<gRAA*xXI2H:~!C');
 define('LOGGED_IN_KEY',    '~xQ~Vu7 64qanoW ^Y/x-jtXTmr5#`A|?bg)%uCl|n^yP6u&CRzk[;Iet<e]+px&');
 define('NONCE_KEY',        'WPm[q9)hE!,Q)lf8=VLcS]3VPv-|>-QWQ>+2VJR{ii-PNae#|9xrrY&!<A2c+xeW');
 define('AUTH_SALT',        'N [*yZn}<Ij-krqbGLYGtm.Pv(L(-8`d6HoERUF+I_P,2r0P62Jf{zjTsU:j_ac+');
 define('SECURE_AUTH_SALT', '4.aE9}Xx7x(rG5+?=5tZ7-+P|Nj@d8W$(j.dun?Jtj-|fYA7?^RI>t+4!5E]NTc^');
 define('LOGGED_IN_SALT',   '5(Xd6Oo5lV!prUnKtv=0g-=h||14|^--,=|g;Nae3I{;Q!y:N|lS,r-}y`ql5$%%');
 define('NONCE_SALT',       'G%N-v$HW,?[BEK38m?eY^<]N/K<T)ItI=I&-A?h91TkX7T58+Dn 9y~:Fm5f$/G{');

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
