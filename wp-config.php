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
define('DB_NAME', 'local');

/** Database username */
define('DB_USER', 'root');

/** Database password */
define('DB_PASSWORD', 'root');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',          '65i=%Y|fuShAzY+E^-0WLXRPceT1qoY/hn.-.u!$VdV#rB_G@*x/Nz>$;8`{hR<E');
define('SECURE_AUTH_KEY',   '4#XBSBRcd}.e=XP5<%1}bS@~W<zO)x{%C )79{-W(ga$(fOq)N#qz]l;zbZ#2}C>');
define('LOGGED_IN_KEY',     'Vvm4H7q10$p@l5&)C/:3@i4{fK?rGe,L}n0:7bPOAD7(k<UqF<zPY]@60MwBEwpc');
define('NONCE_KEY',         ' !;4oq%0c]&mel]5w21t2t+[FBJnXUW1g90XLSKE&(B RLKQ3z*C%cIS ++%2=_d');
define('AUTH_SALT',         '~),Fws0pzM}L=f+[ZC/R>J&]Wt{ d(p}Y2v&FkSMw@gl`W-^1H3R@o<> rby|({f');
define('SECURE_AUTH_SALT',  '^~):.>`1%c]{h&C:Vz,=@kYqJ<@m[EfQ6)V9?%~EwX;>8%rw0vXE({2yazYQ(F*Y');
define('LOGGED_IN_SALT',    '^Z]2N,)q}EHiyGcM#$gq,oihOhqPy5=3_mO|N#_O*e*Xn@lTO}#(bf|G*KO6R}$E');
define('NONCE_SALT',        '_-$h#tThf<I[``rg}|ZV`p,p7gPTgY*hE~fo*(zn!<<2,1B~OOB9@vw$U5mLP<&V');
define('WP_CACHE_KEY_SALT', 'XVV@]DR$# Kt@~;HuJ`+t0^JvFx]fyd)tZ5!3$qKL &IFVXq}<}Y@JR:JDReZ-G|');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */

define('WP_DEBUG', true);
define('WP_DISABLE_FATAL_ERROR_HANDLER', true);

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
if (! defined('WP_DEBUG')) {
	define('WP_DEBUG', false);
}

define('WP_ENVIRONMENT_TYPE', 'local');
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (! defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
