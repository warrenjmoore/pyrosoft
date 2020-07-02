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
define( 'DB_NAME', 'pyrosoft' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '19ekovEDkSWYrIRm' );

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
define( 'AUTH_KEY',         '_ hs.%r`%jJ|cEfJlQ[Dny/;X-a:^9aG(I-eb8 h#%oL<]@DIrLLui/ikHz0KFmC' );
define( 'SECURE_AUTH_KEY',  '2!soX.1$[~[4|TX|qW(#AsjE8Ua5O.QT`F[hIymKGw-ZI?4*mbYV:aABSG gnm/[' );
define( 'LOGGED_IN_KEY',    'B46`@G4RHmB(J;(1J;D}FsSC?L:_sz/Emf7o=z+,_l/;XEF0q$&mHdL#&I.9x3Ps' );
define( 'NONCE_KEY',        'N_/),<h~l>Yi*P{e% TbS8L@E6Q2oY!L[ Lak>BNq8sMJ/U{S773ejD!h_3Ixzjs' );
define( 'AUTH_SALT',        '#2KlP*UKCy`%J?GFI-&islhJu-nE0vD gvRzaFt0-pN.fCq1~^B#YDGeV(?MovdY' );
define( 'SECURE_AUTH_SALT', 'V?1BFc<E1QF6f3e7F0Rsii1w|s[6UOd*}9|CZnrONRqQ rB&IH^|LVO@L ~NZ85X' );
define( 'LOGGED_IN_SALT',   'Bf yYwobv,ynf;-cv*JiRle,oH6m t$p1y4HPGt,]g7<a74#<1Wqr/:g}?p?1&H!' );
define( 'NONCE_SALT',       'JKv_8-UKuX^;)5R|l4BPPBd<jQ:7)pN#Y_Q|XAr$O=_{T9F4..:Ty>cfX}J/*No0' );

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
