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
define('DB_NAME', 'Db_wordpress');

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
define('AUTH_KEY',         'U&p&~l;ew@I,s!3}kX{IEvm&.#&`;F`IhWn/iSf8c&=#Lm^T,04]_3( :vg{1vTI');
define('SECURE_AUTH_KEY',  '+3}T6|p8Kx`KN:=Ehx,^u01E56`kt[EqknfpMMKAT{$o*BwF;VVW+U0LaO&V3re6');
define('LOGGED_IN_KEY',    ']eV5TP9uhJ_;1]yxt:B8NUN?eKI(?o4yY{jOW]l_y,dEZ2XFumgG%h22F/I[6V5c');
define('NONCE_KEY',        '34hZCYD|&}w uR|6nE;Qw@]^ve30K*In#v,@f,QG!+u2xuc#guv4d81S2u{^Vq|B');
define('AUTH_SALT',        '}cy8Z<0ltnH{pH1BqD!RB/*AGI[R7WdTz$YT1,Ke=GCu`3fYHem.B3^-5Bkuw9$8');
define('SECURE_AUTH_SALT', 'kV_LTpf!D h_eHJE1w1piY7R/^qhjW&g6*nfJ8$Wj6HP6wjkwOa0$.QL=eqHEx)l');
define('LOGGED_IN_SALT',   'rI.enQ?m-oA+5P99L&.Z3l<elW1bYGts:kjM*/siiq@Z&Qu3JUP2:k;CjPW?@<Md');
define('NONCE_SALT',       'odGz~w|Iys|GY[.kA0@O*0;Udm]<i+P@mbvz9$[7X>5^((pSl&5joO/&Ktz]b!Rb');

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
