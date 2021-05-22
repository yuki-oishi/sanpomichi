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
define('AUTH_KEY',         'DPIR+c8JSAC/03ByNwDulhgvZiESro8GDf7fP2SxWtQ/C+9oOqrJ+fW7syw+KP0NxHHjc+L531Hhf5NOVJyYMA==');
define('SECURE_AUTH_KEY',  '5Rh805NVaYUady7YCLywB/oykc9frfq/CCn/Lz53y8sP0ONqemFYhQHQyTR/oWFFSRG23KuxHts0E2Y1U0ijCg==');
define('LOGGED_IN_KEY',    'bIm3Xkalvrdj+hOwbtH8z9bTCHX+7HR+hV9ZThRlGy+EetX5jaTHfSVFpZAmtCNhUkonWVD/ueACOp9LgHAvJw==');
define('NONCE_KEY',        '6bEf5cNUb2KAKNwMXAfJJv8k3KJB6NwLBoul2UNm2M3/FCgMqDvnkGnHMDXfn2eJJUHcN4g/wJgc0kVMsvBbzA==');
define('AUTH_SALT',        'gJoYnqDw0wJ9ACRsWj8efBihZTuK12wv+tpN0GcCXAQBrBlUuJbBBaz1GPvbKaaKy6owLfwPn7ayNDcaHuHgUw==');
define('SECURE_AUTH_SALT', 'mguJLI5Up20j3UwN4VwY2/iWf43RGfyLrGq8qDbPh63Euyf6zU09pmBCRYa3MEYs7pCS2o6JbYm2eIcs7Ad2/w==');
define('LOGGED_IN_SALT',   'OlwqfyYFIUm1aLh4ccZ1nF/pe08vrprANj0vV5ALRswd6iJUbFwGW1TueA0WyefdbSA5iNSonONkVpk8TVPCGw==');
define('NONCE_SALT',       'OmH3cNZXNJZyxl20plRLEGzhF+5yPfDsipgPWfmVhScEKrZPe7nVlsef9yBQHZAk1J5zM3JGIhLzsC+IeXW+qg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
