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

// ** Heroku Postgres settings - from Heroku Environment ** //
$db = parse_url($_ENV["DATABASE_URL"]);

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', trim($db["path"],"/"));

/** MySQL database username */
define('DB_USER', $db["user"]);

/** MySQL database password */
define('DB_PASSWORD', $db["pass"]);

/** MySQL hostname */
define('DB_HOST', $db["host"]);

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
define('AUTH_KEY',         '/A@E+_2wamn+,VcmrXkhH)fg`yH^Om|_BUC^isACS7Q)0E@e%{(H+8Z+26w(W-Z_');
define('SECURE_AUTH_KEY',  'Nqp!d_j<4=iviSx&hVM1}E++8#?Hxa!3Q#+D.%o#SgmpRv<yyU/r<t~BZmEv:j[a');
define('LOGGED_IN_KEY',    'kzH:1TG1Wy43xqCson#yy`:%lT5-gs;0C<V@0*YNd>!gW-1/R{K,2H/]ak|{[-.L');
define('NONCE_KEY',        'w<A7jby1U@BLYZmS|t&[+8%E5Vk8{mf6>pFx=MkEY36<8x>W6?]!eL^yu_E_O?-w');
define('AUTH_SALT',        '-Yy~aYB!~p-PJ!K<9@>+D+MB9=0[?-6gvgCT=NM-{(vQjC,hu@+^-.7KI*{Tg_Z/');
define('SECURE_AUTH_SALT', '5[tT_h-$tt5||>9t-*x{hB-Xtb~U4yn{):N^5zcpd|m+YZ$peVA=<%s}B/Xw|H~{');
define('LOGGED_IN_SALT',   '*J5B DG07#27pEDIz`?}d+wwfOOF~ARO+ae l,r-56@J_Q6e+[a,`S1&;q--J]QT');
define('NONCE_SALT',       'P-(AUD=4w+EBLqQ~<:G<O+WQ{~KHTuq=h{/}>v|-1JVUf2%5KjIu*=h,?n<glr/T');

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
