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
define('DB_NAME', 'd9osm2jllrji9t');
/** MySQL database username */
define('DB_USER', 'gmpxnqagjamhqv');
/** MySQL database password */
define('DB_PASSWORD', 'c96940137c99c53086007f29eae4eb347adfc4dbf16cb78f8a86da1d307835f6');
/** MySQL hostname */
define('DB_HOST', 'ec2-107-20-211-10.compute-1.amazonaws.com:5432');
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
define('AUTH_KEY',         'xK?0%zG$>9|D0cdOAl05x+vPH&R5xRvj)Pr{sQL>F^j_56sS WsVt@3TbQl{4zx{');
define('SECURE_AUTH_KEY',  '|<1RFs5)g5rr7`Pt?K`VoTG_@eJ&ylj=fpmu2;vLum8dESCqA*(GyRu0e(BOt9vx');
define('LOGGED_IN_KEY',    'px{Qt`I8TDm$4{$S<MLb3t{G}hZVr{a12+WWV7D3Y^DI*@po}nhop?rZOhoB9!9S');
define('NONCE_KEY',        '.QVp4aqE]W)Zi}_[X+)a0G?TqS:~WD]4Jy%q~N0eT O_E-!-mzKJ~86>+N<i0i E');
define('AUTH_SALT',        'wJRZnS|{u<?Nsi4m83m)=No@Aq`-.N)D*D(`}h5ewnxd&HlZ!wT8;*VUgu$OUZ*/');
define('SECURE_AUTH_SALT', 'SC0l$UW_!m@^#RJR zStvi$r;mEApk6%94|vFXE9#W~us*qiYiTo^U^x v%`MfFI');
define('LOGGED_IN_SALT',   'w~GZ(h?ml@|c*#b9K#P<})Sy-zch.CZAB~cDanG/b/]jt$ow[5sZlF(&KT@@sz;+');
define('NONCE_SALT',       'F==a7@`DtY`jHox^}caoc+)st0_A<w$g)2R/Bmn$R[F3YX$3a)~j<[8*[E,>_n-J');
define('JWT_AUTH_SECRET_KEY', 'w~GZ(h?ml@|c*#b9K#P<}N0eT O_E-!-mzb3t{G}hZVr{a12+WWWsVt@3TbQl');
define('JWT_AUTH_CORS_ENABLE', true);

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
