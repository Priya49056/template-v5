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
define( 'DB_NAME', 'templates-v5' );

/** Database username */
define( 'DB_USER', 'TemplatesAdmin' );

/** Database password */
define( 'DB_PASSWORD', 'Z%2mL!3Q#8vJ' );

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
define( 'AUTH_KEY',         'CqR>7+& ]Dd>#>Z?Ds;z;&?K[B%4OBc{ZrZm@0nCRpNnp,YFi#_1@zHNakA0!=!E' );
define( 'SECURE_AUTH_KEY',  '(_I3NZ[Ja3(*5jVagn:`JQ//)sy_&tU_~oR?qh*B~NJnsWa6f1>g1;<V}T!YN++`' );
define( 'LOGGED_IN_KEY',    'g~a&],8HUT?fbPky-.npG.|O3:ox#-zl$L6LMu%cJ:9KG1o:Bb#X>:I5O4GH8rCy' );
define( 'NONCE_KEY',        '>/R/Z;+cUUTBeF$q``Sexd.)6m6+fj*knLWrt1J{3S%(TS8hymcz> ;(b<-Qqk.9' );
define( 'AUTH_SALT',        'M~7bZ;gqJ?J u9I2dko3Tq|d%IHS=ERzO2U:@}Bx!Jj[K!L5mDxs4RyHf~<~]P@Q' );
define( 'SECURE_AUTH_SALT', '>^l$NF-DYcy `zR3sGbRc=kIJ7Fo)AHC5sBR`Ro_54 Vv.h&c&sJG>yaqXE8 vr7' );
define( 'LOGGED_IN_SALT',   'i=>P}A90^fEu:Er6X8uxG}dP0j%n:6;b.>3% Q@l9XM2=c(4[qaw<uqt!npt}QbN' );
define( 'NONCE_SALT',       'aDxVBQ_b2y@V8*^5h:gf/1W3#o?5UO1% QMet%%CofTO>SU pAVyEpU4l-4S#di8' );

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
