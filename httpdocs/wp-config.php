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
define('DB_NAME', 'fabien-ponzio_wordpress_a');

/** MySQL database username */
define('DB_USER', 'wordpress_23');

/** MySQL database password */
define('DB_PASSWORD', 'da2!rN4X3B');

/** MySQL hostname */
define('DB_HOST', 'localhost:3306');

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
define('AUTH_KEY',         'hyf@Yxs!JT58PFr7^Ki&Al&EPHX#3*JKw)QFRV8LElQQpW3o%PabX6e%G8dkbRIW');
define('SECURE_AUTH_KEY',  'G3QhDhKx2f^ZIH91sh5X1f0EvRQU@K!pWyjlm!gRbX&JeC@TuUBKEauwSP#dailR');
define('LOGGED_IN_KEY',    'g@g6h8HSq%7DRUc6H%wwCx8@c#okbbRfAe82a1IOuRgckT3hB&Pvi7mX96mqF(#G');
define('NONCE_KEY',        'HC!hkBmU88K!yjdZbC@UQPvsroclb3bS4MCK!dV8FB!Vmc7PP1qDSbdyScw(uCrN');
define('AUTH_SALT',        'XxEp%JxXiFpAs4iv3R!zkDO%@S7@!aJI(REtPUzBb@5pWt4ykj(^@VLjSdq#(0Pk');
define('SECURE_AUTH_SALT', 'EHOWNz9WNKDAIRy%gzWKPCuPP@gb5)6lGKgP0uxr2JHoXDp!t)f1kZnq&ou#d2HR');
define('LOGGED_IN_SALT',   '&5^jp7XoaKf)n*%xcqxzEz)Lwsr3yqDa6gTetiICjzJp32WJ5vu3yde6*Gzcb(Ye');
define('NONCE_SALT',       'f4D1^w0ttsxn*GuUE3dOJW&N%tk%*sazvJqIP06cZ1!krzrzWzo*DV&iV9R7ON83');
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

define( 'WP_ALLOW_MULTISITE', true );

define ('FS_METHOD', 'direct');
