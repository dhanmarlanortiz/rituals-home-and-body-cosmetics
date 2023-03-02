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
define( 'DB_NAME', 'rituals-home-and-body-cosmetics' );

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
define( 'AUTH_KEY',         'golQ9?&!L@z*z6~pjz%]nrTb$~)zZnC2THKr[w]TLl=Ghg6:i~r%+F{T$G=O,lD?' );
define( 'SECURE_AUTH_KEY',  'z$ayT*:KV/PRO~tNWhvFDu?~!r=;PqP.)^UpTr6n=Ho`VZ)9E2}tgg4qDf6%piZc' );
define( 'LOGGED_IN_KEY',    'OliN 5dIt3a@:S`B[pNkbS|-3!DP0vn;.fMB4fOd)NW W)hG(4}5GLJ`5FoYr!q)' );
define( 'NONCE_KEY',        'zoU,GO->$%J(WH7,S|*>{:~1BKmau1R+=}}?eWQ0g<y=it[T5IU^_dV[If`C4-?K' );
define( 'AUTH_SALT',        '1:h[|? ?Ix6o4v)T+`Nn:0s(#J,rR[#`R;6zt@0KV;0)]@$<6;N vf~zFc %q/2M' );
define( 'SECURE_AUTH_SALT', 'k0huiPc%n|A?c||UvP&v+:/`;y+yei>C,rj;l*?}T]m3NchN$ANT9N*#LVf %oPS' );
define( 'LOGGED_IN_SALT',   ' T>nrP+w3+carRgg[;$q}A[#9:/ch?=iu*jF.nP ^,5=+K~,DPD`_S] yHY7Yr:l' );
define( 'NONCE_SALT',       '2mui}243%xw{O@Q_<?ZuUG},D[&S{#uQg39[z@A=m@wOmol{b[+W7:yNTnh_s@-e' );

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
