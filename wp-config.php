<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'geekhub');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'xata');

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
define('AUTH_KEY',         '!#|Rml9iJ:N~&Q@0(lsOTJ2WI[FF .3)g<5t_IY,{&sGf`yFtF(hCr;3;2h/~%(Z');
define('SECURE_AUTH_KEY',  'OKxCi*%(Fu-^:UwN>`wAYg+|J?Ys|h*XDLG/l&tO!]h4}U<5frfU<z-p%F<Z_I;k');
define('LOGGED_IN_KEY',    'u5/y-!PT?0f&ACfQni>Z+S1uLFQ8;~11[iwR%TriG)X.:)zPM7iPbLNSP,|l^1oE');
define('NONCE_KEY',        ' t.TT`A|Lw;Z(@)dR<P`rArl<kv#-ak{9#x?^3N~?U|I{+U+1i b4E}KOc$013`,');
define('AUTH_SALT',        'XY+)$1(xFq0P+RV(&5f-a^_?XDdY58_~:?P|<&!I(RkvMs>@`(28eC#G,v,mgTo-');
define('SECURE_AUTH_SALT', 'g^~1A, IlfyciRK4~+bI,|GveuRi54~ZpE;eje_-v5d;X ,5XjIJ@-|9bgaEyCA(');
define('LOGGED_IN_SALT',   '7>A{6Av`yxnwrF|XCg-UBb^:{%iwF5v5+|FlZJrgLm4j1Rc>G}&sTU-_(MuV#TX4');
define('NONCE_SALT',       'wo]G ]3YEU^vJNFWw:E[+9k0]eLM| Z)+CCN;tzQvGAB_9]-&CPyc8h eh(v}W]:');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
