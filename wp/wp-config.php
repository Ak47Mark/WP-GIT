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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'admin');

/** MySQL database password */
define('DB_PASSWORD', 'admin');

/** MySQL hostname */
define('DB_HOST', 'wordpress_db_UAT');

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
define('AUTH_KEY',         ']3kC:%{MQBCpB>%}CZ)VtXO|6@4iD.~>oz@kJ&.a.DVg6;R:b:YX#~.DC`B~+9Ly');
define('SECURE_AUTH_KEY',  '!`F~e@z0hK^cIoRANTPHGhbYei]r.z;!3wp*8fb(Fx1VwINdzVJGy-ET,(a~#ncA');
define('LOGGED_IN_KEY',    '&_6]!.gqGwGiZ`9T`^XXGecCsMMc}4!seIYMBy]VFS7M_Bi8mQ>AUb)kcb]lCyXG');
define('NONCE_KEY',        'qZ>]3xZ(FShM82DY=q@dX|faMkA?.oE#<C{MZgKu;Z;d>n3}|Gqo2Xu<ik!VIMT1');
define('AUTH_SALT',        '^n#X6g7w%A;W4J;YqL=@Ri|9s=f]o_R=:Gm<<;$Fnzd]2p7,F,`<m7e[Wx])WfMq');
define('SECURE_AUTH_SALT', 'Eh/L+7*#`+VFK3TAf+[&-C,~I+UGu%>w 5kkdH hib Z8Feix{kiY&:<&mM;iTut');
define('LOGGED_IN_SALT',   'TUsfE&BNK}~aI W-!:w+r$)93O4v>5Vjx3 /}5+O9Bc@?U71w-d4ppMF@]{i=XCu');
define('NONCE_SALT',       '7nTW`t@yZJx-9OgwxdC }+$}d;*xe]k|$,~1Q,Yx!klJ`)Q5xuu;r6KW~`g6jUb~');

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
