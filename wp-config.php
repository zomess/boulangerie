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
define( 'DB_NAME', 'boulangerie' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'vTf{cnws7hKxYeF!W=oj]k*rsB/hY]Q6-(7vwu3HEsFRA<7<nu:biyr*~m4Dc4k0' );
define( 'SECURE_AUTH_KEY',  'p*+KK8,(N$^-rJlYZ#Gh1a07w]k+<1CbpG-Phx >1YqOWq^_8h9h./FLV-DcTLv>' );
define( 'LOGGED_IN_KEY',    '^d7 (IfevMOwH@EV;/L3XFEP8V65FMbn:+<.:{l#WhCD/y&>W7bSJWkH?krBz[%)' );
define( 'NONCE_KEY',        '9xj_w?AS,-,p)V0eaptO+{FXs6Z_sFedxG,s:q%NfvPbSKhk7&*DeWM}WNlg$;!F' );
define( 'AUTH_SALT',        'vmG{et6yI#cJyeuw%i-M@KF*fkMMIR=G&@3fu*+{Gb|5!<=m0:dW1>tZCH.[A{9h' );
define( 'SECURE_AUTH_SALT', 'Pv8g#cvU%-sf96NB6copyPZVQs~;c502}F<%hjq4onZdAJeE)/[5|O*|-*3iflF@' );
define( 'LOGGED_IN_SALT',   '?rRj],5-u;~5L0Hf2#O-H3[i[cQ/vCW.Yp2LgH;jwb.IxPot8ZMn7O&o#{#xk-KS' );
define( 'NONCE_SALT',       'C3mrf5aI_,rhe,5L>6Ja[I>Z4/9l6cGl:WEBngtMz1h .m^Q5fl}$V2o}t`m2|DJ' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
