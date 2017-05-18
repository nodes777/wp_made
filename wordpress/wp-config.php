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
define('DB_NAME', 'wp_made');

/** MySQL database username */
define('DB_USER', 'taylor');

/** MySQL database password */
define('DB_PASSWORD', 'butter@toast');

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
define('AUTH_KEY',         'T/I@j5$Tm6-z&L1)>I^E:TDR@)9LWnJgbr66WbY,+*U/TO3{o>Yi^H+a!kp @v{2');
define('SECURE_AUTH_KEY',  'w1& MT7~Gj2Zm$e!G77cD4cp)xvRV+>%sKk|}%#.d7-4<yh%.Fh`F!|.)+.0Vajo');
define('LOGGED_IN_KEY',    'Hcm(^r/iBY6hK#:wJ8{qSlw68bH(5/{mLPJ:YBI>}T*=H%-JU2w@iaH3Nt0o:$Bz');
define('NONCE_KEY',        'E(+(CMjP+2<qO3c-M-a^aLC#!;hphtX.X@MdD~]N{o|pQ1a#04^)I +*$lYxN.AY');
define('AUTH_SALT',        'ysNz=dhk*w1tm1e##;&:{IIH$&.uDe0Z,M)/nPc8MaC@F}W1I,`W4H+,W+p=:I~!');
define('SECURE_AUTH_SALT', '{6Q?5Pg[0`m_cE|q3cPJx]SHn)U+GaYl>8rj-fu@CsZ9]*i3_w2xqNU<2eai#A>_');
define('LOGGED_IN_SALT',   ')at>&u,i|VH=ctbB7z*({-+(Ivc2s!UZX8)*V2IvT-ydMQF0O@hE?7{Kzy[nl#lV');
define('NONCE_SALT',       'ELL*T#V {{XKhJ#_0|kqp]&y|kW<-.e[hOnbCmq+uW0[L8+3-?@/i(2s-|q/K4!@');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_made';

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
