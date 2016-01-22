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
define('DB_NAME', '300cecsDBuz3cn');

/** MySQL database username */
define('DB_USER', '300cecsDBuz3cn');

/** MySQL database password */
define('DB_PASSWORD', 'z7aUofdlIG');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'd:8w!@8VR-1:Vso1R!z4cYv84RJV[|0kgsFCNpm.LHe#_9ia+6;PHq]TLme#H9p]S');
define('SECURE_AUTH_KEY',  '+;aTe6H9x_+LXP<2;XxA2TfczB7U$yYUf0>4rjvNYQ>30f$yAbU$7Xuq{Mur$QM');
define('LOGGED_IN_KEY',    '>0nzv7YRs}VRc4JrozMn}Bj,MIU,0>grn0NJr}_:[Vh8KC-|_DdW~9l@8gdoC8J@');
define('NONCE_KEY',        'N8gcoFRN^}>C4r@zBYVt~xOaW-52Oxt~]5ws~SOZ:[5skwD9K~-#ZVh91CfbyA6I$');
define('AUTH_SALT',        'osJVN@[|NCw!@Lie#H9h~+DeWx2]Spm;PHp]ZSt5:OGp_9hd-D9W6XPy2bTumLIj');
define('SECURE_AUTH_SALT', '+e<.;mxq}73frIUQy3{Nn0}7v,MFg<Iqn.QIT{.3frnQyu^NY}>4nkvNYQ!z|cV');
define('LOGGED_IN_SALT',   '7,3cYjBMJk,NJU}74nzvCd|_:lws5VOtKl:[5s~-KZ:[4s@JGc~-|dok:OGo[6;Dx');
define('NONCE_SALT',       '@cYkBNJ$>,UrnMIq{TMn>,BnyrIUQ,{8Z!@4dZwC4Gw!-RdZ!C4d@NJg>,0kzrJ');

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
define('WP_DEBUG', false);define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
