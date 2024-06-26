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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

define('AUTH_KEY',         'f9zFIJT2LcJf78iqfZHIZQu93gOu9xrbjrkDHEZx4HHnLKfJFKQ5w9A/7y3Ad3lBSkyS5kfe5mrRtPjsTgmk6Q==');
define('SECURE_AUTH_KEY',  'Z8r5ZBc/fNFbAEi6lBTF3YY2Pqs/oVztWlWCBPTVAzcXyY+1mprpv7zXSN0AIdlFDwXKXHrqjyZTYY7mE1O2oA==');
define('LOGGED_IN_KEY',    'qZ9Qvl2TB1k00XOrWiXSbZOTGi09naS8nduqAR6z694Il5emTqVJlx50yUK45w19yjpmYnuqQhHIUPSH672DSQ==');
define('NONCE_KEY',        '+21YXLhlBXhw5VP4FhkHRIwj4xc7tQFYKu+OWBeqJVkAGwVjDIqmDl0obqNozb42/5v6JQZUmQDec8EL8exdHg==');
define('AUTH_SALT',        'JXCfdVICPQhLgEiPM7YDG+e7MFLK0kVwQrKWJmbSMby4/aoI1mcP4LSI/fMU1LN84TF/4V6V0n/eTvUTE6pf7Q==');
define('SECURE_AUTH_SALT', 'v1miHj9xA+jEFk/lkCe7ikMgC3zURso9BgTFOV6QhYrosOqDSIkmBVp/6u82coVTt6woNnLwSvg8VOSlNIdXPg==');
define('LOGGED_IN_SALT',   'gsMxRbet0XZR0Pgz8eHbaM3s6YXP1n8hsFBO8ua4P5O1ybdxqUDJ3oNQf6Q+r2gFoSvcmafekKSe5nDbm37oEQ==');
define('NONCE_SALT',       'nhgqE/5H2GeM9yLWnIrEXEhADfZT57fmC6YZwMN0ymoUoo0zwVxT8LovRjtXPdTjYe7dVWhkQjTKVGPcZXuJUg==');