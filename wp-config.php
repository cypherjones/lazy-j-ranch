<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'heuristi_db611');

/** MySQL database username */
define('DB_USER', 'heuristi_db611');

/** MySQL database password */
define('DB_PASSWORD', 'D6q40S6((P');

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
define('AUTH_KEY',         'g8flzsx28wwsoxymydxewigpnqgvw7lbxt5m0hzxqwul7fv7ldbn9gb18h1drdru');
define('SECURE_AUTH_KEY',  'yfmpv8krx4trz7hnqysftvof5hycmkdmwvusmevu24frrivsee6dcfg0dl0lb3nc');
define('LOGGED_IN_KEY',    'zqqqvprqlxchtqv8lgxzuefoljqfmodwajzqgtnrsvyo1zc8uia9oeofvgpfxo7p');
define('NONCE_KEY',        '61sifyggtqmnwuzesqujfmmsx5brfh8ogzhbvnpxqxbrmfhal4g4cyvbxcytyqsh');
define('AUTH_SALT',        'wps9pj4btoz3xhw2wiyongil8vgeesxhfh4ldliulm4eg5uukhxxqaeugpw5odxl');
define('SECURE_AUTH_SALT', 'np7oqrfvkn7lykyws8z355zdqdszuhtpryz3iwviqmqy5xbkc6i37yfqerumgrar');
define('LOGGED_IN_SALT',   'n5jl4lqxbeetwtereeewvmbbixvusfjefokof8eidymdcgeq0zmibilkpoxrgidq');
define('NONCE_SALT',       'mvkoro8osim6nex6gcmfeen4kpcjsrjlqdeqt33wk46mm21qfmm8cfvdlma4f1ex');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'db_';

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
