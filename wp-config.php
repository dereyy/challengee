<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'challenge' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'C494gw|R<%j_nkuZXh+ s_RcV|G7/=zmOw5V`3dxP_NwRVm/ta6/i p|R@F=*<z0' );
define( 'SECURE_AUTH_KEY',  'mS*d0pi@mZB{r7.(b=Q[04lJ?|}7i4=-%S,!|/T6y,::<F9=R`y.o[xELNEHG-#S' );
define( 'LOGGED_IN_KEY',    'n~C(`+`3!@k1h_5FW0xG9S*$dsSyhkTK^,3)T;4W?[$kiJB:%u3@_t7DwpLL;~&x' );
define( 'NONCE_KEY',        '`!t-#eJ/p[Z=. #j3<$yFw%w9!%k?gA4w;R%{k,vM>WhWuPG$kvl;_`[RI5My-G-' );
define( 'AUTH_SALT',        'p,zaeY(.bLt&ug)^EQ&~x&$ifZ6oMem)=,uUuxm8xAwb$Ea=wyg1:4SrSg:7B^;Z' );
define( 'SECURE_AUTH_SALT', '%!i,jHw+3QLJ;nrYphTiTz]IFC)ng4b!H~&[z1&ZMC&Kg,;qxwOhwfBmOcnmYIx[' );
define( 'LOGGED_IN_SALT',   'jo{,POzEY?Sz5!~[9X2Vfx/7|$xd[!](jGb&vDYzWc&4NPfHA1|]`?hZyTuQimc0' );
define( 'NONCE_SALT',       'th[/VP H#9g&QGZ.wrnx^}SU#JF&E4mO{f0{a8B:lt8],?qVo7D{{J9F$AF3U7uo' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
