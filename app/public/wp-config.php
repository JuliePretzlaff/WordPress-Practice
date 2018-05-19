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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'JGI65c6l0uEultLxvJGURnEWa3IQU6OAVeJmjwftrj3KaBZqKT378gUMDAOqzc7+QcUy9hpGtqAEd9LZQA9NGQ==');
define('SECURE_AUTH_KEY',  '7qFsIPEiae0gRANQRx3ONE6hsj9m+TKdSuSkRTT/oLQaBoy5ZGk2NL5klarunAPhaWCK/q8xUSuz67SlwuyFoA==');
define('LOGGED_IN_KEY',    'TsLo5iiy8hJWlnck4krR+2GDTDlJ5nwjj0D2A7ZfWXvChg9DvhOytHo23sQpHRyn0qIV2fbGcEDrl1SgAWufGA==');
define('NONCE_KEY',        'kfLM1TSRl97oz+kb1JG5RzWiB0r+9LjDqOSeXpngZUp48e0cyDGOS9JdKs6cFtO5eWYy81o3PxSD0Inbif5dvQ==');
define('AUTH_SALT',        'Hzrg3sot6Jdj9Yq1Cgv4gJeQTT3u6EkmBYn7TJgR5nAQgO4P97A9QlshDHecn1jn/SizYsbb8ch6/0rzZW4kOQ==');
define('SECURE_AUTH_SALT', 'URSfDrUkP2EhXC1gxBSMHfwbKUn8xcK0yA4RjP0Et6DYjLij8J/SMQ99yYbIIwtjBUh/4HkVIdPbqZ1lNTd8kw==');
define('LOGGED_IN_SALT',   '/NLzKN0rfm1aPIIa5cHD3YguFc04cRH3nAo1OFdftQGsuhUKlpl55oYFbz45OTzcP4RFoEcIGBmbHmvviO4FMw==');
define('NONCE_SALT',       'oCnKnn+NnWno2KRgrTTWmfb2Ow1Jt2IVl2ibgQPLHA63fRYukVVHQ5wEJW4dN9tBGCF13aiU4VeoBVQLRvfcwQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';





/* Inserted by Local by Flywheel. See: http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy */
if ( isset( $_SERVER['HTTP_X_FORWARDED_PROTO'] ) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https' ) {
	$_SERVER['HTTPS'] = 'on';
}

/* Inserted by Local by Flywheel. Fixes $is_nginx global for rewrites. */
if ( ! empty( $_SERVER['SERVER_SOFTWARE'] ) && strpos( $_SERVER['SERVER_SOFTWARE'], 'Flywheel/' ) !== false ) {
	$_SERVER['SERVER_SOFTWARE'] = 'nginx/1.10.1';
}
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
