<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'db113448_cheeple');

/** MySQL database username */
define('DB_USER', '1clk_wp_4Cw2vhT');

/** MySQL database password */
define('DB_PASSWORD', 'Wd7qjdAn');

/** MySQL hostname */
define('DB_HOST', $_ENV{DATABASE_SERVER});

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
define('AUTH_KEY', 'WOylWi1O 5J1desBs nPHrVzh7 dtDuHIrO 5RfvpkeQ');
define('SECURE_AUTH_KEY', 'Oe1ZpBb6 UZ6J8GzE XtbOd4el fLzAJQld UoYOg1WA');
define('LOGGED_IN_KEY', 'oZy2mRcE D38c3hLb Ga5LQpG2 bckIpNzx NMtx7rIb');
define('NONCE_KEY', 'vKtEmrmd BqSdSmSC iy7UTBS6 s3CL56yY 4J5RrK7K');
define('AUTH_SALT', 'dGuHc8zR 7L6Jl5Jw naiPDwzX JEwBJVve e1Z7QpNj');
define('SECURE_AUTH_SALT', '7an8BHwL vGIgl3Fv pTtUPEw4 kwg6XSd8 hJKT21Q5');
define('LOGGED_IN_SALT', '1Js7GLyD yXnS4yng r83akrof bwvIEQqR pkOWzgZ7');
define('NONCE_SALT', '5gF3Xlju khy5wmAc a7qk2P8b cyhK3mYw dBuVZRWa');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
