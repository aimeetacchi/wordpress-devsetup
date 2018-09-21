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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpressone' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '@F`JF.#!i8tV=6_F?BbHGX<)3.auVz[CD|G[/Mh&g)dmM!7K[Hs,c,/A8=n%MEw/' );
define( 'SECURE_AUTH_KEY',   '+LY$Mpa~tw5/XoyiXA{9B~MGs7ca/*f0-7VB^2g&xU` ,=z6vWhbzj>vlO`d7d4>' );
define( 'LOGGED_IN_KEY',     'WIwf(S3Noa>8%yn_&t$O/t79,#LdVxCeQYwjatV>xKXbs-p^8+4&(:$`^9dyb6N=' );
define( 'NONCE_KEY',         '_?3}{?*XWuA$SVhVo_QFuvlvlasl)oTj9H=ry-]at/P*VL]h/;Qc1vh}w8}]^)4 ' );
define( 'AUTH_SALT',         'W[;KDn~;`gx8S&s+:_t @>_PEP[kY}m0sb;]9%mo7-!)R>5V&]eYuW ax_= 7thr' );
define( 'SECURE_AUTH_SALT',  '*UVv%4FGSGbd Frb6_0R^4Kzu{WtS/MuFfbYn ;3Li[[[i)?9#/=8N,$zJ?Q^#^,' );
define( 'LOGGED_IN_SALT',    '&p.oX3I2IR?q.Ug^76MrC4[loV5^Qm$H,g[%5@iz7l*aAf=4F-)3)!<=.Nlbh?EU' );
define( 'NONCE_SALT',        '%z8$mWw}cqBT)v{FoI;A/Z?.dUv<g}=.q>C}xmG3Qi&eYYDX^gOUY!%!corZ3.eH' );
define( 'WP_CACHE_KEY_SALT', '<(V&hoU`6npXhgRSg$Sk^ms^&Sd~?Diy1on1[B^ls#!_c+k&6V$!+bBKdJBj?8cz' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
