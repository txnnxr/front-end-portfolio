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
define('DB_NAME', 'txnnxrBlog');

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
define('AUTH_KEY',         '`w/|rf&A/_9i[w&Jml<f,SBdC:eeB+o#yKphR>yKG}n}7ozLC(lLc=-3Dre+SdDX');
define('SECURE_AUTH_KEY',  'Nc/F2p4FJW6YTUH6v% 5hHY,56lvUf<|b_9we6sW$sKr-{& $5Q0YWPCEw 3jyhS');
define('LOGGED_IN_KEY',    'qsPAVi3VLv4}gt94ytiK[v2vyB$&y<I{US9DB1zoW[ph{NtF%,OCxi&Xdg)8?RH`');
define('NONCE_KEY',        '##9b`u^88<_$Qpd,<Qb.@y0,AeyGo>:|.QK}x*np.kDkyLo7jj394=;x#>fM?~uJ');
define('AUTH_SALT',        '9NIxe$,[_>Cn{G`v#nx bd ]6Zn`btBH[2%e|@u z[<8=d[k&GsS&K[`pC9|q;rI');
define('SECURE_AUTH_SALT', 'C?U=n!!reE:cDN}[%:&AO`i1V9tL#[s/_t:B(Z qo)xD)Ooq3y<Z=8TmU+#y~rV^');
define('LOGGED_IN_SALT',   '3w.q?sR.KP8A=^/mwhYP2B.}MUez+MY-n!|-$*qqZChxBRHZsW/ >c)6y)V,iHte');
define('NONCE_SALT',       'pc-;Q_ w/jU.<E/gBa6e2x+,x1l xWTuo&l4uxV1+BY(tOO=6yAw3fR aMj>G1@-');

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
