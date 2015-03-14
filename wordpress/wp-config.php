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
define('DB_NAME', 'db_practise_1');

/** MySQL database username */
define('DB_USER', 'db_prac1_user');

/** MySQL database password */
define('DB_PASSWORD', 'cwPXPsfJdydBKcUK');

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
define('AUTH_KEY',         'DWi/v+<`nvi99$pPj|bPA*|~N/!Z}z+~<|u%l:P<~9>}% |Y-Fd-7)7JV3,D<&nj');
define('SECURE_AUTH_KEY',  '<bu[*djw%t yC</)Ge*n+D*o^KP~rWrk-}XF,`Wq.{O>[P}]d(/15Y_<A8F+@&-|');
define('LOGGED_IN_KEY',    '>CFe[~$PZHsAr0}f-$U(kof}r}Ikw1v4C,hWNzt(VU*PcZ5Bz7h8@UGQ7:M[|[V1');
define('NONCE_KEY',        '3%(kU.qn=^UzGc:ui[~IWZ+rg[s+5AKzrBH5ZmLlP*|L)yjZTF^eGNr%f|^M|HMw');
define('AUTH_SALT',        'D0>!}aCjKBh22.;:_4TemE1ojVz)nEz:ABR4r&fJMWZY6XOb!,&MA4bBce?k71ou');
define('SECURE_AUTH_SALT', 'p>s!-r;)4gwJaLBe|[fvw7 yd7aE$:P8hHmQJ|ht;-Gj6qD&f;D[ofGVn)u&nuT(');
define('LOGGED_IN_SALT',   '1Xsw+Pv*4+jt9?yn>--k?-.+[|N$^ |9S>5T>6U#hSoH+i5O|r5zQN@nR7<EiVl+');
define('NONCE_SALT',       'v{-)>b4]}lFDF%E#Pg$a^{qoGFl)Op_#27WJc&9C$M?*+nmanI`,c?^zdtt/C<jr');

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
