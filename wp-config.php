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
define('DB_NAME', 'armata');

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
define('AUTH_KEY',         '@@Sad,;=W.F4z/QL%/@_o7[VUFSSpsKf{=9:!t%#BTPH9=VT}QST27W oYcqegnI');
define('SECURE_AUTH_KEY',  'Mw7|L^;E6kAr/!q1Rne{0`_II}hW@P@9QFx[gseneHn C:;xj9lwt1L~9S>IZ}nG');
define('LOGGED_IN_KEY',    'yJ5(r#?OXu~uBg%s{fQP**v^2j[JPy-*YB3 `4|Hk+KnH33=5fPu#]JS/{.MG)?|');
define('NONCE_KEY',        '-FUe_s t81`(:(i/HF #n>D-[/YV0cb}<7%>}Y-o7C[3@ zDC[`HtH^ll@5ZLggL');
define('AUTH_SALT',        'EDyTJ_+}]-/UovCf6#1|,i)RsEK|}0S.. Ex06Wb{YwvPl%dR%;)dec-{Ilbw~h&');
define('SECURE_AUTH_SALT', 'G7<kN1WXi-t/LQ!xQ*_27rO}jdiN5 )7X#yTaE_Cus%!Kt2} hW{&r/n%CcX MUR');
define('LOGGED_IN_SALT',   '|UR.0*.yU9a`G}4(;/B;*(W>0ZmgD6*}cH*1Epw=6*SHd5DVn(rR@Xwk!/*VT9sa');
define('NONCE_SALT',       'WQG+NBm7asc|Rk6uq7bjBUYW|B-ZhSrdW@MK)jDsAjVJ%O$N|=a$AkDh++4@ #YL');

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

