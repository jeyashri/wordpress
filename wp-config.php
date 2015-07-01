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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'vydev');

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
define('AUTH_KEY',         '0sFCBb8KUpr@.UbZkDg?xlDz|U1/^t8__20.OtJO7(Ycu<ej,~:r=0Uw$!d/ jgI');
define('SECURE_AUTH_KEY',  'U[3|pJuX`Bu|ZKdmiP]Av^)&G16B0[nUG=paHy/#w[kZ XrHumT=iL63Cmz!$!ej');
define('LOGGED_IN_KEY',    '}ZYk4jaoz`=Bzdp([Afa!([^{4Lj^Y#k0%sWE-IpM{sO7g+Siu07;n2 9;[2-OV<');
define('NONCE_KEY',        'lf99b~YI~Fky2DGj;TXS)_`;@Ul/M:CeI]cFI7oJ*.8@+jVOy/+,x:6.M3PafoZt');
define('AUTH_SALT',        '`LuLmujl?S7[O{sGc$NX}|GmU!^)/TOvI0V7vv[sk`Hx/xcVYx 4/If.8]fM B0s');
define('SECURE_AUTH_SALT', 'RK<nlHV=+AA%&M6,e@am%lD|4N(2<6_uY! m+`_0bf{GTN$mz/n=!a>*}*bead2u');
define('LOGGED_IN_SALT',   'N.3O)cuAPBk?2C8(a]yHD,{??_!U&-i{I$pW80l%*r_)?zbploPgwO/_~^YNZ_H3');
define('NONCE_SALT',       '&sn);<isV!/Xoz_}M(cv]dc-Y8J<pk}9>1;6hTPv!X,n2*CFM,T9|86dhVuq[*c;');

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
