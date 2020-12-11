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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'projects_db' );

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
define( 'AUTH_KEY',         '5fanv3>_Z)xC?@C)rU1ts;003Vp1zPm%1_6]F6c@1g1%(|hq)4FP/^,&eaSkE(o!' );
define( 'SECURE_AUTH_KEY',  '*`z-T6T3uaLz9wHzvqR-owJ`!B(s}iYf3~o5$qE#; JW=e/!N4o.<}Tf2{DTbyvW' );
define( 'LOGGED_IN_KEY',    '~vRPnA,wqcc9Ba?Q6*0Q0ken)|/a`Im54.fk^aQT=|tV^k1m|=[%c~-j1D_9licr' );
define( 'NONCE_KEY',        'SbWwUZ*AcR}FZJ`R2<pPKDRiEd c!]e1X9rY>/PB&Id0zTI:,E7p CN%O_>+J|v6' );
define( 'AUTH_SALT',        '4HfR:&k(j<Nu{s;}xsV$BT%H6zcrmpcpSW#Oa,PeQiNu-cUEKlX0uf!R=oMP+3b?' );
define( 'SECURE_AUTH_SALT', 'yIaTD8JWTs`=Kph~?.^%/CbmI;*x)YUjIA50]=yHw%^Mcs9|e2k@YKZ62#Ro_Y&g' );
define( 'LOGGED_IN_SALT',   'bo#{(tniq-usA~)[n?kOY!rDk/fAb@Mev/8cQM1+BfA(7kjV/ma{Di*Q}>SaEpv)' );
define( 'NONCE_SALT',       '[gMmkV?n(K#^zB`O;ulT&x(<0SA^)[UhM-&;U]<i[vQ|X{KD[Txox6u:+GLbO3ls' );

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
