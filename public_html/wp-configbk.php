<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache


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
define('DB_NAME', 'khongdo_blue');

/** MySQL database username */
define('DB_USER', 'khongdo');

/** MySQL database password */
define('DB_PASSWORD', 'Baby1985');

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
define('AUTH_KEY',         '${}bL*3yb4AO+O>h+n7%pj9px@.)1q<PV*>yCj25)4##y;)F}i+Gj)SX4t!L2.y#');
define('SECURE_AUTH_KEY',  'J?X$0WE%UbVZ#{}u%,ve^-7l~x3#5reI+E.G|($ d[i?g%+++J6wZAi(J8_{I3nU');
define('LOGGED_IN_KEY',    'z<z|&!&@PQKJ7y<XG+a2!X1@1,4+=ct|_%>{)+fpJ~h`r<<V2w-MSI$-kR7XEB*{');
define('NONCE_KEY',        ':zSp!U,KsSLy?iOePZ-1]J?`I-S. Gpl~^!u3B`2~%4 xh||FEP98+R`S0 se:|p');
define('AUTH_SALT',        'y_6l!Z+ej6 M7ix3+9OkNv-X~O5ISG(cAo-(NC:L:eBakwj)Ei>Lz8-3,!qhC2P<');
define('SECURE_AUTH_SALT', 'MR;eeT/f{jS{OQ-Ef+^n5np@w]p}ydQ4K5%R;gm`(+DF:-P.Gd)0c>1v]l!j<Is(');
define('LOGGED_IN_SALT',   '[b>5I?[%U^VJ=s!E;x48|!n@Os=o!C7P0nz^MCuT(LdyzdZ;2BJ+_|pae-Hqtw;#');
define('NONCE_SALT',       '=L!t02?]cI1z&kDi1+IyV(jZ1W;|5Km_(+/r3Xg?}$wBv}gVmMYj ?$$30|U/4Sq');

define( 'DISALLOW_FILE_EDIT', false );
define ('WP_AUTO_UPDATE_CORE', true);


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'chua_';

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
