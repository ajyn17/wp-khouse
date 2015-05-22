<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'wp-khouse');

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
define('AUTH_KEY',         '(l$|7Y[OE%-!k$WCl>F x~!1;b@?W{TvO*XzYaCo})K|Ka=M!nNB-R!dld-cHpuk');
define('SECURE_AUTH_KEY',  '9KDl@TQpac[O&J}n/<KPW_V?Erqnl~Nj[lWd-^*S*Z^m+}i-#JP-m/:rXgyoC-v;');
define('LOGGED_IN_KEY',    'Ra#B M2LgIc*+Xsf8#iar|s]D/Evd-QTj3E+MrB)?aG-dsk?=<tZeaDT!<E7-l7{');
define('NONCE_KEY',        '{b%G%X2LY&EIvsZ .>#4K5*;e$/TU//E&bmOP$`/&#*B|R|PR({Q~x5t|Wau1T-s');
define('AUTH_SALT',        '-6m{Mx`PB-j9K|{-u:Ff*1*zgrs9IqiRn8zcFpj2|SwI+J;V`)ci1,No?>FDJWB|');
define('SECURE_AUTH_SALT', '=pc{LIR/3-vZ:AqH<DGH|X$ `Y~T0F| /`u<|r5-G,]7nG|hsJ*C$#]j-sDRaN$a');
define('LOGGED_IN_SALT',   'm`Hrx7eTLkk*LQ9~<n7/^?ch)[Si$LY;pLE4W)]m]%J{ ;f ceL/=-})`8^[YEAU');
define('NONCE_SALT',       'W_<*5 +zgU*.4b<I>{7/xr3h+mq}5A,jde/05Bjc|B,CBVKasCxB4MiQxZ^,ZNtd');

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
