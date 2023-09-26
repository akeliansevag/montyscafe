<?php

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

$local = true;

if ($local) {
	define('DB_NAME', 'montyscafe_db');
	define('DB_USER', 'root');
	define('DB_PASSWORD', 'root');
	define('DB_HOST', 'localhost');
	define('DB_CHARSET', 'utf8mb4');
	define('DB_COLLATE', '');
} else {
	define('DB_NAME', 'staging_montyscafe_live');
	define('DB_USER', 'webdepartment');
	define('DB_PASSWORD', 'Webdepartment123!@#.)(');
	define('DB_HOST', '92.205.5.33');
	define('DB_CHARSET', 'utf8mb4');
	define('DB_COLLATE', '');
	define('WP_HOME', 'http://localhost/montyscafe'); // Replace with your desired Home URL
	define('WP_SITEURL', 'https://staging.montyscafe.com'); // Replace with your desired Site URL
}




/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'KL1u;~H8xRY7zLJ#w9M}_dG87j1VK-[s`=V3~t3~-[oe^6@VPR[x=j73B!A}45HA');
define('SECURE_AUTH_KEY',  '5~[sqH&z86&7!p,{xIG:#%[ jeQZ_VP@RxhLXq$tWJAykcy,T?z~t-S=Y5Mi>8D-');
define('LOGGED_IN_KEY',    'M2O.}e;E/ Q/Bu0fghOOV~/&wF{K^$%$_1.-<X15.aI_,n+:-=5_sAAFh)hDY)CA');
define('NONCE_KEY',        '37zbfpHCg&&+INnTnXyX%G5LXJ[m06jkY~M``nq2GQzelmi3nWY+M,:#Kl7(9|]u');
define('AUTH_SALT',        'o FJoo!L;=-i5b[_E2g8!kb_OqoDq802Qzk7|Yf+{)vOd/VqpA>B<;#Im,8; `/T');
define('SECURE_AUTH_SALT', '=wkCx%iC(Uig{9Cg[{J&aga_b|Q?->!AYfT(,Sl*KM$dkN@CGCzvMF.qkg:0w@7%');
define('LOGGED_IN_SALT',   'znoo3?[TwlccJFv&sQ`!?+Cq5t8w,&Hgv_3Mh-6:<#=MwJ;dxlLW22;w4Bwc[rh?');
define('NONCE_SALT',       '&&(19.LV}rnL3lYY86}$34:8lJ;~mXyalEN.URB?T {nsjo1,{ AvGiz[ qw|Mp`');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
