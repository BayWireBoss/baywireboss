<?php
define( 'WP_CACHE', false ); // Added by WP Rocket

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
define( 'DB_NAME', 'hosti289_1058814' );

/** MySQL database username */
define( 'DB_USER', 'hosti289_1058814' );

/** MySQL database password */
define( 'DB_PASSWORD', 'i[43yAm+3,Ra' );

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
define( 'AUTH_KEY',         '{wM`,V{rK_~,I4O6,g/l3psL`z-p<Qy&6aSg_HakqN7gtc)RuQ+LU?&S/7&+kv]y' );
define( 'SECURE_AUTH_KEY',  'qL9A<`bzK5x{)y4F*@C=zHCggYk8}eWtUPgfnH.son=z!Z>Ze,nor%},~rAU2fue' );
define( 'LOGGED_IN_KEY',    'vdIl)@Q^=?,q~d@RG,[f90:pYz/SsJ?4@Tdb+u.+_ Qup/Uwa/-l$P4 AJ3BHB[V' );
define( 'NONCE_KEY',        '<^tKxHHj-BTs&01<jKmc^9cf^_B2Nij0eCv2R6IWEkL~Xy=yu4W`FX`c55r!@ov(' );
define( 'AUTH_SALT',        'J;|!lRQ))Ha 9Fi3eA?ok2OmWl.dJyu6g(PL8%,X{O}paFs4f|-&R%LwzC-qtoiF' );
define( 'SECURE_AUTH_SALT', 'Q&QY_kvvSAxvUeHaLmmgwZh(VLLi=g!2D61LiG~gl?R$HF]H`](amyr,4Lr1]/fj' );
define( 'LOGGED_IN_SALT',   'QSK6H[$T**?O=BVC8}(b?`Cn}iAG,>O(PHkxLAWgLsuE#no;Zw|`:k1%pb%,W&.m' );
define( 'NONCE_SALT',       'V fA#*2dLW0*n%Yz) jU,n-dr9gsC[LX-$F`YDN!`[_9EzV(ke:0V/6w8GF;+@x%' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
