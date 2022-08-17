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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp-first' );

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
define( 'AUTH_KEY',         '=#o=URu*ZSo!B3z49U(%CcQ<o;qm8#j`)=ZJynJl558WVZ^1*zfP_j[Ze0ku1u_~' );
define( 'SECURE_AUTH_KEY',  'l*k6 SeZ;IH)nh`ptyirALa4fq,v5]K)ahA-Eq-+/SyhP>:tJpVI1`d#THv/M=~y' );
define( 'LOGGED_IN_KEY',    '%jlox%dq+bC_J{aMM<8.}#$HSTq2wu9-{g=)~Qp*<I9,@HZ=L3o2k0^z8]LW/P2`' );
define( 'NONCE_KEY',        '>SVl9ZCH||n,-A2[bv2+jI1@H%PwVl}S]G($N*&U#gl3Jq1g`kUCs<2uF}YZ6)mO' );
define( 'AUTH_SALT',        '7US{ndM9D57MG!PJH7JyaqBzIvxovdrChfqTN3* f?={n@Q|/dx^snskJeF< j8S' );
define( 'SECURE_AUTH_SALT', 'lo)8?w*zbP!+S^=w< id*!y4@5xYLc,Bdb(V#M^}x5O!O;AF<q~bXX}6URD@#00y' );
define( 'LOGGED_IN_SALT',   '}yaL,=y30GVe!NP6gW3~yS-Ya3-^t9H,(qfksp}7?A=u/bP@;+ZH{E;dIF(F(!!/' );
define( 'NONCE_SALT',       'kq .zp}H+5bhCQ-u3IJVh};1oRjm< wL&8Tkj664)t`3BEzH%7*7E_}!cl[Ff%UD' );

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
