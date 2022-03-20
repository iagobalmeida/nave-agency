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
define( 'DB_NAME', 'u317546155_0VHLG' );

/** Database username */
define( 'DB_USER', 'u317546155_bbcuB' );

/** Database password */
define( 'DB_PASSWORD', 'ZSe9bihlSm' );

/** Database hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',          'Q|<BjV_K?$u+9:>ftF:2CveLh4M&vQ-W30K,c(Y=i+_lROL#u8LYZe6.P?s<MQb[' );
define( 'SECURE_AUTH_KEY',   '-%:yQ+89*m)qeP4ef`!u(-O]8<xd6|{F,&K;6vG4^gt,4N(MU,.{Cfcv*e U.EIV' );
define( 'LOGGED_IN_KEY',     'nfFogh?%qq/^Y(QW@:OAx0(ulKvV3EYhUZPkX[7SL2X#lc^{SsI>c)`B;7Eh*0Y}' );
define( 'NONCE_KEY',         '`v{:M3JOQwC2GD5bR&zCnbJCNuTk8T}OQp5LlL|,`+F+Zzo`m9CP044]A_Qia:;@' );
define( 'AUTH_SALT',         'Q`d}&NDQiGcZPTgOx,LXS9o[cH@KmVqPh`8+AwE(u!<=dNgi0FyS4Msl(O,KMU2?' );
define( 'SECURE_AUTH_SALT',  '=ugN]TWn[j|Mmf5b~gg<<5roY>ft}K]BeM[tov. i[|X4%~gSK*/o/}>f]bMI]C%' );
define( 'LOGGED_IN_SALT',    'E;`KZQ))/1o]e-0$o;vUNGk;9(A;pqm>?aib(1Ob4]u%5>X8*?`piy;ajUg$T23F' );
define( 'NONCE_SALT',        '2Fo(VDrc5tdwbMslf?-BoL~&3HzCl=sO& &V#iPKG|fO=r6[MG e@kDgpBgAw:la' );
define( 'WP_CACHE_KEY_SALT', '!l0AAR6=9s@*fGf1]/m5B$nZzzYs{< )X9@u{%oT9J~Pt_4E_>7od62c]ex:kuEk' );


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
define( 'WP_DEBUG', true );


/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
