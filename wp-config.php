<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'website-demo_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         ']?MfqEjfE%0+2p8A)Qo=;i bzG7UsPnC:ByU`Z<|M5}%cO<,[uY6d%#)l_/,A/;h' );
define( 'SECURE_AUTH_KEY',  'H:EdgE2^DYq#fXQT*wET10>jVmZ7Y?)NrmA,AbLQWw#7OiU13[]fg Q8b w<:vp_' );
define( 'LOGGED_IN_KEY',    '$qm*vet=Pz+v)uF3bv#0kG9[7ij*9q^.7cpRSid[L1@wQYz=pGbvD.ca0p<1xmj=' );
define( 'NONCE_KEY',        '1xW_Zi0K.t?jI%PWj_9&9,iYNFqpnQq{`b%!5J,4M(R+l2{uL7y~n[q*wH[dqc^K' );
define( 'AUTH_SALT',        'zqvulbX-Yp&Ql66zmm7kXM:mqOi9;bGK{qeTRU=Fa#v];}ti&Xp);xt@wEfJq=km' );
define( 'SECURE_AUTH_SALT', ';)0^Q]F%<F43g:oH:Ox)/I.XK;umGmtKQ$ SDCYHc&D[MtG_@U>_#d=[:|UzpfYg' );
define( 'LOGGED_IN_SALT',   'n@_!wtL8*v1:%K$vSx2>UN43X3Q_&hP@z,<O7:3MD%=JMK]  r1~zL2^HzyyI7el' );
define( 'NONCE_SALT',       'aF-{E3}/jobN-n`LAeKj;W_k_l*Q F &P],[Xh8*,&{08KO1GT.A-ky#}(>U%3pw' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
